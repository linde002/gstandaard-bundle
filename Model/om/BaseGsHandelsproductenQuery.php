<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;

/**
 * @method GsHandelsproductenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsHandelsproductenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsHandelsproductenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsHandelsproductenQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsHandelsproductenQuery orderByMedischHulpmiddelkode($order = Criteria::ASC) Order by the medisch_hulpmiddelkode column
 * @method GsHandelsproductenQuery orderByHandelsproduktnaamnummer($order = Criteria::ASC) Order by the handelsproduktnaamnummer column
 * @method GsHandelsproductenQuery orderByMerkstamnaam($order = Criteria::ASC) Order by the merkstamnaam column
 * @method GsHandelsproductenQuery orderByFirmastamnaam($order = Criteria::ASC) Order by the firmastamnaam column
 * @method GsHandelsproductenQuery orderByProduktgroepThesaurusnummer($order = Criteria::ASC) Order by the produktgroep_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByProduktgroepKode($order = Criteria::ASC) Order by the produktgroep_kode column
 * @method GsHandelsproductenQuery orderBySoortelijkGewicht($order = Criteria::ASC) Order by the soortelijk_gewicht column
 * @method GsHandelsproductenQuery orderByAantalDddsPerBasiseenhProdukt($order = Criteria::ASC) Order by the aantal_ddds_per_basiseenh_produkt column
 * @method GsHandelsproductenQuery orderByAantalDruppelsPerMl($order = Criteria::ASC) Order by the aantal_druppels_per_ml column
 * @method GsHandelsproductenQuery orderByPifnummerThesaurusnummer($order = Criteria::ASC) Order by the pifnummer_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByPifnummer($order = Criteria::ASC) Order by the pifnummer column
 * @method GsHandelsproductenQuery orderByFabrikantProduktkodering($order = Criteria::ASC) Order by the fabrikant_produktkodering column
 * @method GsHandelsproductenQuery orderByRedenNietClusterenThesaurusnr($order = Criteria::ASC) Order by the reden_niet_clusteren_thesaurusnr column
 * @method GsHandelsproductenQuery orderByRedenNietClusterenKode($order = Criteria::ASC) Order by the reden_niet_clusteren_kode column
 * @method GsHandelsproductenQuery orderByFtk1($order = Criteria::ASC) Order by the ftk_1 column
 * @method GsHandelsproductenQuery orderByFtk2($order = Criteria::ASC) Order by the ftk_2 column
 * @method GsHandelsproductenQuery orderByFtk3($order = Criteria::ASC) Order by the ftk_3 column
 * @method GsHandelsproductenQuery orderByFtk4($order = Criteria::ASC) Order by the ftk_4 column
 * @method GsHandelsproductenQuery orderByFtk5($order = Criteria::ASC) Order by the ftk_5 column
 * @method GsHandelsproductenQuery orderByInformatoriumproductcode($order = Criteria::ASC) Order by the informatoriumproductcode column
 * @method GsHandelsproductenQuery orderByKodeCombinatiepreparaat($order = Criteria::ASC) Order by the kode_combinatiepreparaat column
 * @method GsHandelsproductenQuery orderByKodeVergift($order = Criteria::ASC) Order by the kode_vergift column
 * @method GsHandelsproductenQuery orderByKodeRijvaardigheid($order = Criteria::ASC) Order by the kode_rijvaardigheid column
 * @method GsHandelsproductenQuery orderByKodeBrandgevaarlijk($order = Criteria::ASC) Order by the kode_brandgevaarlijk column
 * @method GsHandelsproductenQuery orderByGesteriliseerdVoorGeneesmiddelen($order = Criteria::ASC) Order by the gesteriliseerd_voor_geneesmiddelen column
 * @method GsHandelsproductenQuery orderByHpkeenheidThesaurusnummer($order = Criteria::ASC) Order by the hpkeenheid_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByHpkeenheidKode($order = Criteria::ASC) Order by the hpkeenheid_kode column
 * @method GsHandelsproductenQuery orderByOplosmiddelHoeveelheid1($order = Criteria::ASC) Order by the oplosmiddel_hoeveelheid_1 column
 * @method GsHandelsproductenQuery orderByOplosmiddelAantal1($order = Criteria::ASC) Order by the oplosmiddel_aantal_1 column
 * @method GsHandelsproductenQuery orderByOplosmiddelHoeveelheid2($order = Criteria::ASC) Order by the oplosmiddel_hoeveelheid_2 column
 * @method GsHandelsproductenQuery orderByOplosmiddelAantal2($order = Criteria::ASC) Order by the oplosmiddel_aantal_2 column
 * @method GsHandelsproductenQuery orderByFarmaceutischeKwaliteit($order = Criteria::ASC) Order by the farmaceutische_kwaliteit column
 * @method GsHandelsproductenQuery orderByHalffabrikaatThesaurusnummer($order = Criteria::ASC) Order by the halffabrikaat_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByHalffabrikaatCode($order = Criteria::ASC) Order by the halffabrikaat_code column
 * @method GsHandelsproductenQuery orderByDeelbaarheidAantal($order = Criteria::ASC) Order by the deelbaarheid_aantal column
 * @method GsHandelsproductenQuery orderByEmballagemateriaalThesaurusnummer($order = Criteria::ASC) Order by the emballagemateriaal_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByEmballagemateriaalKode($order = Criteria::ASC) Order by the emballagemateriaal_kode column
 * @method GsHandelsproductenQuery orderByEmballagesluitingThesaurusnummer($order = Criteria::ASC) Order by the emballagesluiting_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByEmballagesluitingKode($order = Criteria::ASC) Order by the emballagesluiting_kode column
 * @method GsHandelsproductenQuery orderByEmballagedoseerinrThesaurusnr($order = Criteria::ASC) Order by the emballagedoseerinr_thesaurusnr column
 * @method GsHandelsproductenQuery orderByEmballagedoseerinrichtingKode($order = Criteria::ASC) Order by the emballagedoseerinrichting_kode column
 * @method GsHandelsproductenQuery orderByHulpstoffenIdentificerend($order = Criteria::ASC) Order by the hulpstoffen_identificerend column
 * @method GsHandelsproductenQuery orderByKleurThesaurusnummer($order = Criteria::ASC) Order by the kleur_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByKleurKode($order = Criteria::ASC) Order by the kleur_kode column
 * @method GsHandelsproductenQuery orderBySmaakThesaurusnummer($order = Criteria::ASC) Order by the smaak_thesaurusnummer column
 * @method GsHandelsproductenQuery orderBySmaakKode($order = Criteria::ASC) Order by the smaak_kode column
 * @method GsHandelsproductenQuery orderByBereidingsvoorschrThesaurusnummer($order = Criteria::ASC) Order by the bereidingsvoorschr_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByBereidingsvoorschriftKode($order = Criteria::ASC) Order by the bereidingsvoorschrift_kode column
 * @method GsHandelsproductenQuery orderByFysischeEigenschapThesaurusnummer($order = Criteria::ASC) Order by the fysische_eigenschap_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByFysischeEigenschapKode($order = Criteria::ASC) Order by the fysische_eigenschap_kode column
 * @method GsHandelsproductenQuery orderByGrondstofvormThesaurusnummer($order = Criteria::ASC) Order by the grondstofvorm_thesaurusnummer column
 * @method GsHandelsproductenQuery orderByGrondstofvormKode($order = Criteria::ASC) Order by the grondstofvorm_kode column
 * @method GsHandelsproductenQuery orderByLosVerkrijgbaar($order = Criteria::ASC) Order by the los_verkrijgbaar column
 * @method GsHandelsproductenQuery orderByBioequivalenteGroep($order = Criteria::ASC) Order by the bioequivalente_groep column
 * @method GsHandelsproductenQuery orderByKodeRadioactieveStof($order = Criteria::ASC) Order by the kode_radioactieve_stof column
 * @method GsHandelsproductenQuery orderBySoortHulpmiddel($order = Criteria::ASC) Order by the soort_hulpmiddel column
 * @method GsHandelsproductenQuery orderByRzvThesaurus120($order = Criteria::ASC) Order by the rzv_thesaurus_120 column
 * @method GsHandelsproductenQuery orderByRzvvoorwaardenBijlage2($order = Criteria::ASC) Order by the rzvvoorwaarden_bijlage_2 column
 * @method GsHandelsproductenQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsHandelsproductenQuery orderByTekstVerwijzing($order = Criteria::ASC) Order by the tekst_verwijzing column
 * @method GsHandelsproductenQuery orderByHulpmiddelVolgensAwbz($order = Criteria::ASC) Order by the hulpmiddel_volgens_awbz column
 * @method GsHandelsproductenQuery orderByEenheidInkoophoeveelheidThesnr($order = Criteria::ASC) Order by the eenheid_inkoophoeveelheid_thesnr column
 * @method GsHandelsproductenQuery orderByEenheidInkoophoeveelheid($order = Criteria::ASC) Order by the eenheid_inkoophoeveelheid column
 * @method GsHandelsproductenQuery orderByBasiseenheidVerpakkingThesnr($order = Criteria::ASC) Order by the basiseenheid_verpakking_thesnr column
 * @method GsHandelsproductenQuery orderByBasiseenheidVerpakking($order = Criteria::ASC) Order by the basiseenheid_verpakking column
 * @method GsHandelsproductenQuery orderByRichtlijnGebruikOndergrens($order = Criteria::ASC) Order by the richtlijn_gebruik_ondergrens column
 * @method GsHandelsproductenQuery orderByRichtlijnGebruikBovengrens($order = Criteria::ASC) Order by the richtlijn_gebruik_bovengrens column
 * @method GsHandelsproductenQuery orderByThesaurusRzvVerstrekking($order = Criteria::ASC) Order by the thesaurus_rzv_verstrekking column
 * @method GsHandelsproductenQuery orderByRzvverstrekking($order = Criteria::ASC) Order by the rzvverstrekking column
 * @method GsHandelsproductenQuery orderByThesaurusRzvRationaliteit($order = Criteria::ASC) Order by the thesaurus_rzv_rationaliteit column
 * @method GsHandelsproductenQuery orderByBeoordelingRationaliteit($order = Criteria::ASC) Order by the beoordeling_rationaliteit column
 * @method GsHandelsproductenQuery orderByThesaurusRzvBeoordeling($order = Criteria::ASC) Order by the thesaurus_rzv_beoordeling column
 * @method GsHandelsproductenQuery orderByAchtergrondRationaliteit($order = Criteria::ASC) Order by the achtergrond_rationaliteit column
 * @method GsHandelsproductenQuery orderByThesaurusRzvHulpmiddelen($order = Criteria::ASC) Order by the thesaurus_rzv_hulpmiddelen column
 * @method GsHandelsproductenQuery orderByHulpmiddelenZorg($order = Criteria::ASC) Order by the hulpmiddelen_zorg column
 *
 * @method GsHandelsproductenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsHandelsproductenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsHandelsproductenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsHandelsproductenQuery groupByPrkcode() Group by the prkcode column
 * @method GsHandelsproductenQuery groupByMedischHulpmiddelkode() Group by the medisch_hulpmiddelkode column
 * @method GsHandelsproductenQuery groupByHandelsproduktnaamnummer() Group by the handelsproduktnaamnummer column
 * @method GsHandelsproductenQuery groupByMerkstamnaam() Group by the merkstamnaam column
 * @method GsHandelsproductenQuery groupByFirmastamnaam() Group by the firmastamnaam column
 * @method GsHandelsproductenQuery groupByProduktgroepThesaurusnummer() Group by the produktgroep_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByProduktgroepKode() Group by the produktgroep_kode column
 * @method GsHandelsproductenQuery groupBySoortelijkGewicht() Group by the soortelijk_gewicht column
 * @method GsHandelsproductenQuery groupByAantalDddsPerBasiseenhProdukt() Group by the aantal_ddds_per_basiseenh_produkt column
 * @method GsHandelsproductenQuery groupByAantalDruppelsPerMl() Group by the aantal_druppels_per_ml column
 * @method GsHandelsproductenQuery groupByPifnummerThesaurusnummer() Group by the pifnummer_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByPifnummer() Group by the pifnummer column
 * @method GsHandelsproductenQuery groupByFabrikantProduktkodering() Group by the fabrikant_produktkodering column
 * @method GsHandelsproductenQuery groupByRedenNietClusterenThesaurusnr() Group by the reden_niet_clusteren_thesaurusnr column
 * @method GsHandelsproductenQuery groupByRedenNietClusterenKode() Group by the reden_niet_clusteren_kode column
 * @method GsHandelsproductenQuery groupByFtk1() Group by the ftk_1 column
 * @method GsHandelsproductenQuery groupByFtk2() Group by the ftk_2 column
 * @method GsHandelsproductenQuery groupByFtk3() Group by the ftk_3 column
 * @method GsHandelsproductenQuery groupByFtk4() Group by the ftk_4 column
 * @method GsHandelsproductenQuery groupByFtk5() Group by the ftk_5 column
 * @method GsHandelsproductenQuery groupByInformatoriumproductcode() Group by the informatoriumproductcode column
 * @method GsHandelsproductenQuery groupByKodeCombinatiepreparaat() Group by the kode_combinatiepreparaat column
 * @method GsHandelsproductenQuery groupByKodeVergift() Group by the kode_vergift column
 * @method GsHandelsproductenQuery groupByKodeRijvaardigheid() Group by the kode_rijvaardigheid column
 * @method GsHandelsproductenQuery groupByKodeBrandgevaarlijk() Group by the kode_brandgevaarlijk column
 * @method GsHandelsproductenQuery groupByGesteriliseerdVoorGeneesmiddelen() Group by the gesteriliseerd_voor_geneesmiddelen column
 * @method GsHandelsproductenQuery groupByHpkeenheidThesaurusnummer() Group by the hpkeenheid_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByHpkeenheidKode() Group by the hpkeenheid_kode column
 * @method GsHandelsproductenQuery groupByOplosmiddelHoeveelheid1() Group by the oplosmiddel_hoeveelheid_1 column
 * @method GsHandelsproductenQuery groupByOplosmiddelAantal1() Group by the oplosmiddel_aantal_1 column
 * @method GsHandelsproductenQuery groupByOplosmiddelHoeveelheid2() Group by the oplosmiddel_hoeveelheid_2 column
 * @method GsHandelsproductenQuery groupByOplosmiddelAantal2() Group by the oplosmiddel_aantal_2 column
 * @method GsHandelsproductenQuery groupByFarmaceutischeKwaliteit() Group by the farmaceutische_kwaliteit column
 * @method GsHandelsproductenQuery groupByHalffabrikaatThesaurusnummer() Group by the halffabrikaat_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByHalffabrikaatCode() Group by the halffabrikaat_code column
 * @method GsHandelsproductenQuery groupByDeelbaarheidAantal() Group by the deelbaarheid_aantal column
 * @method GsHandelsproductenQuery groupByEmballagemateriaalThesaurusnummer() Group by the emballagemateriaal_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByEmballagemateriaalKode() Group by the emballagemateriaal_kode column
 * @method GsHandelsproductenQuery groupByEmballagesluitingThesaurusnummer() Group by the emballagesluiting_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByEmballagesluitingKode() Group by the emballagesluiting_kode column
 * @method GsHandelsproductenQuery groupByEmballagedoseerinrThesaurusnr() Group by the emballagedoseerinr_thesaurusnr column
 * @method GsHandelsproductenQuery groupByEmballagedoseerinrichtingKode() Group by the emballagedoseerinrichting_kode column
 * @method GsHandelsproductenQuery groupByHulpstoffenIdentificerend() Group by the hulpstoffen_identificerend column
 * @method GsHandelsproductenQuery groupByKleurThesaurusnummer() Group by the kleur_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByKleurKode() Group by the kleur_kode column
 * @method GsHandelsproductenQuery groupBySmaakThesaurusnummer() Group by the smaak_thesaurusnummer column
 * @method GsHandelsproductenQuery groupBySmaakKode() Group by the smaak_kode column
 * @method GsHandelsproductenQuery groupByBereidingsvoorschrThesaurusnummer() Group by the bereidingsvoorschr_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByBereidingsvoorschriftKode() Group by the bereidingsvoorschrift_kode column
 * @method GsHandelsproductenQuery groupByFysischeEigenschapThesaurusnummer() Group by the fysische_eigenschap_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByFysischeEigenschapKode() Group by the fysische_eigenschap_kode column
 * @method GsHandelsproductenQuery groupByGrondstofvormThesaurusnummer() Group by the grondstofvorm_thesaurusnummer column
 * @method GsHandelsproductenQuery groupByGrondstofvormKode() Group by the grondstofvorm_kode column
 * @method GsHandelsproductenQuery groupByLosVerkrijgbaar() Group by the los_verkrijgbaar column
 * @method GsHandelsproductenQuery groupByBioequivalenteGroep() Group by the bioequivalente_groep column
 * @method GsHandelsproductenQuery groupByKodeRadioactieveStof() Group by the kode_radioactieve_stof column
 * @method GsHandelsproductenQuery groupBySoortHulpmiddel() Group by the soort_hulpmiddel column
 * @method GsHandelsproductenQuery groupByRzvThesaurus120() Group by the rzv_thesaurus_120 column
 * @method GsHandelsproductenQuery groupByRzvvoorwaardenBijlage2() Group by the rzvvoorwaarden_bijlage_2 column
 * @method GsHandelsproductenQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsHandelsproductenQuery groupByTekstVerwijzing() Group by the tekst_verwijzing column
 * @method GsHandelsproductenQuery groupByHulpmiddelVolgensAwbz() Group by the hulpmiddel_volgens_awbz column
 * @method GsHandelsproductenQuery groupByEenheidInkoophoeveelheidThesnr() Group by the eenheid_inkoophoeveelheid_thesnr column
 * @method GsHandelsproductenQuery groupByEenheidInkoophoeveelheid() Group by the eenheid_inkoophoeveelheid column
 * @method GsHandelsproductenQuery groupByBasiseenheidVerpakkingThesnr() Group by the basiseenheid_verpakking_thesnr column
 * @method GsHandelsproductenQuery groupByBasiseenheidVerpakking() Group by the basiseenheid_verpakking column
 * @method GsHandelsproductenQuery groupByRichtlijnGebruikOndergrens() Group by the richtlijn_gebruik_ondergrens column
 * @method GsHandelsproductenQuery groupByRichtlijnGebruikBovengrens() Group by the richtlijn_gebruik_bovengrens column
 * @method GsHandelsproductenQuery groupByThesaurusRzvVerstrekking() Group by the thesaurus_rzv_verstrekking column
 * @method GsHandelsproductenQuery groupByRzvverstrekking() Group by the rzvverstrekking column
 * @method GsHandelsproductenQuery groupByThesaurusRzvRationaliteit() Group by the thesaurus_rzv_rationaliteit column
 * @method GsHandelsproductenQuery groupByBeoordelingRationaliteit() Group by the beoordeling_rationaliteit column
 * @method GsHandelsproductenQuery groupByThesaurusRzvBeoordeling() Group by the thesaurus_rzv_beoordeling column
 * @method GsHandelsproductenQuery groupByAchtergrondRationaliteit() Group by the achtergrond_rationaliteit column
 * @method GsHandelsproductenQuery groupByThesaurusRzvHulpmiddelen() Group by the thesaurus_rzv_hulpmiddelen column
 * @method GsHandelsproductenQuery groupByHulpmiddelenZorg() Group by the hulpmiddelen_zorg column
 *
 * @method GsHandelsproductenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsHandelsproductenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsHandelsproductenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsHandelsproductenQuery leftJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsHandelsproductenQuery rightJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsHandelsproductenQuery innerJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 *
 * @method GsHandelsproductenQuery leftJoinGsNamen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNamen relation
 * @method GsHandelsproductenQuery rightJoinGsNamen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNamen relation
 * @method GsHandelsproductenQuery innerJoinGsNamen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNamen relation
 *
 * @method GsHandelsproductenQuery leftJoinInkoophoeveelheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the InkoophoeveelheidOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinInkoophoeveelheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InkoophoeveelheidOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinInkoophoeveelheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the InkoophoeveelheidOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinBasiseenheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the BasiseenheidOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinBasiseenheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BasiseenheidOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinBasiseenheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the BasiseenheidOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinEmballageMateriaalOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmballageMateriaalOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinEmballageMateriaalOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmballageMateriaalOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinEmballageMateriaalOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the EmballageMateriaalOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinEmballageSluitingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmballageSluitingOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinEmballageSluitingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmballageSluitingOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinEmballageSluitingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the EmballageSluitingOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinEmballageDoseerinrichtingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmballageDoseerinrichtingOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinEmballageDoseerinrichtingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmballageDoseerinrichtingOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinEmballageDoseerinrichtingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the EmballageDoseerinrichtingOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinKleurOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the KleurOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinKleurOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the KleurOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinKleurOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the KleurOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinSmaakOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the SmaakOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinSmaakOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SmaakOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinSmaakOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the SmaakOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinBereidingsvoorschrijftOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the BereidingsvoorschrijftOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinBereidingsvoorschrijftOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BereidingsvoorschrijftOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinBereidingsvoorschrijftOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the BereidingsvoorschrijftOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinProduktgroepOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProduktgroepOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinProduktgroepOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProduktgroepOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinProduktgroepOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the ProduktgroepOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinRzvVerstrekkingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
 * @method GsHandelsproductenQuery rightJoinRzvVerstrekkingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
 * @method GsHandelsproductenQuery innerJoinRzvVerstrekkingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinRzvBijlage2Omschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RzvBijlage2Omschrijving relation
 * @method GsHandelsproductenQuery rightJoinRzvBijlage2Omschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RzvBijlage2Omschrijving relation
 * @method GsHandelsproductenQuery innerJoinRzvBijlage2Omschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RzvBijlage2Omschrijving relation
 *
 * @method GsHandelsproductenQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsHandelsproductenQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsHandelsproductenQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsHandelsproductenQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsHandelsproductenQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsHandelsproductenQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsHandelsproductenQuery leftJoinGsBijzondereKenmerken($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsHandelsproductenQuery rightJoinGsBijzondereKenmerken($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsHandelsproductenQuery innerJoinGsBijzondereKenmerken($relationAlias = null) Adds a INNER JOIN clause to the query using the GsBijzondereKenmerken relation
 *
 * @method GsHandelsproductenQuery leftJoinGsDeclaratietabelDureGeneesmiddelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelen relation
 * @method GsHandelsproductenQuery rightJoinGsDeclaratietabelDureGeneesmiddelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelen relation
 * @method GsHandelsproductenQuery innerJoinGsDeclaratietabelDureGeneesmiddelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelen relation
 *
 * @method GsHandelsproductenQuery leftJoinGsIngegevenSamenstellingen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsIngegevenSamenstellingen relation
 * @method GsHandelsproductenQuery rightJoinGsIngegevenSamenstellingen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsIngegevenSamenstellingen relation
 * @method GsHandelsproductenQuery innerJoinGsIngegevenSamenstellingen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsIngegevenSamenstellingen relation
 *
 * @method GsHandelsproducten findOne(PropelPDO $con = null) Return the first GsHandelsproducten matching the query
 * @method GsHandelsproducten findOneOrCreate(PropelPDO $con = null) Return the first GsHandelsproducten matching the query, or a new GsHandelsproducten object populated from the query conditions when no match is found
 *
 * @method GsHandelsproducten findOneByBestandnummer(int $bestandnummer) Return the first GsHandelsproducten filtered by the bestandnummer column
 * @method GsHandelsproducten findOneByMutatiekode(int $mutatiekode) Return the first GsHandelsproducten filtered by the mutatiekode column
 * @method GsHandelsproducten findOneByPrkcode(int $prkcode) Return the first GsHandelsproducten filtered by the prkcode column
 * @method GsHandelsproducten findOneByMedischHulpmiddelkode(int $medisch_hulpmiddelkode) Return the first GsHandelsproducten filtered by the medisch_hulpmiddelkode column
 * @method GsHandelsproducten findOneByHandelsproduktnaamnummer(int $handelsproduktnaamnummer) Return the first GsHandelsproducten filtered by the handelsproduktnaamnummer column
 * @method GsHandelsproducten findOneByMerkstamnaam(string $merkstamnaam) Return the first GsHandelsproducten filtered by the merkstamnaam column
 * @method GsHandelsproducten findOneByFirmastamnaam(string $firmastamnaam) Return the first GsHandelsproducten filtered by the firmastamnaam column
 * @method GsHandelsproducten findOneByProduktgroepThesaurusnummer(int $produktgroep_thesaurusnummer) Return the first GsHandelsproducten filtered by the produktgroep_thesaurusnummer column
 * @method GsHandelsproducten findOneByProduktgroepKode(int $produktgroep_kode) Return the first GsHandelsproducten filtered by the produktgroep_kode column
 * @method GsHandelsproducten findOneBySoortelijkGewicht(string $soortelijk_gewicht) Return the first GsHandelsproducten filtered by the soortelijk_gewicht column
 * @method GsHandelsproducten findOneByAantalDddsPerBasiseenhProdukt(string $aantal_ddds_per_basiseenh_produkt) Return the first GsHandelsproducten filtered by the aantal_ddds_per_basiseenh_produkt column
 * @method GsHandelsproducten findOneByAantalDruppelsPerMl(string $aantal_druppels_per_ml) Return the first GsHandelsproducten filtered by the aantal_druppels_per_ml column
 * @method GsHandelsproducten findOneByPifnummerThesaurusnummer(int $pifnummer_thesaurusnummer) Return the first GsHandelsproducten filtered by the pifnummer_thesaurusnummer column
 * @method GsHandelsproducten findOneByPifnummer(int $pifnummer) Return the first GsHandelsproducten filtered by the pifnummer column
 * @method GsHandelsproducten findOneByFabrikantProduktkodering(string $fabrikant_produktkodering) Return the first GsHandelsproducten filtered by the fabrikant_produktkodering column
 * @method GsHandelsproducten findOneByRedenNietClusterenThesaurusnr(int $reden_niet_clusteren_thesaurusnr) Return the first GsHandelsproducten filtered by the reden_niet_clusteren_thesaurusnr column
 * @method GsHandelsproducten findOneByRedenNietClusterenKode(int $reden_niet_clusteren_kode) Return the first GsHandelsproducten filtered by the reden_niet_clusteren_kode column
 * @method GsHandelsproducten findOneByFtk1(int $ftk_1) Return the first GsHandelsproducten filtered by the ftk_1 column
 * @method GsHandelsproducten findOneByFtk2(int $ftk_2) Return the first GsHandelsproducten filtered by the ftk_2 column
 * @method GsHandelsproducten findOneByFtk3(int $ftk_3) Return the first GsHandelsproducten filtered by the ftk_3 column
 * @method GsHandelsproducten findOneByFtk4(int $ftk_4) Return the first GsHandelsproducten filtered by the ftk_4 column
 * @method GsHandelsproducten findOneByFtk5(int $ftk_5) Return the first GsHandelsproducten filtered by the ftk_5 column
 * @method GsHandelsproducten findOneByInformatoriumproductcode(int $informatoriumproductcode) Return the first GsHandelsproducten filtered by the informatoriumproductcode column
 * @method GsHandelsproducten findOneByKodeCombinatiepreparaat(int $kode_combinatiepreparaat) Return the first GsHandelsproducten filtered by the kode_combinatiepreparaat column
 * @method GsHandelsproducten findOneByKodeVergift(string $kode_vergift) Return the first GsHandelsproducten filtered by the kode_vergift column
 * @method GsHandelsproducten findOneByKodeRijvaardigheid(string $kode_rijvaardigheid) Return the first GsHandelsproducten filtered by the kode_rijvaardigheid column
 * @method GsHandelsproducten findOneByKodeBrandgevaarlijk(string $kode_brandgevaarlijk) Return the first GsHandelsproducten filtered by the kode_brandgevaarlijk column
 * @method GsHandelsproducten findOneByGesteriliseerdVoorGeneesmiddelen(string $gesteriliseerd_voor_geneesmiddelen) Return the first GsHandelsproducten filtered by the gesteriliseerd_voor_geneesmiddelen column
 * @method GsHandelsproducten findOneByHpkeenheidThesaurusnummer(int $hpkeenheid_thesaurusnummer) Return the first GsHandelsproducten filtered by the hpkeenheid_thesaurusnummer column
 * @method GsHandelsproducten findOneByHpkeenheidKode(int $hpkeenheid_kode) Return the first GsHandelsproducten filtered by the hpkeenheid_kode column
 * @method GsHandelsproducten findOneByOplosmiddelHoeveelheid1(string $oplosmiddel_hoeveelheid_1) Return the first GsHandelsproducten filtered by the oplosmiddel_hoeveelheid_1 column
 * @method GsHandelsproducten findOneByOplosmiddelAantal1(int $oplosmiddel_aantal_1) Return the first GsHandelsproducten filtered by the oplosmiddel_aantal_1 column
 * @method GsHandelsproducten findOneByOplosmiddelHoeveelheid2(string $oplosmiddel_hoeveelheid_2) Return the first GsHandelsproducten filtered by the oplosmiddel_hoeveelheid_2 column
 * @method GsHandelsproducten findOneByOplosmiddelAantal2(int $oplosmiddel_aantal_2) Return the first GsHandelsproducten filtered by the oplosmiddel_aantal_2 column
 * @method GsHandelsproducten findOneByFarmaceutischeKwaliteit(string $farmaceutische_kwaliteit) Return the first GsHandelsproducten filtered by the farmaceutische_kwaliteit column
 * @method GsHandelsproducten findOneByHalffabrikaatThesaurusnummer(int $halffabrikaat_thesaurusnummer) Return the first GsHandelsproducten filtered by the halffabrikaat_thesaurusnummer column
 * @method GsHandelsproducten findOneByHalffabrikaatCode(int $halffabrikaat_code) Return the first GsHandelsproducten filtered by the halffabrikaat_code column
 * @method GsHandelsproducten findOneByDeelbaarheidAantal(int $deelbaarheid_aantal) Return the first GsHandelsproducten filtered by the deelbaarheid_aantal column
 * @method GsHandelsproducten findOneByEmballagemateriaalThesaurusnummer(int $emballagemateriaal_thesaurusnummer) Return the first GsHandelsproducten filtered by the emballagemateriaal_thesaurusnummer column
 * @method GsHandelsproducten findOneByEmballagemateriaalKode(int $emballagemateriaal_kode) Return the first GsHandelsproducten filtered by the emballagemateriaal_kode column
 * @method GsHandelsproducten findOneByEmballagesluitingThesaurusnummer(int $emballagesluiting_thesaurusnummer) Return the first GsHandelsproducten filtered by the emballagesluiting_thesaurusnummer column
 * @method GsHandelsproducten findOneByEmballagesluitingKode(int $emballagesluiting_kode) Return the first GsHandelsproducten filtered by the emballagesluiting_kode column
 * @method GsHandelsproducten findOneByEmballagedoseerinrThesaurusnr(int $emballagedoseerinr_thesaurusnr) Return the first GsHandelsproducten filtered by the emballagedoseerinr_thesaurusnr column
 * @method GsHandelsproducten findOneByEmballagedoseerinrichtingKode(int $emballagedoseerinrichting_kode) Return the first GsHandelsproducten filtered by the emballagedoseerinrichting_kode column
 * @method GsHandelsproducten findOneByHulpstoffenIdentificerend(string $hulpstoffen_identificerend) Return the first GsHandelsproducten filtered by the hulpstoffen_identificerend column
 * @method GsHandelsproducten findOneByKleurThesaurusnummer(int $kleur_thesaurusnummer) Return the first GsHandelsproducten filtered by the kleur_thesaurusnummer column
 * @method GsHandelsproducten findOneByKleurKode(int $kleur_kode) Return the first GsHandelsproducten filtered by the kleur_kode column
 * @method GsHandelsproducten findOneBySmaakThesaurusnummer(int $smaak_thesaurusnummer) Return the first GsHandelsproducten filtered by the smaak_thesaurusnummer column
 * @method GsHandelsproducten findOneBySmaakKode(int $smaak_kode) Return the first GsHandelsproducten filtered by the smaak_kode column
 * @method GsHandelsproducten findOneByBereidingsvoorschrThesaurusnummer(int $bereidingsvoorschr_thesaurusnummer) Return the first GsHandelsproducten filtered by the bereidingsvoorschr_thesaurusnummer column
 * @method GsHandelsproducten findOneByBereidingsvoorschriftKode(int $bereidingsvoorschrift_kode) Return the first GsHandelsproducten filtered by the bereidingsvoorschrift_kode column
 * @method GsHandelsproducten findOneByFysischeEigenschapThesaurusnummer(int $fysische_eigenschap_thesaurusnummer) Return the first GsHandelsproducten filtered by the fysische_eigenschap_thesaurusnummer column
 * @method GsHandelsproducten findOneByFysischeEigenschapKode(int $fysische_eigenschap_kode) Return the first GsHandelsproducten filtered by the fysische_eigenschap_kode column
 * @method GsHandelsproducten findOneByGrondstofvormThesaurusnummer(int $grondstofvorm_thesaurusnummer) Return the first GsHandelsproducten filtered by the grondstofvorm_thesaurusnummer column
 * @method GsHandelsproducten findOneByGrondstofvormKode(int $grondstofvorm_kode) Return the first GsHandelsproducten filtered by the grondstofvorm_kode column
 * @method GsHandelsproducten findOneByLosVerkrijgbaar(string $los_verkrijgbaar) Return the first GsHandelsproducten filtered by the los_verkrijgbaar column
 * @method GsHandelsproducten findOneByBioequivalenteGroep(int $bioequivalente_groep) Return the first GsHandelsproducten filtered by the bioequivalente_groep column
 * @method GsHandelsproducten findOneByKodeRadioactieveStof(string $kode_radioactieve_stof) Return the first GsHandelsproducten filtered by the kode_radioactieve_stof column
 * @method GsHandelsproducten findOneBySoortHulpmiddel(int $soort_hulpmiddel) Return the first GsHandelsproducten filtered by the soort_hulpmiddel column
 * @method GsHandelsproducten findOneByRzvThesaurus120(int $rzv_thesaurus_120) Return the first GsHandelsproducten filtered by the rzv_thesaurus_120 column
 * @method GsHandelsproducten findOneByRzvvoorwaardenBijlage2(int $rzvvoorwaarden_bijlage_2) Return the first GsHandelsproducten filtered by the rzvvoorwaarden_bijlage_2 column
 * @method GsHandelsproducten findOneByTekstmodule(int $tekstmodule) Return the first GsHandelsproducten filtered by the tekstmodule column
 * @method GsHandelsproducten findOneByTekstVerwijzing(int $tekst_verwijzing) Return the first GsHandelsproducten filtered by the tekst_verwijzing column
 * @method GsHandelsproducten findOneByHulpmiddelVolgensAwbz(string $hulpmiddel_volgens_awbz) Return the first GsHandelsproducten filtered by the hulpmiddel_volgens_awbz column
 * @method GsHandelsproducten findOneByEenheidInkoophoeveelheidThesnr(int $eenheid_inkoophoeveelheid_thesnr) Return the first GsHandelsproducten filtered by the eenheid_inkoophoeveelheid_thesnr column
 * @method GsHandelsproducten findOneByEenheidInkoophoeveelheid(int $eenheid_inkoophoeveelheid) Return the first GsHandelsproducten filtered by the eenheid_inkoophoeveelheid column
 * @method GsHandelsproducten findOneByBasiseenheidVerpakkingThesnr(int $basiseenheid_verpakking_thesnr) Return the first GsHandelsproducten filtered by the basiseenheid_verpakking_thesnr column
 * @method GsHandelsproducten findOneByBasiseenheidVerpakking(int $basiseenheid_verpakking) Return the first GsHandelsproducten filtered by the basiseenheid_verpakking column
 * @method GsHandelsproducten findOneByRichtlijnGebruikOndergrens(string $richtlijn_gebruik_ondergrens) Return the first GsHandelsproducten filtered by the richtlijn_gebruik_ondergrens column
 * @method GsHandelsproducten findOneByRichtlijnGebruikBovengrens(string $richtlijn_gebruik_bovengrens) Return the first GsHandelsproducten filtered by the richtlijn_gebruik_bovengrens column
 * @method GsHandelsproducten findOneByThesaurusRzvVerstrekking(int $thesaurus_rzv_verstrekking) Return the first GsHandelsproducten filtered by the thesaurus_rzv_verstrekking column
 * @method GsHandelsproducten findOneByRzvverstrekking(int $rzvverstrekking) Return the first GsHandelsproducten filtered by the rzvverstrekking column
 * @method GsHandelsproducten findOneByThesaurusRzvRationaliteit(int $thesaurus_rzv_rationaliteit) Return the first GsHandelsproducten filtered by the thesaurus_rzv_rationaliteit column
 * @method GsHandelsproducten findOneByBeoordelingRationaliteit(int $beoordeling_rationaliteit) Return the first GsHandelsproducten filtered by the beoordeling_rationaliteit column
 * @method GsHandelsproducten findOneByThesaurusRzvBeoordeling(int $thesaurus_rzv_beoordeling) Return the first GsHandelsproducten filtered by the thesaurus_rzv_beoordeling column
 * @method GsHandelsproducten findOneByAchtergrondRationaliteit(int $achtergrond_rationaliteit) Return the first GsHandelsproducten filtered by the achtergrond_rationaliteit column
 * @method GsHandelsproducten findOneByThesaurusRzvHulpmiddelen(int $thesaurus_rzv_hulpmiddelen) Return the first GsHandelsproducten filtered by the thesaurus_rzv_hulpmiddelen column
 * @method GsHandelsproducten findOneByHulpmiddelenZorg(int $hulpmiddelen_zorg) Return the first GsHandelsproducten filtered by the hulpmiddelen_zorg column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsHandelsproducten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsHandelsproducten objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsHandelsproducten objects filtered by the handelsproduktkode column
 * @method array findByPrkcode(int $prkcode) Return GsHandelsproducten objects filtered by the prkcode column
 * @method array findByMedischHulpmiddelkode(int $medisch_hulpmiddelkode) Return GsHandelsproducten objects filtered by the medisch_hulpmiddelkode column
 * @method array findByHandelsproduktnaamnummer(int $handelsproduktnaamnummer) Return GsHandelsproducten objects filtered by the handelsproduktnaamnummer column
 * @method array findByMerkstamnaam(string $merkstamnaam) Return GsHandelsproducten objects filtered by the merkstamnaam column
 * @method array findByFirmastamnaam(string $firmastamnaam) Return GsHandelsproducten objects filtered by the firmastamnaam column
 * @method array findByProduktgroepThesaurusnummer(int $produktgroep_thesaurusnummer) Return GsHandelsproducten objects filtered by the produktgroep_thesaurusnummer column
 * @method array findByProduktgroepKode(int $produktgroep_kode) Return GsHandelsproducten objects filtered by the produktgroep_kode column
 * @method array findBySoortelijkGewicht(string $soortelijk_gewicht) Return GsHandelsproducten objects filtered by the soortelijk_gewicht column
 * @method array findByAantalDddsPerBasiseenhProdukt(string $aantal_ddds_per_basiseenh_produkt) Return GsHandelsproducten objects filtered by the aantal_ddds_per_basiseenh_produkt column
 * @method array findByAantalDruppelsPerMl(string $aantal_druppels_per_ml) Return GsHandelsproducten objects filtered by the aantal_druppels_per_ml column
 * @method array findByPifnummerThesaurusnummer(int $pifnummer_thesaurusnummer) Return GsHandelsproducten objects filtered by the pifnummer_thesaurusnummer column
 * @method array findByPifnummer(int $pifnummer) Return GsHandelsproducten objects filtered by the pifnummer column
 * @method array findByFabrikantProduktkodering(string $fabrikant_produktkodering) Return GsHandelsproducten objects filtered by the fabrikant_produktkodering column
 * @method array findByRedenNietClusterenThesaurusnr(int $reden_niet_clusteren_thesaurusnr) Return GsHandelsproducten objects filtered by the reden_niet_clusteren_thesaurusnr column
 * @method array findByRedenNietClusterenKode(int $reden_niet_clusteren_kode) Return GsHandelsproducten objects filtered by the reden_niet_clusteren_kode column
 * @method array findByFtk1(int $ftk_1) Return GsHandelsproducten objects filtered by the ftk_1 column
 * @method array findByFtk2(int $ftk_2) Return GsHandelsproducten objects filtered by the ftk_2 column
 * @method array findByFtk3(int $ftk_3) Return GsHandelsproducten objects filtered by the ftk_3 column
 * @method array findByFtk4(int $ftk_4) Return GsHandelsproducten objects filtered by the ftk_4 column
 * @method array findByFtk5(int $ftk_5) Return GsHandelsproducten objects filtered by the ftk_5 column
 * @method array findByInformatoriumproductcode(int $informatoriumproductcode) Return GsHandelsproducten objects filtered by the informatoriumproductcode column
 * @method array findByKodeCombinatiepreparaat(int $kode_combinatiepreparaat) Return GsHandelsproducten objects filtered by the kode_combinatiepreparaat column
 * @method array findByKodeVergift(string $kode_vergift) Return GsHandelsproducten objects filtered by the kode_vergift column
 * @method array findByKodeRijvaardigheid(string $kode_rijvaardigheid) Return GsHandelsproducten objects filtered by the kode_rijvaardigheid column
 * @method array findByKodeBrandgevaarlijk(string $kode_brandgevaarlijk) Return GsHandelsproducten objects filtered by the kode_brandgevaarlijk column
 * @method array findByGesteriliseerdVoorGeneesmiddelen(string $gesteriliseerd_voor_geneesmiddelen) Return GsHandelsproducten objects filtered by the gesteriliseerd_voor_geneesmiddelen column
 * @method array findByHpkeenheidThesaurusnummer(int $hpkeenheid_thesaurusnummer) Return GsHandelsproducten objects filtered by the hpkeenheid_thesaurusnummer column
 * @method array findByHpkeenheidKode(int $hpkeenheid_kode) Return GsHandelsproducten objects filtered by the hpkeenheid_kode column
 * @method array findByOplosmiddelHoeveelheid1(string $oplosmiddel_hoeveelheid_1) Return GsHandelsproducten objects filtered by the oplosmiddel_hoeveelheid_1 column
 * @method array findByOplosmiddelAantal1(int $oplosmiddel_aantal_1) Return GsHandelsproducten objects filtered by the oplosmiddel_aantal_1 column
 * @method array findByOplosmiddelHoeveelheid2(string $oplosmiddel_hoeveelheid_2) Return GsHandelsproducten objects filtered by the oplosmiddel_hoeveelheid_2 column
 * @method array findByOplosmiddelAantal2(int $oplosmiddel_aantal_2) Return GsHandelsproducten objects filtered by the oplosmiddel_aantal_2 column
 * @method array findByFarmaceutischeKwaliteit(string $farmaceutische_kwaliteit) Return GsHandelsproducten objects filtered by the farmaceutische_kwaliteit column
 * @method array findByHalffabrikaatThesaurusnummer(int $halffabrikaat_thesaurusnummer) Return GsHandelsproducten objects filtered by the halffabrikaat_thesaurusnummer column
 * @method array findByHalffabrikaatCode(int $halffabrikaat_code) Return GsHandelsproducten objects filtered by the halffabrikaat_code column
 * @method array findByDeelbaarheidAantal(int $deelbaarheid_aantal) Return GsHandelsproducten objects filtered by the deelbaarheid_aantal column
 * @method array findByEmballagemateriaalThesaurusnummer(int $emballagemateriaal_thesaurusnummer) Return GsHandelsproducten objects filtered by the emballagemateriaal_thesaurusnummer column
 * @method array findByEmballagemateriaalKode(int $emballagemateriaal_kode) Return GsHandelsproducten objects filtered by the emballagemateriaal_kode column
 * @method array findByEmballagesluitingThesaurusnummer(int $emballagesluiting_thesaurusnummer) Return GsHandelsproducten objects filtered by the emballagesluiting_thesaurusnummer column
 * @method array findByEmballagesluitingKode(int $emballagesluiting_kode) Return GsHandelsproducten objects filtered by the emballagesluiting_kode column
 * @method array findByEmballagedoseerinrThesaurusnr(int $emballagedoseerinr_thesaurusnr) Return GsHandelsproducten objects filtered by the emballagedoseerinr_thesaurusnr column
 * @method array findByEmballagedoseerinrichtingKode(int $emballagedoseerinrichting_kode) Return GsHandelsproducten objects filtered by the emballagedoseerinrichting_kode column
 * @method array findByHulpstoffenIdentificerend(string $hulpstoffen_identificerend) Return GsHandelsproducten objects filtered by the hulpstoffen_identificerend column
 * @method array findByKleurThesaurusnummer(int $kleur_thesaurusnummer) Return GsHandelsproducten objects filtered by the kleur_thesaurusnummer column
 * @method array findByKleurKode(int $kleur_kode) Return GsHandelsproducten objects filtered by the kleur_kode column
 * @method array findBySmaakThesaurusnummer(int $smaak_thesaurusnummer) Return GsHandelsproducten objects filtered by the smaak_thesaurusnummer column
 * @method array findBySmaakKode(int $smaak_kode) Return GsHandelsproducten objects filtered by the smaak_kode column
 * @method array findByBereidingsvoorschrThesaurusnummer(int $bereidingsvoorschr_thesaurusnummer) Return GsHandelsproducten objects filtered by the bereidingsvoorschr_thesaurusnummer column
 * @method array findByBereidingsvoorschriftKode(int $bereidingsvoorschrift_kode) Return GsHandelsproducten objects filtered by the bereidingsvoorschrift_kode column
 * @method array findByFysischeEigenschapThesaurusnummer(int $fysische_eigenschap_thesaurusnummer) Return GsHandelsproducten objects filtered by the fysische_eigenschap_thesaurusnummer column
 * @method array findByFysischeEigenschapKode(int $fysische_eigenschap_kode) Return GsHandelsproducten objects filtered by the fysische_eigenschap_kode column
 * @method array findByGrondstofvormThesaurusnummer(int $grondstofvorm_thesaurusnummer) Return GsHandelsproducten objects filtered by the grondstofvorm_thesaurusnummer column
 * @method array findByGrondstofvormKode(int $grondstofvorm_kode) Return GsHandelsproducten objects filtered by the grondstofvorm_kode column
 * @method array findByLosVerkrijgbaar(string $los_verkrijgbaar) Return GsHandelsproducten objects filtered by the los_verkrijgbaar column
 * @method array findByBioequivalenteGroep(int $bioequivalente_groep) Return GsHandelsproducten objects filtered by the bioequivalente_groep column
 * @method array findByKodeRadioactieveStof(string $kode_radioactieve_stof) Return GsHandelsproducten objects filtered by the kode_radioactieve_stof column
 * @method array findBySoortHulpmiddel(int $soort_hulpmiddel) Return GsHandelsproducten objects filtered by the soort_hulpmiddel column
 * @method array findByRzvThesaurus120(int $rzv_thesaurus_120) Return GsHandelsproducten objects filtered by the rzv_thesaurus_120 column
 * @method array findByRzvvoorwaardenBijlage2(int $rzvvoorwaarden_bijlage_2) Return GsHandelsproducten objects filtered by the rzvvoorwaarden_bijlage_2 column
 * @method array findByTekstmodule(int $tekstmodule) Return GsHandelsproducten objects filtered by the tekstmodule column
 * @method array findByTekstVerwijzing(int $tekst_verwijzing) Return GsHandelsproducten objects filtered by the tekst_verwijzing column
 * @method array findByHulpmiddelVolgensAwbz(string $hulpmiddel_volgens_awbz) Return GsHandelsproducten objects filtered by the hulpmiddel_volgens_awbz column
 * @method array findByEenheidInkoophoeveelheidThesnr(int $eenheid_inkoophoeveelheid_thesnr) Return GsHandelsproducten objects filtered by the eenheid_inkoophoeveelheid_thesnr column
 * @method array findByEenheidInkoophoeveelheid(int $eenheid_inkoophoeveelheid) Return GsHandelsproducten objects filtered by the eenheid_inkoophoeveelheid column
 * @method array findByBasiseenheidVerpakkingThesnr(int $basiseenheid_verpakking_thesnr) Return GsHandelsproducten objects filtered by the basiseenheid_verpakking_thesnr column
 * @method array findByBasiseenheidVerpakking(int $basiseenheid_verpakking) Return GsHandelsproducten objects filtered by the basiseenheid_verpakking column
 * @method array findByRichtlijnGebruikOndergrens(string $richtlijn_gebruik_ondergrens) Return GsHandelsproducten objects filtered by the richtlijn_gebruik_ondergrens column
 * @method array findByRichtlijnGebruikBovengrens(string $richtlijn_gebruik_bovengrens) Return GsHandelsproducten objects filtered by the richtlijn_gebruik_bovengrens column
 * @method array findByThesaurusRzvVerstrekking(int $thesaurus_rzv_verstrekking) Return GsHandelsproducten objects filtered by the thesaurus_rzv_verstrekking column
 * @method array findByRzvverstrekking(int $rzvverstrekking) Return GsHandelsproducten objects filtered by the rzvverstrekking column
 * @method array findByThesaurusRzvRationaliteit(int $thesaurus_rzv_rationaliteit) Return GsHandelsproducten objects filtered by the thesaurus_rzv_rationaliteit column
 * @method array findByBeoordelingRationaliteit(int $beoordeling_rationaliteit) Return GsHandelsproducten objects filtered by the beoordeling_rationaliteit column
 * @method array findByThesaurusRzvBeoordeling(int $thesaurus_rzv_beoordeling) Return GsHandelsproducten objects filtered by the thesaurus_rzv_beoordeling column
 * @method array findByAchtergrondRationaliteit(int $achtergrond_rationaliteit) Return GsHandelsproducten objects filtered by the achtergrond_rationaliteit column
 * @method array findByThesaurusRzvHulpmiddelen(int $thesaurus_rzv_hulpmiddelen) Return GsHandelsproducten objects filtered by the thesaurus_rzv_hulpmiddelen column
 * @method array findByHulpmiddelenZorg(int $hulpmiddelen_zorg) Return GsHandelsproducten objects filtered by the hulpmiddelen_zorg column
 */
abstract class BaseGsHandelsproductenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsHandelsproductenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsHandelsproductenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsHandelsproductenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsHandelsproductenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsHandelsproductenQuery) {
            return $criteria;
        }
        $query = new GsHandelsproductenQuery(null, null, $modelAlias);

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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsHandelsproducten|GsHandelsproducten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsHandelsproductenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsHandelsproducten A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByHandelsproduktkode($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsHandelsproducten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `prkcode`, `medisch_hulpmiddelkode`, `handelsproduktnaamnummer`, `merkstamnaam`, `firmastamnaam`, `produktgroep_thesaurusnummer`, `produktgroep_kode`, `soortelijk_gewicht`, `aantal_ddds_per_basiseenh_produkt`, `aantal_druppels_per_ml`, `pifnummer_thesaurusnummer`, `pifnummer`, `fabrikant_produktkodering`, `reden_niet_clusteren_thesaurusnr`, `reden_niet_clusteren_kode`, `ftk_1`, `ftk_2`, `ftk_3`, `ftk_4`, `ftk_5`, `informatoriumproductcode`, `kode_combinatiepreparaat`, `kode_vergift`, `kode_rijvaardigheid`, `kode_brandgevaarlijk`, `gesteriliseerd_voor_geneesmiddelen`, `hpkeenheid_thesaurusnummer`, `hpkeenheid_kode`, `oplosmiddel_hoeveelheid_1`, `oplosmiddel_aantal_1`, `oplosmiddel_hoeveelheid_2`, `oplosmiddel_aantal_2`, `farmaceutische_kwaliteit`, `halffabrikaat_thesaurusnummer`, `halffabrikaat_code`, `deelbaarheid_aantal`, `emballagemateriaal_thesaurusnummer`, `emballagemateriaal_kode`, `emballagesluiting_thesaurusnummer`, `emballagesluiting_kode`, `emballagedoseerinr_thesaurusnr`, `emballagedoseerinrichting_kode`, `hulpstoffen_identificerend`, `kleur_thesaurusnummer`, `kleur_kode`, `smaak_thesaurusnummer`, `smaak_kode`, `bereidingsvoorschr_thesaurusnummer`, `bereidingsvoorschrift_kode`, `fysische_eigenschap_thesaurusnummer`, `fysische_eigenschap_kode`, `grondstofvorm_thesaurusnummer`, `grondstofvorm_kode`, `los_verkrijgbaar`, `bioequivalente_groep`, `kode_radioactieve_stof`, `soort_hulpmiddel`, `rzv_thesaurus_120`, `rzvvoorwaarden_bijlage_2`, `tekstmodule`, `tekst_verwijzing`, `hulpmiddel_volgens_awbz`, `eenheid_inkoophoeveelheid_thesnr`, `eenheid_inkoophoeveelheid`, `basiseenheid_verpakking_thesnr`, `basiseenheid_verpakking`, `richtlijn_gebruik_ondergrens`, `richtlijn_gebruik_bovengrens`, `thesaurus_rzv_verstrekking`, `rzvverstrekking`, `thesaurus_rzv_rationaliteit`, `beoordeling_rationaliteit`, `thesaurus_rzv_beoordeling`, `achtergrond_rationaliteit`, `thesaurus_rzv_hulpmiddelen`, `hulpmiddelen_zorg` FROM `gs_handelsproducten` WHERE `handelsproduktkode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsHandelsproducten();
            $obj->hydrate($row);
            GsHandelsproductenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsHandelsproducten|GsHandelsproducten[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GsHandelsproducten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $keys, Criteria::IN);
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
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the handelsproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterByHandelsproduktkode(1234); // WHERE handelsproduktkode = 1234
     * $query->filterByHandelsproduktkode(array(12, 34)); // WHERE handelsproduktkode IN (12, 34)
     * $query->filterByHandelsproduktkode(array('min' => 12)); // WHERE handelsproduktkode >= 12
     * $query->filterByHandelsproduktkode(array('max' => 12)); // WHERE handelsproduktkode <= 12
     * </code>
     *
     * @param     mixed $handelsproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the prkcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkcode(1234); // WHERE prkcode = 1234
     * $query->filterByPrkcode(array(12, 34)); // WHERE prkcode IN (12, 34)
     * $query->filterByPrkcode(array('min' => 12)); // WHERE prkcode >= 12
     * $query->filterByPrkcode(array('max' => 12)); // WHERE prkcode <= 12
     * </code>
     *
     * @see       filterByGsVoorschrijfprGeneesmiddelIdentific()
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::PRKCODE, $prkcode, $comparison);
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
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByMedischHulpmiddelkode($medischHulpmiddelkode = null, $comparison = null)
    {
        if (is_array($medischHulpmiddelkode)) {
            $useMinMax = false;
            if (isset($medischHulpmiddelkode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE, $medischHulpmiddelkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medischHulpmiddelkode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE, $medischHulpmiddelkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE, $medischHulpmiddelkode, $comparison);
    }

    /**
     * Filter the query on the handelsproduktnaamnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByHandelsproduktnaamnummer(1234); // WHERE handelsproduktnaamnummer = 1234
     * $query->filterByHandelsproduktnaamnummer(array(12, 34)); // WHERE handelsproduktnaamnummer IN (12, 34)
     * $query->filterByHandelsproduktnaamnummer(array('min' => 12)); // WHERE handelsproduktnaamnummer >= 12
     * $query->filterByHandelsproduktnaamnummer(array('max' => 12)); // WHERE handelsproduktnaamnummer <= 12
     * </code>
     *
     * @see       filterByGsNamen()
     *
     * @param     mixed $handelsproduktnaamnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktnaamnummer($handelsproduktnaamnummer = null, $comparison = null)
    {
        if (is_array($handelsproduktnaamnummer)) {
            $useMinMax = false;
            if (isset($handelsproduktnaamnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, $handelsproduktnaamnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktnaamnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, $handelsproduktnaamnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, $handelsproduktnaamnummer, $comparison);
    }

    /**
     * Filter the query on the merkstamnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByMerkstamnaam('fooValue');   // WHERE merkstamnaam = 'fooValue'
     * $query->filterByMerkstamnaam('%fooValue%'); // WHERE merkstamnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $merkstamnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByMerkstamnaam($merkstamnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($merkstamnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $merkstamnaam)) {
                $merkstamnaam = str_replace('*', '%', $merkstamnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::MERKSTAMNAAM, $merkstamnaam, $comparison);
    }

    /**
     * Filter the query on the firmastamnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByFirmastamnaam('fooValue');   // WHERE firmastamnaam = 'fooValue'
     * $query->filterByFirmastamnaam('%fooValue%'); // WHERE firmastamnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firmastamnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFirmastamnaam($firmastamnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firmastamnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firmastamnaam)) {
                $firmastamnaam = str_replace('*', '%', $firmastamnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FIRMASTAMNAAM, $firmastamnaam, $comparison);
    }

    /**
     * Filter the query on the produktgroep_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByProduktgroepThesaurusnummer(1234); // WHERE produktgroep_thesaurusnummer = 1234
     * $query->filterByProduktgroepThesaurusnummer(array(12, 34)); // WHERE produktgroep_thesaurusnummer IN (12, 34)
     * $query->filterByProduktgroepThesaurusnummer(array('min' => 12)); // WHERE produktgroep_thesaurusnummer >= 12
     * $query->filterByProduktgroepThesaurusnummer(array('max' => 12)); // WHERE produktgroep_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByProduktgroepOmschrijving()
     *
     * @param     mixed $produktgroepThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByProduktgroepThesaurusnummer($produktgroepThesaurusnummer = null, $comparison = null)
    {
        if (is_array($produktgroepThesaurusnummer)) {
            $useMinMax = false;
            if (isset($produktgroepThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, $produktgroepThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($produktgroepThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, $produktgroepThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, $produktgroepThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the produktgroep_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByProduktgroepKode(1234); // WHERE produktgroep_kode = 1234
     * $query->filterByProduktgroepKode(array(12, 34)); // WHERE produktgroep_kode IN (12, 34)
     * $query->filterByProduktgroepKode(array('min' => 12)); // WHERE produktgroep_kode >= 12
     * $query->filterByProduktgroepKode(array('max' => 12)); // WHERE produktgroep_kode <= 12
     * </code>
     *
     * @see       filterByProduktgroepOmschrijving()
     *
     * @param     mixed $produktgroepKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByProduktgroepKode($produktgroepKode = null, $comparison = null)
    {
        if (is_array($produktgroepKode)) {
            $useMinMax = false;
            if (isset($produktgroepKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_KODE, $produktgroepKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($produktgroepKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_KODE, $produktgroepKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_KODE, $produktgroepKode, $comparison);
    }

    /**
     * Filter the query on the soortelijk_gewicht column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortelijkGewicht(1234); // WHERE soortelijk_gewicht = 1234
     * $query->filterBySoortelijkGewicht(array(12, 34)); // WHERE soortelijk_gewicht IN (12, 34)
     * $query->filterBySoortelijkGewicht(array('min' => 12)); // WHERE soortelijk_gewicht >= 12
     * $query->filterBySoortelijkGewicht(array('max' => 12)); // WHERE soortelijk_gewicht <= 12
     * </code>
     *
     * @param     mixed $soortelijkGewicht The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterBySoortelijkGewicht($soortelijkGewicht = null, $comparison = null)
    {
        if (is_array($soortelijkGewicht)) {
            $useMinMax = false;
            if (isset($soortelijkGewicht['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SOORTELIJK_GEWICHT, $soortelijkGewicht['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortelijkGewicht['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SOORTELIJK_GEWICHT, $soortelijkGewicht['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::SOORTELIJK_GEWICHT, $soortelijkGewicht, $comparison);
    }

    /**
     * Filter the query on the aantal_ddds_per_basiseenh_produkt column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDddsPerBasiseenhProdukt(1234); // WHERE aantal_ddds_per_basiseenh_produkt = 1234
     * $query->filterByAantalDddsPerBasiseenhProdukt(array(12, 34)); // WHERE aantal_ddds_per_basiseenh_produkt IN (12, 34)
     * $query->filterByAantalDddsPerBasiseenhProdukt(array('min' => 12)); // WHERE aantal_ddds_per_basiseenh_produkt >= 12
     * $query->filterByAantalDddsPerBasiseenhProdukt(array('max' => 12)); // WHERE aantal_ddds_per_basiseenh_produkt <= 12
     * </code>
     *
     * @param     mixed $aantalDddsPerBasiseenhProdukt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByAantalDddsPerBasiseenhProdukt($aantalDddsPerBasiseenhProdukt = null, $comparison = null)
    {
        if (is_array($aantalDddsPerBasiseenhProdukt)) {
            $useMinMax = false;
            if (isset($aantalDddsPerBasiseenhProdukt['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT, $aantalDddsPerBasiseenhProdukt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDddsPerBasiseenhProdukt['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT, $aantalDddsPerBasiseenhProdukt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT, $aantalDddsPerBasiseenhProdukt, $comparison);
    }

    /**
     * Filter the query on the aantal_druppels_per_ml column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDruppelsPerMl(1234); // WHERE aantal_druppels_per_ml = 1234
     * $query->filterByAantalDruppelsPerMl(array(12, 34)); // WHERE aantal_druppels_per_ml IN (12, 34)
     * $query->filterByAantalDruppelsPerMl(array('min' => 12)); // WHERE aantal_druppels_per_ml >= 12
     * $query->filterByAantalDruppelsPerMl(array('max' => 12)); // WHERE aantal_druppels_per_ml <= 12
     * </code>
     *
     * @param     mixed $aantalDruppelsPerMl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByAantalDruppelsPerMl($aantalDruppelsPerMl = null, $comparison = null)
    {
        if (is_array($aantalDruppelsPerMl)) {
            $useMinMax = false;
            if (isset($aantalDruppelsPerMl['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML, $aantalDruppelsPerMl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDruppelsPerMl['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML, $aantalDruppelsPerMl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML, $aantalDruppelsPerMl, $comparison);
    }

    /**
     * Filter the query on the pifnummer_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByPifnummerThesaurusnummer(1234); // WHERE pifnummer_thesaurusnummer = 1234
     * $query->filterByPifnummerThesaurusnummer(array(12, 34)); // WHERE pifnummer_thesaurusnummer IN (12, 34)
     * $query->filterByPifnummerThesaurusnummer(array('min' => 12)); // WHERE pifnummer_thesaurusnummer >= 12
     * $query->filterByPifnummerThesaurusnummer(array('max' => 12)); // WHERE pifnummer_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $pifnummerThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByPifnummerThesaurusnummer($pifnummerThesaurusnummer = null, $comparison = null)
    {
        if (is_array($pifnummerThesaurusnummer)) {
            $useMinMax = false;
            if (isset($pifnummerThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER, $pifnummerThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pifnummerThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER, $pifnummerThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER, $pifnummerThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the pifnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByPifnummer(1234); // WHERE pifnummer = 1234
     * $query->filterByPifnummer(array(12, 34)); // WHERE pifnummer IN (12, 34)
     * $query->filterByPifnummer(array('min' => 12)); // WHERE pifnummer >= 12
     * $query->filterByPifnummer(array('max' => 12)); // WHERE pifnummer <= 12
     * </code>
     *
     * @param     mixed $pifnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByPifnummer($pifnummer = null, $comparison = null)
    {
        if (is_array($pifnummer)) {
            $useMinMax = false;
            if (isset($pifnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PIFNUMMER, $pifnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pifnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::PIFNUMMER, $pifnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::PIFNUMMER, $pifnummer, $comparison);
    }

    /**
     * Filter the query on the fabrikant_produktkodering column
     *
     * Example usage:
     * <code>
     * $query->filterByFabrikantProduktkodering('fooValue');   // WHERE fabrikant_produktkodering = 'fooValue'
     * $query->filterByFabrikantProduktkodering('%fooValue%'); // WHERE fabrikant_produktkodering LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fabrikantProduktkodering The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFabrikantProduktkodering($fabrikantProduktkodering = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fabrikantProduktkodering)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fabrikantProduktkodering)) {
                $fabrikantProduktkodering = str_replace('*', '%', $fabrikantProduktkodering);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING, $fabrikantProduktkodering, $comparison);
    }

    /**
     * Filter the query on the reden_niet_clusteren_thesaurusnr column
     *
     * Example usage:
     * <code>
     * $query->filterByRedenNietClusterenThesaurusnr(1234); // WHERE reden_niet_clusteren_thesaurusnr = 1234
     * $query->filterByRedenNietClusterenThesaurusnr(array(12, 34)); // WHERE reden_niet_clusteren_thesaurusnr IN (12, 34)
     * $query->filterByRedenNietClusterenThesaurusnr(array('min' => 12)); // WHERE reden_niet_clusteren_thesaurusnr >= 12
     * $query->filterByRedenNietClusterenThesaurusnr(array('max' => 12)); // WHERE reden_niet_clusteren_thesaurusnr <= 12
     * </code>
     *
     * @param     mixed $redenNietClusterenThesaurusnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRedenNietClusterenThesaurusnr($redenNietClusterenThesaurusnr = null, $comparison = null)
    {
        if (is_array($redenNietClusterenThesaurusnr)) {
            $useMinMax = false;
            if (isset($redenNietClusterenThesaurusnr['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR, $redenNietClusterenThesaurusnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redenNietClusterenThesaurusnr['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR, $redenNietClusterenThesaurusnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR, $redenNietClusterenThesaurusnr, $comparison);
    }

    /**
     * Filter the query on the reden_niet_clusteren_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByRedenNietClusterenKode(1234); // WHERE reden_niet_clusteren_kode = 1234
     * $query->filterByRedenNietClusterenKode(array(12, 34)); // WHERE reden_niet_clusteren_kode IN (12, 34)
     * $query->filterByRedenNietClusterenKode(array('min' => 12)); // WHERE reden_niet_clusteren_kode >= 12
     * $query->filterByRedenNietClusterenKode(array('max' => 12)); // WHERE reden_niet_clusteren_kode <= 12
     * </code>
     *
     * @param     mixed $redenNietClusterenKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRedenNietClusterenKode($redenNietClusterenKode = null, $comparison = null)
    {
        if (is_array($redenNietClusterenKode)) {
            $useMinMax = false;
            if (isset($redenNietClusterenKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE, $redenNietClusterenKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redenNietClusterenKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE, $redenNietClusterenKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE, $redenNietClusterenKode, $comparison);
    }

    /**
     * Filter the query on the ftk_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFtk1(1234); // WHERE ftk_1 = 1234
     * $query->filterByFtk1(array(12, 34)); // WHERE ftk_1 IN (12, 34)
     * $query->filterByFtk1(array('min' => 12)); // WHERE ftk_1 >= 12
     * $query->filterByFtk1(array('max' => 12)); // WHERE ftk_1 <= 12
     * </code>
     *
     * @param     mixed $ftk1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFtk1($ftk1 = null, $comparison = null)
    {
        if (is_array($ftk1)) {
            $useMinMax = false;
            if (isset($ftk1['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_1, $ftk1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ftk1['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_1, $ftk1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FTK_1, $ftk1, $comparison);
    }

    /**
     * Filter the query on the ftk_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFtk2(1234); // WHERE ftk_2 = 1234
     * $query->filterByFtk2(array(12, 34)); // WHERE ftk_2 IN (12, 34)
     * $query->filterByFtk2(array('min' => 12)); // WHERE ftk_2 >= 12
     * $query->filterByFtk2(array('max' => 12)); // WHERE ftk_2 <= 12
     * </code>
     *
     * @param     mixed $ftk2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFtk2($ftk2 = null, $comparison = null)
    {
        if (is_array($ftk2)) {
            $useMinMax = false;
            if (isset($ftk2['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_2, $ftk2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ftk2['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_2, $ftk2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FTK_2, $ftk2, $comparison);
    }

    /**
     * Filter the query on the ftk_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByFtk3(1234); // WHERE ftk_3 = 1234
     * $query->filterByFtk3(array(12, 34)); // WHERE ftk_3 IN (12, 34)
     * $query->filterByFtk3(array('min' => 12)); // WHERE ftk_3 >= 12
     * $query->filterByFtk3(array('max' => 12)); // WHERE ftk_3 <= 12
     * </code>
     *
     * @param     mixed $ftk3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFtk3($ftk3 = null, $comparison = null)
    {
        if (is_array($ftk3)) {
            $useMinMax = false;
            if (isset($ftk3['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_3, $ftk3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ftk3['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_3, $ftk3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FTK_3, $ftk3, $comparison);
    }

    /**
     * Filter the query on the ftk_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByFtk4(1234); // WHERE ftk_4 = 1234
     * $query->filterByFtk4(array(12, 34)); // WHERE ftk_4 IN (12, 34)
     * $query->filterByFtk4(array('min' => 12)); // WHERE ftk_4 >= 12
     * $query->filterByFtk4(array('max' => 12)); // WHERE ftk_4 <= 12
     * </code>
     *
     * @param     mixed $ftk4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFtk4($ftk4 = null, $comparison = null)
    {
        if (is_array($ftk4)) {
            $useMinMax = false;
            if (isset($ftk4['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_4, $ftk4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ftk4['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_4, $ftk4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FTK_4, $ftk4, $comparison);
    }

    /**
     * Filter the query on the ftk_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByFtk5(1234); // WHERE ftk_5 = 1234
     * $query->filterByFtk5(array(12, 34)); // WHERE ftk_5 IN (12, 34)
     * $query->filterByFtk5(array('min' => 12)); // WHERE ftk_5 >= 12
     * $query->filterByFtk5(array('max' => 12)); // WHERE ftk_5 <= 12
     * </code>
     *
     * @param     mixed $ftk5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFtk5($ftk5 = null, $comparison = null)
    {
        if (is_array($ftk5)) {
            $useMinMax = false;
            if (isset($ftk5['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_5, $ftk5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ftk5['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FTK_5, $ftk5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FTK_5, $ftk5, $comparison);
    }

    /**
     * Filter the query on the informatoriumproductcode column
     *
     * Example usage:
     * <code>
     * $query->filterByInformatoriumproductcode(1234); // WHERE informatoriumproductcode = 1234
     * $query->filterByInformatoriumproductcode(array(12, 34)); // WHERE informatoriumproductcode IN (12, 34)
     * $query->filterByInformatoriumproductcode(array('min' => 12)); // WHERE informatoriumproductcode >= 12
     * $query->filterByInformatoriumproductcode(array('max' => 12)); // WHERE informatoriumproductcode <= 12
     * </code>
     *
     * @param     mixed $informatoriumproductcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByInformatoriumproductcode($informatoriumproductcode = null, $comparison = null)
    {
        if (is_array($informatoriumproductcode)) {
            $useMinMax = false;
            if (isset($informatoriumproductcode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE, $informatoriumproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($informatoriumproductcode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE, $informatoriumproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE, $informatoriumproductcode, $comparison);
    }

    /**
     * Filter the query on the kode_combinatiepreparaat column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeCombinatiepreparaat(1234); // WHERE kode_combinatiepreparaat = 1234
     * $query->filterByKodeCombinatiepreparaat(array(12, 34)); // WHERE kode_combinatiepreparaat IN (12, 34)
     * $query->filterByKodeCombinatiepreparaat(array('min' => 12)); // WHERE kode_combinatiepreparaat >= 12
     * $query->filterByKodeCombinatiepreparaat(array('max' => 12)); // WHERE kode_combinatiepreparaat <= 12
     * </code>
     *
     * @param     mixed $kodeCombinatiepreparaat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKodeCombinatiepreparaat($kodeCombinatiepreparaat = null, $comparison = null)
    {
        if (is_array($kodeCombinatiepreparaat)) {
            $useMinMax = false;
            if (isset($kodeCombinatiepreparaat['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT, $kodeCombinatiepreparaat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kodeCombinatiepreparaat['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT, $kodeCombinatiepreparaat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT, $kodeCombinatiepreparaat, $comparison);
    }

    /**
     * Filter the query on the kode_vergift column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeVergift('fooValue');   // WHERE kode_vergift = 'fooValue'
     * $query->filterByKodeVergift('%fooValue%'); // WHERE kode_vergift LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeVergift The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKodeVergift($kodeVergift = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeVergift)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeVergift)) {
                $kodeVergift = str_replace('*', '%', $kodeVergift);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KODE_VERGIFT, $kodeVergift, $comparison);
    }

    /**
     * Filter the query on the kode_rijvaardigheid column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeRijvaardigheid('fooValue');   // WHERE kode_rijvaardigheid = 'fooValue'
     * $query->filterByKodeRijvaardigheid('%fooValue%'); // WHERE kode_rijvaardigheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeRijvaardigheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKodeRijvaardigheid($kodeRijvaardigheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeRijvaardigheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeRijvaardigheid)) {
                $kodeRijvaardigheid = str_replace('*', '%', $kodeRijvaardigheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KODE_RIJVAARDIGHEID, $kodeRijvaardigheid, $comparison);
    }

    /**
     * Filter the query on the kode_brandgevaarlijk column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeBrandgevaarlijk('fooValue');   // WHERE kode_brandgevaarlijk = 'fooValue'
     * $query->filterByKodeBrandgevaarlijk('%fooValue%'); // WHERE kode_brandgevaarlijk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeBrandgevaarlijk The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKodeBrandgevaarlijk($kodeBrandgevaarlijk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeBrandgevaarlijk)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeBrandgevaarlijk)) {
                $kodeBrandgevaarlijk = str_replace('*', '%', $kodeBrandgevaarlijk);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK, $kodeBrandgevaarlijk, $comparison);
    }

    /**
     * Filter the query on the gesteriliseerd_voor_geneesmiddelen column
     *
     * Example usage:
     * <code>
     * $query->filterByGesteriliseerdVoorGeneesmiddelen('fooValue');   // WHERE gesteriliseerd_voor_geneesmiddelen = 'fooValue'
     * $query->filterByGesteriliseerdVoorGeneesmiddelen('%fooValue%'); // WHERE gesteriliseerd_voor_geneesmiddelen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gesteriliseerdVoorGeneesmiddelen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByGesteriliseerdVoorGeneesmiddelen($gesteriliseerdVoorGeneesmiddelen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gesteriliseerdVoorGeneesmiddelen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gesteriliseerdVoorGeneesmiddelen)) {
                $gesteriliseerdVoorGeneesmiddelen = str_replace('*', '%', $gesteriliseerdVoorGeneesmiddelen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN, $gesteriliseerdVoorGeneesmiddelen, $comparison);
    }

    /**
     * Filter the query on the hpkeenheid_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkeenheidThesaurusnummer(1234); // WHERE hpkeenheid_thesaurusnummer = 1234
     * $query->filterByHpkeenheidThesaurusnummer(array(12, 34)); // WHERE hpkeenheid_thesaurusnummer IN (12, 34)
     * $query->filterByHpkeenheidThesaurusnummer(array('min' => 12)); // WHERE hpkeenheid_thesaurusnummer >= 12
     * $query->filterByHpkeenheidThesaurusnummer(array('max' => 12)); // WHERE hpkeenheid_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $hpkeenheidThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHpkeenheidThesaurusnummer($hpkeenheidThesaurusnummer = null, $comparison = null)
    {
        if (is_array($hpkeenheidThesaurusnummer)) {
            $useMinMax = false;
            if (isset($hpkeenheidThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER, $hpkeenheidThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpkeenheidThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER, $hpkeenheidThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER, $hpkeenheidThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the hpkeenheid_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkeenheidKode(1234); // WHERE hpkeenheid_kode = 1234
     * $query->filterByHpkeenheidKode(array(12, 34)); // WHERE hpkeenheid_kode IN (12, 34)
     * $query->filterByHpkeenheidKode(array('min' => 12)); // WHERE hpkeenheid_kode >= 12
     * $query->filterByHpkeenheidKode(array('max' => 12)); // WHERE hpkeenheid_kode <= 12
     * </code>
     *
     * @param     mixed $hpkeenheidKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHpkeenheidKode($hpkeenheidKode = null, $comparison = null)
    {
        if (is_array($hpkeenheidKode)) {
            $useMinMax = false;
            if (isset($hpkeenheidKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HPKEENHEID_KODE, $hpkeenheidKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpkeenheidKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HPKEENHEID_KODE, $hpkeenheidKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HPKEENHEID_KODE, $hpkeenheidKode, $comparison);
    }

    /**
     * Filter the query on the oplosmiddel_hoeveelheid_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOplosmiddelHoeveelheid1(1234); // WHERE oplosmiddel_hoeveelheid_1 = 1234
     * $query->filterByOplosmiddelHoeveelheid1(array(12, 34)); // WHERE oplosmiddel_hoeveelheid_1 IN (12, 34)
     * $query->filterByOplosmiddelHoeveelheid1(array('min' => 12)); // WHERE oplosmiddel_hoeveelheid_1 >= 12
     * $query->filterByOplosmiddelHoeveelheid1(array('max' => 12)); // WHERE oplosmiddel_hoeveelheid_1 <= 12
     * </code>
     *
     * @param     mixed $oplosmiddelHoeveelheid1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByOplosmiddelHoeveelheid1($oplosmiddelHoeveelheid1 = null, $comparison = null)
    {
        if (is_array($oplosmiddelHoeveelheid1)) {
            $useMinMax = false;
            if (isset($oplosmiddelHoeveelheid1['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1, $oplosmiddelHoeveelheid1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oplosmiddelHoeveelheid1['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1, $oplosmiddelHoeveelheid1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1, $oplosmiddelHoeveelheid1, $comparison);
    }

    /**
     * Filter the query on the oplosmiddel_aantal_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOplosmiddelAantal1(1234); // WHERE oplosmiddel_aantal_1 = 1234
     * $query->filterByOplosmiddelAantal1(array(12, 34)); // WHERE oplosmiddel_aantal_1 IN (12, 34)
     * $query->filterByOplosmiddelAantal1(array('min' => 12)); // WHERE oplosmiddel_aantal_1 >= 12
     * $query->filterByOplosmiddelAantal1(array('max' => 12)); // WHERE oplosmiddel_aantal_1 <= 12
     * </code>
     *
     * @param     mixed $oplosmiddelAantal1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByOplosmiddelAantal1($oplosmiddelAantal1 = null, $comparison = null)
    {
        if (is_array($oplosmiddelAantal1)) {
            $useMinMax = false;
            if (isset($oplosmiddelAantal1['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1, $oplosmiddelAantal1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oplosmiddelAantal1['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1, $oplosmiddelAantal1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1, $oplosmiddelAantal1, $comparison);
    }

    /**
     * Filter the query on the oplosmiddel_hoeveelheid_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOplosmiddelHoeveelheid2(1234); // WHERE oplosmiddel_hoeveelheid_2 = 1234
     * $query->filterByOplosmiddelHoeveelheid2(array(12, 34)); // WHERE oplosmiddel_hoeveelheid_2 IN (12, 34)
     * $query->filterByOplosmiddelHoeveelheid2(array('min' => 12)); // WHERE oplosmiddel_hoeveelheid_2 >= 12
     * $query->filterByOplosmiddelHoeveelheid2(array('max' => 12)); // WHERE oplosmiddel_hoeveelheid_2 <= 12
     * </code>
     *
     * @param     mixed $oplosmiddelHoeveelheid2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByOplosmiddelHoeveelheid2($oplosmiddelHoeveelheid2 = null, $comparison = null)
    {
        if (is_array($oplosmiddelHoeveelheid2)) {
            $useMinMax = false;
            if (isset($oplosmiddelHoeveelheid2['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2, $oplosmiddelHoeveelheid2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oplosmiddelHoeveelheid2['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2, $oplosmiddelHoeveelheid2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2, $oplosmiddelHoeveelheid2, $comparison);
    }

    /**
     * Filter the query on the oplosmiddel_aantal_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOplosmiddelAantal2(1234); // WHERE oplosmiddel_aantal_2 = 1234
     * $query->filterByOplosmiddelAantal2(array(12, 34)); // WHERE oplosmiddel_aantal_2 IN (12, 34)
     * $query->filterByOplosmiddelAantal2(array('min' => 12)); // WHERE oplosmiddel_aantal_2 >= 12
     * $query->filterByOplosmiddelAantal2(array('max' => 12)); // WHERE oplosmiddel_aantal_2 <= 12
     * </code>
     *
     * @param     mixed $oplosmiddelAantal2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByOplosmiddelAantal2($oplosmiddelAantal2 = null, $comparison = null)
    {
        if (is_array($oplosmiddelAantal2)) {
            $useMinMax = false;
            if (isset($oplosmiddelAantal2['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2, $oplosmiddelAantal2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oplosmiddelAantal2['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2, $oplosmiddelAantal2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2, $oplosmiddelAantal2, $comparison);
    }

    /**
     * Filter the query on the farmaceutische_kwaliteit column
     *
     * Example usage:
     * <code>
     * $query->filterByFarmaceutischeKwaliteit('fooValue');   // WHERE farmaceutische_kwaliteit = 'fooValue'
     * $query->filterByFarmaceutischeKwaliteit('%fooValue%'); // WHERE farmaceutische_kwaliteit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $farmaceutischeKwaliteit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFarmaceutischeKwaliteit($farmaceutischeKwaliteit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($farmaceutischeKwaliteit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $farmaceutischeKwaliteit)) {
                $farmaceutischeKwaliteit = str_replace('*', '%', $farmaceutischeKwaliteit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT, $farmaceutischeKwaliteit, $comparison);
    }

    /**
     * Filter the query on the halffabrikaat_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByHalffabrikaatThesaurusnummer(1234); // WHERE halffabrikaat_thesaurusnummer = 1234
     * $query->filterByHalffabrikaatThesaurusnummer(array(12, 34)); // WHERE halffabrikaat_thesaurusnummer IN (12, 34)
     * $query->filterByHalffabrikaatThesaurusnummer(array('min' => 12)); // WHERE halffabrikaat_thesaurusnummer >= 12
     * $query->filterByHalffabrikaatThesaurusnummer(array('max' => 12)); // WHERE halffabrikaat_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $halffabrikaatThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHalffabrikaatThesaurusnummer($halffabrikaatThesaurusnummer = null, $comparison = null)
    {
        if (is_array($halffabrikaatThesaurusnummer)) {
            $useMinMax = false;
            if (isset($halffabrikaatThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER, $halffabrikaatThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($halffabrikaatThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER, $halffabrikaatThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER, $halffabrikaatThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the halffabrikaat_code column
     *
     * Example usage:
     * <code>
     * $query->filterByHalffabrikaatCode(1234); // WHERE halffabrikaat_code = 1234
     * $query->filterByHalffabrikaatCode(array(12, 34)); // WHERE halffabrikaat_code IN (12, 34)
     * $query->filterByHalffabrikaatCode(array('min' => 12)); // WHERE halffabrikaat_code >= 12
     * $query->filterByHalffabrikaatCode(array('max' => 12)); // WHERE halffabrikaat_code <= 12
     * </code>
     *
     * @param     mixed $halffabrikaatCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHalffabrikaatCode($halffabrikaatCode = null, $comparison = null)
    {
        if (is_array($halffabrikaatCode)) {
            $useMinMax = false;
            if (isset($halffabrikaatCode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HALFFABRIKAAT_CODE, $halffabrikaatCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($halffabrikaatCode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HALFFABRIKAAT_CODE, $halffabrikaatCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HALFFABRIKAAT_CODE, $halffabrikaatCode, $comparison);
    }

    /**
     * Filter the query on the deelbaarheid_aantal column
     *
     * Example usage:
     * <code>
     * $query->filterByDeelbaarheidAantal(1234); // WHERE deelbaarheid_aantal = 1234
     * $query->filterByDeelbaarheidAantal(array(12, 34)); // WHERE deelbaarheid_aantal IN (12, 34)
     * $query->filterByDeelbaarheidAantal(array('min' => 12)); // WHERE deelbaarheid_aantal >= 12
     * $query->filterByDeelbaarheidAantal(array('max' => 12)); // WHERE deelbaarheid_aantal <= 12
     * </code>
     *
     * @param     mixed $deelbaarheidAantal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByDeelbaarheidAantal($deelbaarheidAantal = null, $comparison = null)
    {
        if (is_array($deelbaarheidAantal)) {
            $useMinMax = false;
            if (isset($deelbaarheidAantal['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::DEELBAARHEID_AANTAL, $deelbaarheidAantal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deelbaarheidAantal['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::DEELBAARHEID_AANTAL, $deelbaarheidAantal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::DEELBAARHEID_AANTAL, $deelbaarheidAantal, $comparison);
    }

    /**
     * Filter the query on the emballagemateriaal_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagemateriaalThesaurusnummer(1234); // WHERE emballagemateriaal_thesaurusnummer = 1234
     * $query->filterByEmballagemateriaalThesaurusnummer(array(12, 34)); // WHERE emballagemateriaal_thesaurusnummer IN (12, 34)
     * $query->filterByEmballagemateriaalThesaurusnummer(array('min' => 12)); // WHERE emballagemateriaal_thesaurusnummer >= 12
     * $query->filterByEmballagemateriaalThesaurusnummer(array('max' => 12)); // WHERE emballagemateriaal_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByEmballageMateriaalOmschrijving()
     *
     * @param     mixed $emballagemateriaalThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEmballagemateriaalThesaurusnummer($emballagemateriaalThesaurusnummer = null, $comparison = null)
    {
        if (is_array($emballagemateriaalThesaurusnummer)) {
            $useMinMax = false;
            if (isset($emballagemateriaalThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, $emballagemateriaalThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagemateriaalThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, $emballagemateriaalThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, $emballagemateriaalThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the emballagemateriaal_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagemateriaalKode(1234); // WHERE emballagemateriaal_kode = 1234
     * $query->filterByEmballagemateriaalKode(array(12, 34)); // WHERE emballagemateriaal_kode IN (12, 34)
     * $query->filterByEmballagemateriaalKode(array('min' => 12)); // WHERE emballagemateriaal_kode >= 12
     * $query->filterByEmballagemateriaalKode(array('max' => 12)); // WHERE emballagemateriaal_kode <= 12
     * </code>
     *
     * @see       filterByEmballageMateriaalOmschrijving()
     *
     * @param     mixed $emballagemateriaalKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEmballagemateriaalKode($emballagemateriaalKode = null, $comparison = null)
    {
        if (is_array($emballagemateriaalKode)) {
            $useMinMax = false;
            if (isset($emballagemateriaalKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, $emballagemateriaalKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagemateriaalKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, $emballagemateriaalKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, $emballagemateriaalKode, $comparison);
    }

    /**
     * Filter the query on the emballagesluiting_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagesluitingThesaurusnummer(1234); // WHERE emballagesluiting_thesaurusnummer = 1234
     * $query->filterByEmballagesluitingThesaurusnummer(array(12, 34)); // WHERE emballagesluiting_thesaurusnummer IN (12, 34)
     * $query->filterByEmballagesluitingThesaurusnummer(array('min' => 12)); // WHERE emballagesluiting_thesaurusnummer >= 12
     * $query->filterByEmballagesluitingThesaurusnummer(array('max' => 12)); // WHERE emballagesluiting_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByEmballageSluitingOmschrijving()
     *
     * @param     mixed $emballagesluitingThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEmballagesluitingThesaurusnummer($emballagesluitingThesaurusnummer = null, $comparison = null)
    {
        if (is_array($emballagesluitingThesaurusnummer)) {
            $useMinMax = false;
            if (isset($emballagesluitingThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, $emballagesluitingThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagesluitingThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, $emballagesluitingThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, $emballagesluitingThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the emballagesluiting_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagesluitingKode(1234); // WHERE emballagesluiting_kode = 1234
     * $query->filterByEmballagesluitingKode(array(12, 34)); // WHERE emballagesluiting_kode IN (12, 34)
     * $query->filterByEmballagesluitingKode(array('min' => 12)); // WHERE emballagesluiting_kode >= 12
     * $query->filterByEmballagesluitingKode(array('max' => 12)); // WHERE emballagesluiting_kode <= 12
     * </code>
     *
     * @see       filterByEmballageSluitingOmschrijving()
     *
     * @param     mixed $emballagesluitingKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEmballagesluitingKode($emballagesluitingKode = null, $comparison = null)
    {
        if (is_array($emballagesluitingKode)) {
            $useMinMax = false;
            if (isset($emballagesluitingKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, $emballagesluitingKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagesluitingKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, $emballagesluitingKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, $emballagesluitingKode, $comparison);
    }

    /**
     * Filter the query on the emballagedoseerinr_thesaurusnr column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagedoseerinrThesaurusnr(1234); // WHERE emballagedoseerinr_thesaurusnr = 1234
     * $query->filterByEmballagedoseerinrThesaurusnr(array(12, 34)); // WHERE emballagedoseerinr_thesaurusnr IN (12, 34)
     * $query->filterByEmballagedoseerinrThesaurusnr(array('min' => 12)); // WHERE emballagedoseerinr_thesaurusnr >= 12
     * $query->filterByEmballagedoseerinrThesaurusnr(array('max' => 12)); // WHERE emballagedoseerinr_thesaurusnr <= 12
     * </code>
     *
     * @see       filterByEmballageDoseerinrichtingOmschrijving()
     *
     * @param     mixed $emballagedoseerinrThesaurusnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEmballagedoseerinrThesaurusnr($emballagedoseerinrThesaurusnr = null, $comparison = null)
    {
        if (is_array($emballagedoseerinrThesaurusnr)) {
            $useMinMax = false;
            if (isset($emballagedoseerinrThesaurusnr['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, $emballagedoseerinrThesaurusnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagedoseerinrThesaurusnr['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, $emballagedoseerinrThesaurusnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, $emballagedoseerinrThesaurusnr, $comparison);
    }

    /**
     * Filter the query on the emballagedoseerinrichting_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagedoseerinrichtingKode(1234); // WHERE emballagedoseerinrichting_kode = 1234
     * $query->filterByEmballagedoseerinrichtingKode(array(12, 34)); // WHERE emballagedoseerinrichting_kode IN (12, 34)
     * $query->filterByEmballagedoseerinrichtingKode(array('min' => 12)); // WHERE emballagedoseerinrichting_kode >= 12
     * $query->filterByEmballagedoseerinrichtingKode(array('max' => 12)); // WHERE emballagedoseerinrichting_kode <= 12
     * </code>
     *
     * @see       filterByEmballageDoseerinrichtingOmschrijving()
     *
     * @param     mixed $emballagedoseerinrichtingKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEmballagedoseerinrichtingKode($emballagedoseerinrichtingKode = null, $comparison = null)
    {
        if (is_array($emballagedoseerinrichtingKode)) {
            $useMinMax = false;
            if (isset($emballagedoseerinrichtingKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, $emballagedoseerinrichtingKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagedoseerinrichtingKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, $emballagedoseerinrichtingKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, $emballagedoseerinrichtingKode, $comparison);
    }

    /**
     * Filter the query on the hulpstoffen_identificerend column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpstoffenIdentificerend('fooValue');   // WHERE hulpstoffen_identificerend = 'fooValue'
     * $query->filterByHulpstoffenIdentificerend('%fooValue%'); // WHERE hulpstoffen_identificerend LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hulpstoffenIdentificerend The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHulpstoffenIdentificerend($hulpstoffenIdentificerend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hulpstoffenIdentificerend)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hulpstoffenIdentificerend)) {
                $hulpstoffenIdentificerend = str_replace('*', '%', $hulpstoffenIdentificerend);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND, $hulpstoffenIdentificerend, $comparison);
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
     * @see       filterByKleurOmschrijving()
     *
     * @param     mixed $kleurThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKleurThesaurusnummer($kleurThesaurusnummer = null, $comparison = null)
    {
        if (is_array($kleurThesaurusnummer)) {
            $useMinMax = false;
            if (isset($kleurThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, $kleurThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kleurThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, $kleurThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, $kleurThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the kleur_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByKleurKode(1234); // WHERE kleur_kode = 1234
     * $query->filterByKleurKode(array(12, 34)); // WHERE kleur_kode IN (12, 34)
     * $query->filterByKleurKode(array('min' => 12)); // WHERE kleur_kode >= 12
     * $query->filterByKleurKode(array('max' => 12)); // WHERE kleur_kode <= 12
     * </code>
     *
     * @see       filterByKleurOmschrijving()
     *
     * @param     mixed $kleurKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKleurKode($kleurKode = null, $comparison = null)
    {
        if (is_array($kleurKode)) {
            $useMinMax = false;
            if (isset($kleurKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::KLEUR_KODE, $kleurKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kleurKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::KLEUR_KODE, $kleurKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KLEUR_KODE, $kleurKode, $comparison);
    }

    /**
     * Filter the query on the smaak_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterBySmaakThesaurusnummer(1234); // WHERE smaak_thesaurusnummer = 1234
     * $query->filterBySmaakThesaurusnummer(array(12, 34)); // WHERE smaak_thesaurusnummer IN (12, 34)
     * $query->filterBySmaakThesaurusnummer(array('min' => 12)); // WHERE smaak_thesaurusnummer >= 12
     * $query->filterBySmaakThesaurusnummer(array('max' => 12)); // WHERE smaak_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterBySmaakOmschrijving()
     *
     * @param     mixed $smaakThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterBySmaakThesaurusnummer($smaakThesaurusnummer = null, $comparison = null)
    {
        if (is_array($smaakThesaurusnummer)) {
            $useMinMax = false;
            if (isset($smaakThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, $smaakThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smaakThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, $smaakThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, $smaakThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the smaak_kode column
     *
     * Example usage:
     * <code>
     * $query->filterBySmaakKode(1234); // WHERE smaak_kode = 1234
     * $query->filterBySmaakKode(array(12, 34)); // WHERE smaak_kode IN (12, 34)
     * $query->filterBySmaakKode(array('min' => 12)); // WHERE smaak_kode >= 12
     * $query->filterBySmaakKode(array('max' => 12)); // WHERE smaak_kode <= 12
     * </code>
     *
     * @see       filterBySmaakOmschrijving()
     *
     * @param     mixed $smaakKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterBySmaakKode($smaakKode = null, $comparison = null)
    {
        if (is_array($smaakKode)) {
            $useMinMax = false;
            if (isset($smaakKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SMAAK_KODE, $smaakKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smaakKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SMAAK_KODE, $smaakKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::SMAAK_KODE, $smaakKode, $comparison);
    }

    /**
     * Filter the query on the bereidingsvoorschr_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByBereidingsvoorschrThesaurusnummer(1234); // WHERE bereidingsvoorschr_thesaurusnummer = 1234
     * $query->filterByBereidingsvoorschrThesaurusnummer(array(12, 34)); // WHERE bereidingsvoorschr_thesaurusnummer IN (12, 34)
     * $query->filterByBereidingsvoorschrThesaurusnummer(array('min' => 12)); // WHERE bereidingsvoorschr_thesaurusnummer >= 12
     * $query->filterByBereidingsvoorschrThesaurusnummer(array('max' => 12)); // WHERE bereidingsvoorschr_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByBereidingsvoorschrijftOmschrijving()
     *
     * @param     mixed $bereidingsvoorschrThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBereidingsvoorschrThesaurusnummer($bereidingsvoorschrThesaurusnummer = null, $comparison = null)
    {
        if (is_array($bereidingsvoorschrThesaurusnummer)) {
            $useMinMax = false;
            if (isset($bereidingsvoorschrThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, $bereidingsvoorschrThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bereidingsvoorschrThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, $bereidingsvoorschrThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, $bereidingsvoorschrThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the bereidingsvoorschrift_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByBereidingsvoorschriftKode(1234); // WHERE bereidingsvoorschrift_kode = 1234
     * $query->filterByBereidingsvoorschriftKode(array(12, 34)); // WHERE bereidingsvoorschrift_kode IN (12, 34)
     * $query->filterByBereidingsvoorschriftKode(array('min' => 12)); // WHERE bereidingsvoorschrift_kode >= 12
     * $query->filterByBereidingsvoorschriftKode(array('max' => 12)); // WHERE bereidingsvoorschrift_kode <= 12
     * </code>
     *
     * @see       filterByBereidingsvoorschrijftOmschrijving()
     *
     * @param     mixed $bereidingsvoorschriftKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBereidingsvoorschriftKode($bereidingsvoorschriftKode = null, $comparison = null)
    {
        if (is_array($bereidingsvoorschriftKode)) {
            $useMinMax = false;
            if (isset($bereidingsvoorschriftKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, $bereidingsvoorschriftKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bereidingsvoorschriftKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, $bereidingsvoorschriftKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, $bereidingsvoorschriftKode, $comparison);
    }

    /**
     * Filter the query on the fysische_eigenschap_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByFysischeEigenschapThesaurusnummer(1234); // WHERE fysische_eigenschap_thesaurusnummer = 1234
     * $query->filterByFysischeEigenschapThesaurusnummer(array(12, 34)); // WHERE fysische_eigenschap_thesaurusnummer IN (12, 34)
     * $query->filterByFysischeEigenschapThesaurusnummer(array('min' => 12)); // WHERE fysische_eigenschap_thesaurusnummer >= 12
     * $query->filterByFysischeEigenschapThesaurusnummer(array('max' => 12)); // WHERE fysische_eigenschap_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $fysischeEigenschapThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFysischeEigenschapThesaurusnummer($fysischeEigenschapThesaurusnummer = null, $comparison = null)
    {
        if (is_array($fysischeEigenschapThesaurusnummer)) {
            $useMinMax = false;
            if (isset($fysischeEigenschapThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER, $fysischeEigenschapThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fysischeEigenschapThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER, $fysischeEigenschapThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER, $fysischeEigenschapThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the fysische_eigenschap_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByFysischeEigenschapKode(1234); // WHERE fysische_eigenschap_kode = 1234
     * $query->filterByFysischeEigenschapKode(array(12, 34)); // WHERE fysische_eigenschap_kode IN (12, 34)
     * $query->filterByFysischeEigenschapKode(array('min' => 12)); // WHERE fysische_eigenschap_kode >= 12
     * $query->filterByFysischeEigenschapKode(array('max' => 12)); // WHERE fysische_eigenschap_kode <= 12
     * </code>
     *
     * @param     mixed $fysischeEigenschapKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByFysischeEigenschapKode($fysischeEigenschapKode = null, $comparison = null)
    {
        if (is_array($fysischeEigenschapKode)) {
            $useMinMax = false;
            if (isset($fysischeEigenschapKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE, $fysischeEigenschapKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fysischeEigenschapKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE, $fysischeEigenschapKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE, $fysischeEigenschapKode, $comparison);
    }

    /**
     * Filter the query on the grondstofvorm_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByGrondstofvormThesaurusnummer(1234); // WHERE grondstofvorm_thesaurusnummer = 1234
     * $query->filterByGrondstofvormThesaurusnummer(array(12, 34)); // WHERE grondstofvorm_thesaurusnummer IN (12, 34)
     * $query->filterByGrondstofvormThesaurusnummer(array('min' => 12)); // WHERE grondstofvorm_thesaurusnummer >= 12
     * $query->filterByGrondstofvormThesaurusnummer(array('max' => 12)); // WHERE grondstofvorm_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $grondstofvormThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByGrondstofvormThesaurusnummer($grondstofvormThesaurusnummer = null, $comparison = null)
    {
        if (is_array($grondstofvormThesaurusnummer)) {
            $useMinMax = false;
            if (isset($grondstofvormThesaurusnummer['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER, $grondstofvormThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grondstofvormThesaurusnummer['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER, $grondstofvormThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER, $grondstofvormThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the grondstofvorm_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByGrondstofvormKode(1234); // WHERE grondstofvorm_kode = 1234
     * $query->filterByGrondstofvormKode(array(12, 34)); // WHERE grondstofvorm_kode IN (12, 34)
     * $query->filterByGrondstofvormKode(array('min' => 12)); // WHERE grondstofvorm_kode >= 12
     * $query->filterByGrondstofvormKode(array('max' => 12)); // WHERE grondstofvorm_kode <= 12
     * </code>
     *
     * @param     mixed $grondstofvormKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByGrondstofvormKode($grondstofvormKode = null, $comparison = null)
    {
        if (is_array($grondstofvormKode)) {
            $useMinMax = false;
            if (isset($grondstofvormKode['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::GRONDSTOFVORM_KODE, $grondstofvormKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grondstofvormKode['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::GRONDSTOFVORM_KODE, $grondstofvormKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::GRONDSTOFVORM_KODE, $grondstofvormKode, $comparison);
    }

    /**
     * Filter the query on the los_verkrijgbaar column
     *
     * Example usage:
     * <code>
     * $query->filterByLosVerkrijgbaar('fooValue');   // WHERE los_verkrijgbaar = 'fooValue'
     * $query->filterByLosVerkrijgbaar('%fooValue%'); // WHERE los_verkrijgbaar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $losVerkrijgbaar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByLosVerkrijgbaar($losVerkrijgbaar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($losVerkrijgbaar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $losVerkrijgbaar)) {
                $losVerkrijgbaar = str_replace('*', '%', $losVerkrijgbaar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::LOS_VERKRIJGBAAR, $losVerkrijgbaar, $comparison);
    }

    /**
     * Filter the query on the bioequivalente_groep column
     *
     * Example usage:
     * <code>
     * $query->filterByBioequivalenteGroep(1234); // WHERE bioequivalente_groep = 1234
     * $query->filterByBioequivalenteGroep(array(12, 34)); // WHERE bioequivalente_groep IN (12, 34)
     * $query->filterByBioequivalenteGroep(array('min' => 12)); // WHERE bioequivalente_groep >= 12
     * $query->filterByBioequivalenteGroep(array('max' => 12)); // WHERE bioequivalente_groep <= 12
     * </code>
     *
     * @param     mixed $bioequivalenteGroep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBioequivalenteGroep($bioequivalenteGroep = null, $comparison = null)
    {
        if (is_array($bioequivalenteGroep)) {
            $useMinMax = false;
            if (isset($bioequivalenteGroep['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP, $bioequivalenteGroep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bioequivalenteGroep['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP, $bioequivalenteGroep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP, $bioequivalenteGroep, $comparison);
    }

    /**
     * Filter the query on the kode_radioactieve_stof column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeRadioactieveStof('fooValue');   // WHERE kode_radioactieve_stof = 'fooValue'
     * $query->filterByKodeRadioactieveStof('%fooValue%'); // WHERE kode_radioactieve_stof LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeRadioactieveStof The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByKodeRadioactieveStof($kodeRadioactieveStof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeRadioactieveStof)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeRadioactieveStof)) {
                $kodeRadioactieveStof = str_replace('*', '%', $kodeRadioactieveStof);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF, $kodeRadioactieveStof, $comparison);
    }

    /**
     * Filter the query on the soort_hulpmiddel column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortHulpmiddel(1234); // WHERE soort_hulpmiddel = 1234
     * $query->filterBySoortHulpmiddel(array(12, 34)); // WHERE soort_hulpmiddel IN (12, 34)
     * $query->filterBySoortHulpmiddel(array('min' => 12)); // WHERE soort_hulpmiddel >= 12
     * $query->filterBySoortHulpmiddel(array('max' => 12)); // WHERE soort_hulpmiddel <= 12
     * </code>
     *
     * @param     mixed $soortHulpmiddel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterBySoortHulpmiddel($soortHulpmiddel = null, $comparison = null)
    {
        if (is_array($soortHulpmiddel)) {
            $useMinMax = false;
            if (isset($soortHulpmiddel['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SOORT_HULPMIDDEL, $soortHulpmiddel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortHulpmiddel['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::SOORT_HULPMIDDEL, $soortHulpmiddel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::SOORT_HULPMIDDEL, $soortHulpmiddel, $comparison);
    }

    /**
     * Filter the query on the rzv_thesaurus_120 column
     *
     * Example usage:
     * <code>
     * $query->filterByRzvThesaurus120(1234); // WHERE rzv_thesaurus_120 = 1234
     * $query->filterByRzvThesaurus120(array(12, 34)); // WHERE rzv_thesaurus_120 IN (12, 34)
     * $query->filterByRzvThesaurus120(array('min' => 12)); // WHERE rzv_thesaurus_120 >= 12
     * $query->filterByRzvThesaurus120(array('max' => 12)); // WHERE rzv_thesaurus_120 <= 12
     * </code>
     *
     * @see       filterByRzvBijlage2Omschrijving()
     *
     * @param     mixed $rzvThesaurus120 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRzvThesaurus120($rzvThesaurus120 = null, $comparison = null)
    {
        if (is_array($rzvThesaurus120)) {
            $useMinMax = false;
            if (isset($rzvThesaurus120['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RZV_THESAURUS_120, $rzvThesaurus120['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rzvThesaurus120['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RZV_THESAURUS_120, $rzvThesaurus120['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::RZV_THESAURUS_120, $rzvThesaurus120, $comparison);
    }

    /**
     * Filter the query on the rzvvoorwaarden_bijlage_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRzvvoorwaardenBijlage2(1234); // WHERE rzvvoorwaarden_bijlage_2 = 1234
     * $query->filterByRzvvoorwaardenBijlage2(array(12, 34)); // WHERE rzvvoorwaarden_bijlage_2 IN (12, 34)
     * $query->filterByRzvvoorwaardenBijlage2(array('min' => 12)); // WHERE rzvvoorwaarden_bijlage_2 >= 12
     * $query->filterByRzvvoorwaardenBijlage2(array('max' => 12)); // WHERE rzvvoorwaarden_bijlage_2 <= 12
     * </code>
     *
     * @see       filterByRzvBijlage2Omschrijving()
     *
     * @param     mixed $rzvvoorwaardenBijlage2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRzvvoorwaardenBijlage2($rzvvoorwaardenBijlage2 = null, $comparison = null)
    {
        if (is_array($rzvvoorwaardenBijlage2)) {
            $useMinMax = false;
            if (isset($rzvvoorwaardenBijlage2['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, $rzvvoorwaardenBijlage2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rzvvoorwaardenBijlage2['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, $rzvvoorwaardenBijlage2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, $rzvvoorwaardenBijlage2, $comparison);
    }

    /**
     * Filter the query on the tekstmodule column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmodule(1234); // WHERE tekstmodule = 1234
     * $query->filterByTekstmodule(array(12, 34)); // WHERE tekstmodule IN (12, 34)
     * $query->filterByTekstmodule(array('min' => 12)); // WHERE tekstmodule >= 12
     * $query->filterByTekstmodule(array('max' => 12)); // WHERE tekstmodule <= 12
     * </code>
     *
     * @param     mixed $tekstmodule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the tekst_verwijzing column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstVerwijzing(1234); // WHERE tekst_verwijzing = 1234
     * $query->filterByTekstVerwijzing(array(12, 34)); // WHERE tekst_verwijzing IN (12, 34)
     * $query->filterByTekstVerwijzing(array('min' => 12)); // WHERE tekst_verwijzing >= 12
     * $query->filterByTekstVerwijzing(array('max' => 12)); // WHERE tekst_verwijzing <= 12
     * </code>
     *
     * @param     mixed $tekstVerwijzing The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByTekstVerwijzing($tekstVerwijzing = null, $comparison = null)
    {
        if (is_array($tekstVerwijzing)) {
            $useMinMax = false;
            if (isset($tekstVerwijzing['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::TEKST_VERWIJZING, $tekstVerwijzing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstVerwijzing['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::TEKST_VERWIJZING, $tekstVerwijzing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::TEKST_VERWIJZING, $tekstVerwijzing, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_volgens_awbz column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelVolgensAwbz('fooValue');   // WHERE hulpmiddel_volgens_awbz = 'fooValue'
     * $query->filterByHulpmiddelVolgensAwbz('%fooValue%'); // WHERE hulpmiddel_volgens_awbz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hulpmiddelVolgensAwbz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelVolgensAwbz($hulpmiddelVolgensAwbz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hulpmiddelVolgensAwbz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hulpmiddelVolgensAwbz)) {
                $hulpmiddelVolgensAwbz = str_replace('*', '%', $hulpmiddelVolgensAwbz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ, $hulpmiddelVolgensAwbz, $comparison);
    }

    /**
     * Filter the query on the eenheid_inkoophoeveelheid_thesnr column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheidInkoophoeveelheidThesnr(1234); // WHERE eenheid_inkoophoeveelheid_thesnr = 1234
     * $query->filterByEenheidInkoophoeveelheidThesnr(array(12, 34)); // WHERE eenheid_inkoophoeveelheid_thesnr IN (12, 34)
     * $query->filterByEenheidInkoophoeveelheidThesnr(array('min' => 12)); // WHERE eenheid_inkoophoeveelheid_thesnr >= 12
     * $query->filterByEenheidInkoophoeveelheidThesnr(array('max' => 12)); // WHERE eenheid_inkoophoeveelheid_thesnr <= 12
     * </code>
     *
     * @see       filterByInkoophoeveelheidOmschrijving()
     *
     * @param     mixed $eenheidInkoophoeveelheidThesnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEenheidInkoophoeveelheidThesnr($eenheidInkoophoeveelheidThesnr = null, $comparison = null)
    {
        if (is_array($eenheidInkoophoeveelheidThesnr)) {
            $useMinMax = false;
            if (isset($eenheidInkoophoeveelheidThesnr['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, $eenheidInkoophoeveelheidThesnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheidInkoophoeveelheidThesnr['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, $eenheidInkoophoeveelheidThesnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, $eenheidInkoophoeveelheidThesnr, $comparison);
    }

    /**
     * Filter the query on the eenheid_inkoophoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheidInkoophoeveelheid(1234); // WHERE eenheid_inkoophoeveelheid = 1234
     * $query->filterByEenheidInkoophoeveelheid(array(12, 34)); // WHERE eenheid_inkoophoeveelheid IN (12, 34)
     * $query->filterByEenheidInkoophoeveelheid(array('min' => 12)); // WHERE eenheid_inkoophoeveelheid >= 12
     * $query->filterByEenheidInkoophoeveelheid(array('max' => 12)); // WHERE eenheid_inkoophoeveelheid <= 12
     * </code>
     *
     * @see       filterByInkoophoeveelheidOmschrijving()
     *
     * @param     mixed $eenheidInkoophoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByEenheidInkoophoeveelheid($eenheidInkoophoeveelheid = null, $comparison = null)
    {
        if (is_array($eenheidInkoophoeveelheid)) {
            $useMinMax = false;
            if (isset($eenheidInkoophoeveelheid['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, $eenheidInkoophoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheidInkoophoeveelheid['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, $eenheidInkoophoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, $eenheidInkoophoeveelheid, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_verpakking_thesnr column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidVerpakkingThesnr(1234); // WHERE basiseenheid_verpakking_thesnr = 1234
     * $query->filterByBasiseenheidVerpakkingThesnr(array(12, 34)); // WHERE basiseenheid_verpakking_thesnr IN (12, 34)
     * $query->filterByBasiseenheidVerpakkingThesnr(array('min' => 12)); // WHERE basiseenheid_verpakking_thesnr >= 12
     * $query->filterByBasiseenheidVerpakkingThesnr(array('max' => 12)); // WHERE basiseenheid_verpakking_thesnr <= 12
     * </code>
     *
     * @see       filterByBasiseenheidOmschrijving()
     *
     * @param     mixed $basiseenheidVerpakkingThesnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidVerpakkingThesnr($basiseenheidVerpakkingThesnr = null, $comparison = null)
    {
        if (is_array($basiseenheidVerpakkingThesnr)) {
            $useMinMax = false;
            if (isset($basiseenheidVerpakkingThesnr['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, $basiseenheidVerpakkingThesnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidVerpakkingThesnr['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, $basiseenheidVerpakkingThesnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, $basiseenheidVerpakkingThesnr, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidVerpakking(1234); // WHERE basiseenheid_verpakking = 1234
     * $query->filterByBasiseenheidVerpakking(array(12, 34)); // WHERE basiseenheid_verpakking IN (12, 34)
     * $query->filterByBasiseenheidVerpakking(array('min' => 12)); // WHERE basiseenheid_verpakking >= 12
     * $query->filterByBasiseenheidVerpakking(array('max' => 12)); // WHERE basiseenheid_verpakking <= 12
     * </code>
     *
     * @see       filterByBasiseenheidOmschrijving()
     *
     * @param     mixed $basiseenheidVerpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidVerpakking($basiseenheidVerpakking = null, $comparison = null)
    {
        if (is_array($basiseenheidVerpakking)) {
            $useMinMax = false;
            if (isset($basiseenheidVerpakking['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, $basiseenheidVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidVerpakking['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, $basiseenheidVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, $basiseenheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the richtlijn_gebruik_ondergrens column
     *
     * Example usage:
     * <code>
     * $query->filterByRichtlijnGebruikOndergrens(1234); // WHERE richtlijn_gebruik_ondergrens = 1234
     * $query->filterByRichtlijnGebruikOndergrens(array(12, 34)); // WHERE richtlijn_gebruik_ondergrens IN (12, 34)
     * $query->filterByRichtlijnGebruikOndergrens(array('min' => 12)); // WHERE richtlijn_gebruik_ondergrens >= 12
     * $query->filterByRichtlijnGebruikOndergrens(array('max' => 12)); // WHERE richtlijn_gebruik_ondergrens <= 12
     * </code>
     *
     * @param     mixed $richtlijnGebruikOndergrens The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRichtlijnGebruikOndergrens($richtlijnGebruikOndergrens = null, $comparison = null)
    {
        if (is_array($richtlijnGebruikOndergrens)) {
            $useMinMax = false;
            if (isset($richtlijnGebruikOndergrens['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS, $richtlijnGebruikOndergrens['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($richtlijnGebruikOndergrens['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS, $richtlijnGebruikOndergrens['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS, $richtlijnGebruikOndergrens, $comparison);
    }

    /**
     * Filter the query on the richtlijn_gebruik_bovengrens column
     *
     * Example usage:
     * <code>
     * $query->filterByRichtlijnGebruikBovengrens(1234); // WHERE richtlijn_gebruik_bovengrens = 1234
     * $query->filterByRichtlijnGebruikBovengrens(array(12, 34)); // WHERE richtlijn_gebruik_bovengrens IN (12, 34)
     * $query->filterByRichtlijnGebruikBovengrens(array('min' => 12)); // WHERE richtlijn_gebruik_bovengrens >= 12
     * $query->filterByRichtlijnGebruikBovengrens(array('max' => 12)); // WHERE richtlijn_gebruik_bovengrens <= 12
     * </code>
     *
     * @param     mixed $richtlijnGebruikBovengrens The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRichtlijnGebruikBovengrens($richtlijnGebruikBovengrens = null, $comparison = null)
    {
        if (is_array($richtlijnGebruikBovengrens)) {
            $useMinMax = false;
            if (isset($richtlijnGebruikBovengrens['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS, $richtlijnGebruikBovengrens['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($richtlijnGebruikBovengrens['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS, $richtlijnGebruikBovengrens['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS, $richtlijnGebruikBovengrens, $comparison);
    }

    /**
     * Filter the query on the thesaurus_rzv_verstrekking column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRzvVerstrekking(1234); // WHERE thesaurus_rzv_verstrekking = 1234
     * $query->filterByThesaurusRzvVerstrekking(array(12, 34)); // WHERE thesaurus_rzv_verstrekking IN (12, 34)
     * $query->filterByThesaurusRzvVerstrekking(array('min' => 12)); // WHERE thesaurus_rzv_verstrekking >= 12
     * $query->filterByThesaurusRzvVerstrekking(array('max' => 12)); // WHERE thesaurus_rzv_verstrekking <= 12
     * </code>
     *
     * @see       filterByRzvVerstrekkingOmschrijving()
     *
     * @param     mixed $thesaurusRzvVerstrekking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByThesaurusRzvVerstrekking($thesaurusRzvVerstrekking = null, $comparison = null)
    {
        if (is_array($thesaurusRzvVerstrekking)) {
            $useMinMax = false;
            if (isset($thesaurusRzvVerstrekking['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, $thesaurusRzvVerstrekking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRzvVerstrekking['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, $thesaurusRzvVerstrekking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, $thesaurusRzvVerstrekking, $comparison);
    }

    /**
     * Filter the query on the rzvverstrekking column
     *
     * Example usage:
     * <code>
     * $query->filterByRzvverstrekking(1234); // WHERE rzvverstrekking = 1234
     * $query->filterByRzvverstrekking(array(12, 34)); // WHERE rzvverstrekking IN (12, 34)
     * $query->filterByRzvverstrekking(array('min' => 12)); // WHERE rzvverstrekking >= 12
     * $query->filterByRzvverstrekking(array('max' => 12)); // WHERE rzvverstrekking <= 12
     * </code>
     *
     * @see       filterByRzvVerstrekkingOmschrijving()
     *
     * @param     mixed $rzvverstrekking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByRzvverstrekking($rzvverstrekking = null, $comparison = null)
    {
        if (is_array($rzvverstrekking)) {
            $useMinMax = false;
            if (isset($rzvverstrekking['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RZVVERSTREKKING, $rzvverstrekking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rzvverstrekking['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::RZVVERSTREKKING, $rzvverstrekking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::RZVVERSTREKKING, $rzvverstrekking, $comparison);
    }

    /**
     * Filter the query on the thesaurus_rzv_rationaliteit column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRzvRationaliteit(1234); // WHERE thesaurus_rzv_rationaliteit = 1234
     * $query->filterByThesaurusRzvRationaliteit(array(12, 34)); // WHERE thesaurus_rzv_rationaliteit IN (12, 34)
     * $query->filterByThesaurusRzvRationaliteit(array('min' => 12)); // WHERE thesaurus_rzv_rationaliteit >= 12
     * $query->filterByThesaurusRzvRationaliteit(array('max' => 12)); // WHERE thesaurus_rzv_rationaliteit <= 12
     * </code>
     *
     * @param     mixed $thesaurusRzvRationaliteit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByThesaurusRzvRationaliteit($thesaurusRzvRationaliteit = null, $comparison = null)
    {
        if (is_array($thesaurusRzvRationaliteit)) {
            $useMinMax = false;
            if (isset($thesaurusRzvRationaliteit['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT, $thesaurusRzvRationaliteit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRzvRationaliteit['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT, $thesaurusRzvRationaliteit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT, $thesaurusRzvRationaliteit, $comparison);
    }

    /**
     * Filter the query on the beoordeling_rationaliteit column
     *
     * Example usage:
     * <code>
     * $query->filterByBeoordelingRationaliteit(1234); // WHERE beoordeling_rationaliteit = 1234
     * $query->filterByBeoordelingRationaliteit(array(12, 34)); // WHERE beoordeling_rationaliteit IN (12, 34)
     * $query->filterByBeoordelingRationaliteit(array('min' => 12)); // WHERE beoordeling_rationaliteit >= 12
     * $query->filterByBeoordelingRationaliteit(array('max' => 12)); // WHERE beoordeling_rationaliteit <= 12
     * </code>
     *
     * @param     mixed $beoordelingRationaliteit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByBeoordelingRationaliteit($beoordelingRationaliteit = null, $comparison = null)
    {
        if (is_array($beoordelingRationaliteit)) {
            $useMinMax = false;
            if (isset($beoordelingRationaliteit['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT, $beoordelingRationaliteit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($beoordelingRationaliteit['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT, $beoordelingRationaliteit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT, $beoordelingRationaliteit, $comparison);
    }

    /**
     * Filter the query on the thesaurus_rzv_beoordeling column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRzvBeoordeling(1234); // WHERE thesaurus_rzv_beoordeling = 1234
     * $query->filterByThesaurusRzvBeoordeling(array(12, 34)); // WHERE thesaurus_rzv_beoordeling IN (12, 34)
     * $query->filterByThesaurusRzvBeoordeling(array('min' => 12)); // WHERE thesaurus_rzv_beoordeling >= 12
     * $query->filterByThesaurusRzvBeoordeling(array('max' => 12)); // WHERE thesaurus_rzv_beoordeling <= 12
     * </code>
     *
     * @param     mixed $thesaurusRzvBeoordeling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByThesaurusRzvBeoordeling($thesaurusRzvBeoordeling = null, $comparison = null)
    {
        if (is_array($thesaurusRzvBeoordeling)) {
            $useMinMax = false;
            if (isset($thesaurusRzvBeoordeling['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING, $thesaurusRzvBeoordeling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRzvBeoordeling['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING, $thesaurusRzvBeoordeling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING, $thesaurusRzvBeoordeling, $comparison);
    }

    /**
     * Filter the query on the achtergrond_rationaliteit column
     *
     * Example usage:
     * <code>
     * $query->filterByAchtergrondRationaliteit(1234); // WHERE achtergrond_rationaliteit = 1234
     * $query->filterByAchtergrondRationaliteit(array(12, 34)); // WHERE achtergrond_rationaliteit IN (12, 34)
     * $query->filterByAchtergrondRationaliteit(array('min' => 12)); // WHERE achtergrond_rationaliteit >= 12
     * $query->filterByAchtergrondRationaliteit(array('max' => 12)); // WHERE achtergrond_rationaliteit <= 12
     * </code>
     *
     * @param     mixed $achtergrondRationaliteit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByAchtergrondRationaliteit($achtergrondRationaliteit = null, $comparison = null)
    {
        if (is_array($achtergrondRationaliteit)) {
            $useMinMax = false;
            if (isset($achtergrondRationaliteit['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT, $achtergrondRationaliteit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($achtergrondRationaliteit['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT, $achtergrondRationaliteit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT, $achtergrondRationaliteit, $comparison);
    }

    /**
     * Filter the query on the thesaurus_rzv_hulpmiddelen column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRzvHulpmiddelen(1234); // WHERE thesaurus_rzv_hulpmiddelen = 1234
     * $query->filterByThesaurusRzvHulpmiddelen(array(12, 34)); // WHERE thesaurus_rzv_hulpmiddelen IN (12, 34)
     * $query->filterByThesaurusRzvHulpmiddelen(array('min' => 12)); // WHERE thesaurus_rzv_hulpmiddelen >= 12
     * $query->filterByThesaurusRzvHulpmiddelen(array('max' => 12)); // WHERE thesaurus_rzv_hulpmiddelen <= 12
     * </code>
     *
     * @param     mixed $thesaurusRzvHulpmiddelen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByThesaurusRzvHulpmiddelen($thesaurusRzvHulpmiddelen = null, $comparison = null)
    {
        if (is_array($thesaurusRzvHulpmiddelen)) {
            $useMinMax = false;
            if (isset($thesaurusRzvHulpmiddelen['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN, $thesaurusRzvHulpmiddelen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRzvHulpmiddelen['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN, $thesaurusRzvHulpmiddelen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN, $thesaurusRzvHulpmiddelen, $comparison);
    }

    /**
     * Filter the query on the hulpmiddelen_zorg column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelenZorg(1234); // WHERE hulpmiddelen_zorg = 1234
     * $query->filterByHulpmiddelenZorg(array(12, 34)); // WHERE hulpmiddelen_zorg IN (12, 34)
     * $query->filterByHulpmiddelenZorg(array('min' => 12)); // WHERE hulpmiddelen_zorg >= 12
     * $query->filterByHulpmiddelenZorg(array('max' => 12)); // WHERE hulpmiddelen_zorg <= 12
     * </code>
     *
     * @param     mixed $hulpmiddelenZorg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelenZorg($hulpmiddelenZorg = null, $comparison = null)
    {
        if (is_array($hulpmiddelenZorg)) {
            $useMinMax = false;
            if (isset($hulpmiddelenZorg['min'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HULPMIDDELEN_ZORG, $hulpmiddelenZorg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelenZorg['max'])) {
                $this->addUsingAlias(GsHandelsproductenPeer::HULPMIDDELEN_ZORG, $hulpmiddelenZorg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHandelsproductenPeer::HULPMIDDELEN_ZORG, $hulpmiddelenZorg, $comparison);
    }

    /**
     * Filter the query by a related GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific|PropelObjectCollection $gsVoorschrijfprGeneesmiddelIdentific The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific, $comparison = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific instanceof GsVoorschrijfprGeneesmiddelIdentific) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfprGeneesmiddelIdentific instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsHandelsproductenPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->toKeyValue('PrimaryKey', 'Prkcode'), $comparison);
        } else {
            throw new PropelException('filterByGsVoorschrijfprGeneesmiddelIdentific() only accepts arguments of type GsVoorschrijfprGeneesmiddelIdentific or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfprGeneesmiddelIdentific');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsVoorschrijfprGeneesmiddelIdentific');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfprGeneesmiddelIdentific relation GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfprGeneesmiddelIdentificQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfprGeneesmiddelIdentific', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery');
    }

    /**
     * Filter the query by a related GsNamen object
     *
     * @param   GsNamen|PropelObjectCollection $gsNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNamen($gsNamen, $comparison = null)
    {
        if ($gsNamen instanceof GsNamen) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, $gsNamen->getNaamnummer(), $comparison);
        } elseif ($gsNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, $gsNamen->toKeyValue('PrimaryKey', 'Naamnummer'), $comparison);
        } else {
            throw new PropelException('filterByGsNamen() only accepts arguments of type GsNamen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNamen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsNamen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNamen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsNamen');
        }

        return $this;
    }

    /**
     * Use the GsNamen relation GsNamen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery A secondary query class using the current class as primary query
     */
    public function useGsNamenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNamen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNamen', '\PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInkoophoeveelheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByInkoophoeveelheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InkoophoeveelheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinInkoophoeveelheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InkoophoeveelheidOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'InkoophoeveelheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the InkoophoeveelheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useInkoophoeveelheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInkoophoeveelheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InkoophoeveelheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBasiseenheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByBasiseenheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BasiseenheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinBasiseenheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BasiseenheidOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'BasiseenheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the BasiseenheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useBasiseenheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBasiseenheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BasiseenheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmballageMateriaalOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByEmballageMateriaalOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmballageMateriaalOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinEmballageMateriaalOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmballageMateriaalOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'EmballageMateriaalOmschrijving');
        }

        return $this;
    }

    /**
     * Use the EmballageMateriaalOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useEmballageMateriaalOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmballageMateriaalOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmballageMateriaalOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmballageSluitingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByEmballageSluitingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmballageSluitingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinEmballageSluitingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmballageSluitingOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'EmballageSluitingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the EmballageSluitingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useEmballageSluitingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmballageSluitingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmballageSluitingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmballageDoseerinrichtingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByEmballageDoseerinrichtingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmballageDoseerinrichtingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinEmballageDoseerinrichtingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmballageDoseerinrichtingOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'EmballageDoseerinrichtingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the EmballageDoseerinrichtingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useEmballageDoseerinrichtingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmballageDoseerinrichtingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmballageDoseerinrichtingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByKleurOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::KLEUR_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByKleurOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the KleurOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinKleurOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('KleurOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'KleurOmschrijving');
        }

        return $this;
    }

    /**
     * Use the KleurOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useKleurOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinKleurOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'KleurOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySmaakOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::SMAAK_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterBySmaakOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SmaakOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinSmaakOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SmaakOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SmaakOmschrijving');
        }

        return $this;
    }

    /**
     * Use the SmaakOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useSmaakOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSmaakOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SmaakOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBereidingsvoorschrijftOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByBereidingsvoorschrijftOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BereidingsvoorschrijftOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinBereidingsvoorschrijftOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BereidingsvoorschrijftOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'BereidingsvoorschrijftOmschrijving');
        }

        return $this;
    }

    /**
     * Use the BereidingsvoorschrijftOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useBereidingsvoorschrijftOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBereidingsvoorschrijftOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BereidingsvoorschrijftOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProduktgroepOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::PRODUKTGROEP_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByProduktgroepOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProduktgroepOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinProduktgroepOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProduktgroepOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ProduktgroepOmschrijving');
        }

        return $this;
    }

    /**
     * Use the ProduktgroepOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useProduktgroepOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProduktgroepOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProduktgroepOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRzvVerstrekkingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::RZVVERSTREKKING, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRzvVerstrekkingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinRzvVerstrekkingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RzvVerstrekkingOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'RzvVerstrekkingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the RzvVerstrekkingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRzvVerstrekkingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRzvVerstrekkingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RzvVerstrekkingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRzvBijlage2Omschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::RZV_THESAURUS_120, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRzvBijlage2Omschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RzvBijlage2Omschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinRzvBijlage2Omschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RzvBijlage2Omschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'RzvBijlage2Omschrijving');
        }

        return $this;
    }

    /**
     * Use the RzvBijlage2Omschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRzvBijlage2OmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRzvBijlage2Omschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RzvBijlage2Omschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $gsArtikelEigenschappen->getHpk(), $comparison);
        } elseif ($gsArtikelEigenschappen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelEigenschappenQuery()
                ->filterByPrimaryKeys($gsArtikelEigenschappen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelEigenschappen() only accepts arguments of type GsArtikelEigenschappen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelEigenschappen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelEigenschappen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsArtikelEigenschappen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelEigenschappen relation GsArtikelEigenschappen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $gsArtikelen->getHandelsproduktkode(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelenQuery()
                ->filterByPrimaryKeys($gsArtikelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelen() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsArtikelen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelen relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsBijzondereKenmerken object
     *
     * @param   GsBijzondereKenmerken|PropelObjectCollection $gsBijzondereKenmerken  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsBijzondereKenmerken($gsBijzondereKenmerken, $comparison = null)
    {
        if ($gsBijzondereKenmerken instanceof GsBijzondereKenmerken) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $gsBijzondereKenmerken->getHandelsproduktkode(), $comparison);
        } elseif ($gsBijzondereKenmerken instanceof PropelObjectCollection) {
            return $this
                ->useGsBijzondereKenmerkenQuery()
                ->filterByPrimaryKeys($gsBijzondereKenmerken->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsBijzondereKenmerken() only accepts arguments of type GsBijzondereKenmerken or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsBijzondereKenmerken relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsBijzondereKenmerken($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsBijzondereKenmerken');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsBijzondereKenmerken');
        }

        return $this;
    }

    /**
     * Use the GsBijzondereKenmerken relation GsBijzondereKenmerken object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery A secondary query class using the current class as primary query
     */
    public function useGsBijzondereKenmerkenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsBijzondereKenmerken($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsBijzondereKenmerken', '\PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery');
    }

    /**
     * Filter the query by a related GsDeclaratietabelDureGeneesmiddelen object
     *
     * @param   GsDeclaratietabelDureGeneesmiddelen|PropelObjectCollection $gsDeclaratietabelDureGeneesmiddelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsDeclaratietabelDureGeneesmiddelen($gsDeclaratietabelDureGeneesmiddelen, $comparison = null)
    {
        if ($gsDeclaratietabelDureGeneesmiddelen instanceof GsDeclaratietabelDureGeneesmiddelen) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $gsDeclaratietabelDureGeneesmiddelen->getHandelsproduktkode(), $comparison);
        } elseif ($gsDeclaratietabelDureGeneesmiddelen instanceof PropelObjectCollection) {
            return $this
                ->useGsDeclaratietabelDureGeneesmiddelenQuery()
                ->filterByPrimaryKeys($gsDeclaratietabelDureGeneesmiddelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsDeclaratietabelDureGeneesmiddelen() only accepts arguments of type GsDeclaratietabelDureGeneesmiddelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsDeclaratietabelDureGeneesmiddelen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsDeclaratietabelDureGeneesmiddelen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsDeclaratietabelDureGeneesmiddelen');
        }

        return $this;
    }

    /**
     * Use the GsDeclaratietabelDureGeneesmiddelen relation GsDeclaratietabelDureGeneesmiddelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery A secondary query class using the current class as primary query
     */
    public function useGsDeclaratietabelDureGeneesmiddelenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsDeclaratietabelDureGeneesmiddelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsDeclaratietabelDureGeneesmiddelen', '\PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery');
    }

    /**
     * Filter the query by a related GsIngegevenSamenstellingen object
     *
     * @param   GsIngegevenSamenstellingen|PropelObjectCollection $gsIngegevenSamenstellingen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHandelsproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsIngegevenSamenstellingen($gsIngegevenSamenstellingen, $comparison = null)
    {
        if ($gsIngegevenSamenstellingen instanceof GsIngegevenSamenstellingen) {
            return $this
                ->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $gsIngegevenSamenstellingen->getHandelsproduktkode(), $comparison);
        } elseif ($gsIngegevenSamenstellingen instanceof PropelObjectCollection) {
            return $this
                ->useGsIngegevenSamenstellingenQuery()
                ->filterByPrimaryKeys($gsIngegevenSamenstellingen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsIngegevenSamenstellingen() only accepts arguments of type GsIngegevenSamenstellingen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsIngegevenSamenstellingen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function joinGsIngegevenSamenstellingen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsIngegevenSamenstellingen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsIngegevenSamenstellingen');
        }

        return $this;
    }

    /**
     * Use the GsIngegevenSamenstellingen relation GsIngegevenSamenstellingen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery A secondary query class using the current class as primary query
     */
    public function useGsIngegevenSamenstellingenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsIngegevenSamenstellingen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsIngegevenSamenstellingen', '\PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsHandelsproducten $gsHandelsproducten Object to remove from the list of results
     *
     * @return GsHandelsproductenQuery The current query, for fluid interface
     */
    public function prune($gsHandelsproducten = null)
    {
        if ($gsHandelsproducten) {
            $this->addUsingAlias(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->getHandelsproduktkode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
