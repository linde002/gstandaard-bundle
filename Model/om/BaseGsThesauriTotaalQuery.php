<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnk;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorie;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

/**
 * @method GsThesauriTotaalQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsThesauriTotaalQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsThesauriTotaalQuery orderByThesaurusnummer($order = Criteria::ASC) Order by the thesaurusnummer column
 * @method GsThesauriTotaalQuery orderByThesaurusItemnummer($order = Criteria::ASC) Order by the thesaurus_itemnummer column
 * @method GsThesauriTotaalQuery orderByMemokodeItem($order = Criteria::ASC) Order by the memokode_item column
 * @method GsThesauriTotaalQuery orderByNaamItem4Posities($order = Criteria::ASC) Order by the naam_item_4_posities column
 * @method GsThesauriTotaalQuery orderByNaamItem15Posities($order = Criteria::ASC) Order by the naam_item_15_posities column
 * @method GsThesauriTotaalQuery orderByNaamItem25Posities($order = Criteria::ASC) Order by the naam_item_25_posities column
 * @method GsThesauriTotaalQuery orderByNaamItem50Posities($order = Criteria::ASC) Order by the naam_item_50_posities column
 * @method GsThesauriTotaalQuery orderByAanvullendeKode1($order = Criteria::ASC) Order by the aanvullende_kode_1 column
 * @method GsThesauriTotaalQuery orderByAanvullendeKode2($order = Criteria::ASC) Order by the aanvullende_kode_2 column
 * @method GsThesauriTotaalQuery orderByAanvullendeKode3($order = Criteria::ASC) Order by the aanvullende_kode_3 column
 * @method GsThesauriTotaalQuery orderByAanvullendeKode4($order = Criteria::ASC) Order by the aanvullende_kode_4 column
 * @method GsThesauriTotaalQuery orderByAanvullendeKode5($order = Criteria::ASC) Order by the aanvullende_kode_5 column
 * @method GsThesauriTotaalQuery orderByAanvullendeKode6($order = Criteria::ASC) Order by the aanvullende_kode_6 column
 *
 * @method GsThesauriTotaalQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsThesauriTotaalQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsThesauriTotaalQuery groupByThesaurusnummer() Group by the thesaurusnummer column
 * @method GsThesauriTotaalQuery groupByThesaurusItemnummer() Group by the thesaurus_itemnummer column
 * @method GsThesauriTotaalQuery groupByMemokodeItem() Group by the memokode_item column
 * @method GsThesauriTotaalQuery groupByNaamItem4Posities() Group by the naam_item_4_posities column
 * @method GsThesauriTotaalQuery groupByNaamItem15Posities() Group by the naam_item_15_posities column
 * @method GsThesauriTotaalQuery groupByNaamItem25Posities() Group by the naam_item_25_posities column
 * @method GsThesauriTotaalQuery groupByNaamItem50Posities() Group by the naam_item_50_posities column
 * @method GsThesauriTotaalQuery groupByAanvullendeKode1() Group by the aanvullende_kode_1 column
 * @method GsThesauriTotaalQuery groupByAanvullendeKode2() Group by the aanvullende_kode_2 column
 * @method GsThesauriTotaalQuery groupByAanvullendeKode3() Group by the aanvullende_kode_3 column
 * @method GsThesauriTotaalQuery groupByAanvullendeKode4() Group by the aanvullende_kode_4 column
 * @method GsThesauriTotaalQuery groupByAanvullendeKode5() Group by the aanvullende_kode_5 column
 * @method GsThesauriTotaalQuery groupByAanvullendeKode6() Group by the aanvullende_kode_6 column
 *
 * @method GsThesauriTotaalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsThesauriTotaalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsThesauriTotaalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsThesauriTotaalQuery leftJoinGsSupplementaireProductenHistorie($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsSupplementaireProductenHistorie relation
 * @method GsThesauriTotaalQuery rightJoinGsSupplementaireProductenHistorie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsSupplementaireProductenHistorie relation
 * @method GsThesauriTotaalQuery innerJoinGsSupplementaireProductenHistorie($relationAlias = null) Adds a INNER JOIN clause to the query using the GsSupplementaireProductenHistorie relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsAanvullendeMedicatiebewakingsgegevens($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAanvullendeMedicatiebewakingsgegevens relation
 * @method GsThesauriTotaalQuery rightJoinGsAanvullendeMedicatiebewakingsgegevens($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAanvullendeMedicatiebewakingsgegevens relation
 * @method GsThesauriTotaalQuery innerJoinGsAanvullendeMedicatiebewakingsgegevens($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAanvullendeMedicatiebewakingsgegevens relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen relation
 * @method GsThesauriTotaalQuery rightJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen relation
 * @method GsThesauriTotaalQuery innerJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte relation
 * @method GsThesauriTotaalQuery rightJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte relation
 * @method GsThesauriTotaalQuery innerJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte relation
 * @method GsThesauriTotaalQuery rightJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte relation
 * @method GsThesauriTotaalQuery innerJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte relation
 * @method GsThesauriTotaalQuery rightJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte relation
 * @method GsThesauriTotaalQuery innerJoinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode relation
 * @method GsThesauriTotaalQuery rightJoinGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode relation
 * @method GsThesauriTotaalQuery innerJoinGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode relation
 * @method GsThesauriTotaalQuery rightJoinGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode relation
 * @method GsThesauriTotaalQuery innerJoinGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode relation
 * @method GsThesauriTotaalQuery rightJoinGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode relation
 * @method GsThesauriTotaalQuery innerJoinGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsBijzondereKenmerken($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsThesauriTotaalQuery rightJoinGsBijzondereKenmerken($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsThesauriTotaalQuery innerJoinGsBijzondereKenmerken($relationAlias = null) Adds a INNER JOIN clause to the query using the GsBijzondereKenmerken relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid relation
 * @method GsThesauriTotaalQuery rightJoinGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid relation
 * @method GsThesauriTotaalQuery innerJoinGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($relationAlias = null) Adds a INNER JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg relation
 * @method GsThesauriTotaalQuery rightJoinGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg relation
 * @method GsThesauriTotaalQuery innerJoinGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($relationAlias = null) Adds a INNER JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel relation
 * @method GsThesauriTotaalQuery rightJoinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel relation
 * @method GsThesauriTotaalQuery innerJoinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($relationAlias = null) Adds a INNER JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid relation
 * @method GsThesauriTotaalQuery rightJoinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid relation
 * @method GsThesauriTotaalQuery innerJoinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($relationAlias = null) Adds a INNER JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode relation
 * @method GsThesauriTotaalQuery rightJoinGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode relation
 * @method GsThesauriTotaalQuery innerJoinGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode relation
 * @method GsThesauriTotaalQuery rightJoinGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode relation
 * @method GsThesauriTotaalQuery innerJoinGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 relation
 * @method GsThesauriTotaalQuery rightJoinGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 relation
 * @method GsThesauriTotaalQuery innerJoinGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode relation
 * @method GsThesauriTotaalQuery rightJoinGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode relation
 * @method GsThesauriTotaalQuery innerJoinGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode relation
 * @method GsThesauriTotaalQuery rightJoinGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode relation
 * @method GsThesauriTotaalQuery innerJoinGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsNawGegevensGstandaard($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNawGegevensGstandaard relation
 * @method GsThesauriTotaalQuery rightJoinGsNawGegevensGstandaard($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNawGegevensGstandaard relation
 * @method GsThesauriTotaalQuery innerJoinGsNawGegevensGstandaard($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNawGegevensGstandaard relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsPreferentieBeleid($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPreferentieBeleid relation
 * @method GsThesauriTotaalQuery rightJoinGsPreferentieBeleid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPreferentieBeleid relation
 * @method GsThesauriTotaalQuery innerJoinGsPreferentieBeleid($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPreferentieBeleid relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering relation
 * @method GsThesauriTotaalQuery rightJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering relation
 * @method GsThesauriTotaalQuery innerJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag relation
 * @method GsThesauriTotaalQuery rightJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag relation
 * @method GsThesauriTotaalQuery innerJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron relation
 * @method GsThesauriTotaalQuery rightJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron relation
 * @method GsThesauriTotaalQuery innerJoinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron relation
 *
 * @method GsThesauriTotaalQuery leftJoinGsRelatieOngewensteGroepensnk($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsRelatieOngewensteGroepensnk relation
 * @method GsThesauriTotaalQuery rightJoinGsRelatieOngewensteGroepensnk($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsRelatieOngewensteGroepensnk relation
 * @method GsThesauriTotaalQuery innerJoinGsRelatieOngewensteGroepensnk($relationAlias = null) Adds a INNER JOIN clause to the query using the GsRelatieOngewensteGroepensnk relation
 *
 * @method GsThesauriTotaal findOne(PropelPDO $con = null) Return the first GsThesauriTotaal matching the query
 * @method GsThesauriTotaal findOneOrCreate(PropelPDO $con = null) Return the first GsThesauriTotaal matching the query, or a new GsThesauriTotaal object populated from the query conditions when no match is found
 *
 * @method GsThesauriTotaal findOneByBestandnummer(int $bestandnummer) Return the first GsThesauriTotaal filtered by the bestandnummer column
 * @method GsThesauriTotaal findOneByMutatiekode(int $mutatiekode) Return the first GsThesauriTotaal filtered by the mutatiekode column
 * @method GsThesauriTotaal findOneByThesaurusnummer(int $thesaurusnummer) Return the first GsThesauriTotaal filtered by the thesaurusnummer column
 * @method GsThesauriTotaal findOneByThesaurusItemnummer(int $thesaurus_itemnummer) Return the first GsThesauriTotaal filtered by the thesaurus_itemnummer column
 * @method GsThesauriTotaal findOneByMemokodeItem(string $memokode_item) Return the first GsThesauriTotaal filtered by the memokode_item column
 * @method GsThesauriTotaal findOneByNaamItem4Posities(string $naam_item_4_posities) Return the first GsThesauriTotaal filtered by the naam_item_4_posities column
 * @method GsThesauriTotaal findOneByNaamItem15Posities(string $naam_item_15_posities) Return the first GsThesauriTotaal filtered by the naam_item_15_posities column
 * @method GsThesauriTotaal findOneByNaamItem25Posities(string $naam_item_25_posities) Return the first GsThesauriTotaal filtered by the naam_item_25_posities column
 * @method GsThesauriTotaal findOneByNaamItem50Posities(string $naam_item_50_posities) Return the first GsThesauriTotaal filtered by the naam_item_50_posities column
 * @method GsThesauriTotaal findOneByAanvullendeKode1(string $aanvullende_kode_1) Return the first GsThesauriTotaal filtered by the aanvullende_kode_1 column
 * @method GsThesauriTotaal findOneByAanvullendeKode2(string $aanvullende_kode_2) Return the first GsThesauriTotaal filtered by the aanvullende_kode_2 column
 * @method GsThesauriTotaal findOneByAanvullendeKode3(string $aanvullende_kode_3) Return the first GsThesauriTotaal filtered by the aanvullende_kode_3 column
 * @method GsThesauriTotaal findOneByAanvullendeKode4(string $aanvullende_kode_4) Return the first GsThesauriTotaal filtered by the aanvullende_kode_4 column
 * @method GsThesauriTotaal findOneByAanvullendeKode5(string $aanvullende_kode_5) Return the first GsThesauriTotaal filtered by the aanvullende_kode_5 column
 * @method GsThesauriTotaal findOneByAanvullendeKode6(string $aanvullende_kode_6) Return the first GsThesauriTotaal filtered by the aanvullende_kode_6 column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsThesauriTotaal objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsThesauriTotaal objects filtered by the mutatiekode column
 * @method array findByThesaurusnummer(int $thesaurusnummer) Return GsThesauriTotaal objects filtered by the thesaurusnummer column
 * @method array findByThesaurusItemnummer(int $thesaurus_itemnummer) Return GsThesauriTotaal objects filtered by the thesaurus_itemnummer column
 * @method array findByMemokodeItem(string $memokode_item) Return GsThesauriTotaal objects filtered by the memokode_item column
 * @method array findByNaamItem4Posities(string $naam_item_4_posities) Return GsThesauriTotaal objects filtered by the naam_item_4_posities column
 * @method array findByNaamItem15Posities(string $naam_item_15_posities) Return GsThesauriTotaal objects filtered by the naam_item_15_posities column
 * @method array findByNaamItem25Posities(string $naam_item_25_posities) Return GsThesauriTotaal objects filtered by the naam_item_25_posities column
 * @method array findByNaamItem50Posities(string $naam_item_50_posities) Return GsThesauriTotaal objects filtered by the naam_item_50_posities column
 * @method array findByAanvullendeKode1(string $aanvullende_kode_1) Return GsThesauriTotaal objects filtered by the aanvullende_kode_1 column
 * @method array findByAanvullendeKode2(string $aanvullende_kode_2) Return GsThesauriTotaal objects filtered by the aanvullende_kode_2 column
 * @method array findByAanvullendeKode3(string $aanvullende_kode_3) Return GsThesauriTotaal objects filtered by the aanvullende_kode_3 column
 * @method array findByAanvullendeKode4(string $aanvullende_kode_4) Return GsThesauriTotaal objects filtered by the aanvullende_kode_4 column
 * @method array findByAanvullendeKode5(string $aanvullende_kode_5) Return GsThesauriTotaal objects filtered by the aanvullende_kode_5 column
 * @method array findByAanvullendeKode6(string $aanvullende_kode_6) Return GsThesauriTotaal objects filtered by the aanvullende_kode_6 column
 */
abstract class BaseGsThesauriTotaalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsThesauriTotaalQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsThesauriTotaalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsThesauriTotaalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsThesauriTotaalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsThesauriTotaalQuery) {
            return $criteria;
        }
        $query = new GsThesauriTotaalQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$thesaurusnummer, $thesaurus_itemnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsThesauriTotaal|GsThesauriTotaal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsThesauriTotaalPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsThesauriTotaal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurusnummer`, `thesaurus_itemnummer`, `memokode_item`, `naam_item_4_posities`, `naam_item_15_posities`, `naam_item_25_posities`, `naam_item_50_posities`, `aanvullende_kode_1`, `aanvullende_kode_2`, `aanvullende_kode_3`, `aanvullende_kode_4`, `aanvullende_kode_5`, `aanvullende_kode_6` FROM `gs_thesauri_totaal` WHERE `thesaurusnummer` = :p0 AND `thesaurus_itemnummer` = :p1';
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
            $obj = new GsThesauriTotaal();
            $obj->hydrate($row);
            GsThesauriTotaalPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsThesauriTotaal|GsThesauriTotaal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsThesauriTotaal[]|mixed the list of results, formatted by the current formatter
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
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsThesauriTotaalPeer::THESAURUSNUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusnummer(1234); // WHERE thesaurusnummer = 1234
     * $query->filterByThesaurusnummer(array(12, 34)); // WHERE thesaurusnummer IN (12, 34)
     * $query->filterByThesaurusnummer(array('min' => 12)); // WHERE thesaurusnummer >= 12
     * $query->filterByThesaurusnummer(array('max' => 12)); // WHERE thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $thesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByThesaurusnummer($thesaurusnummer = null, $comparison = null)
    {
        if (is_array($thesaurusnummer)) {
            $useMinMax = false;
            if (isset($thesaurusnummer['min'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $thesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusnummer['max'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $thesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $thesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_itemnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusItemnummer(1234); // WHERE thesaurus_itemnummer = 1234
     * $query->filterByThesaurusItemnummer(array(12, 34)); // WHERE thesaurus_itemnummer IN (12, 34)
     * $query->filterByThesaurusItemnummer(array('min' => 12)); // WHERE thesaurus_itemnummer >= 12
     * $query->filterByThesaurusItemnummer(array('max' => 12)); // WHERE thesaurus_itemnummer <= 12
     * </code>
     *
     * @param     mixed $thesaurusItemnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByThesaurusItemnummer($thesaurusItemnummer = null, $comparison = null)
    {
        if (is_array($thesaurusItemnummer)) {
            $useMinMax = false;
            if (isset($thesaurusItemnummer['min'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $thesaurusItemnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusItemnummer['max'])) {
                $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $thesaurusItemnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $thesaurusItemnummer, $comparison);
    }

    /**
     * Filter the query on the memokode_item column
     *
     * Example usage:
     * <code>
     * $query->filterByMemokodeItem('fooValue');   // WHERE memokode_item = 'fooValue'
     * $query->filterByMemokodeItem('%fooValue%'); // WHERE memokode_item LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memokodeItem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByMemokodeItem($memokodeItem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memokodeItem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memokodeItem)) {
                $memokodeItem = str_replace('*', '%', $memokodeItem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::MEMOKODE_ITEM, $memokodeItem, $comparison);
    }

    /**
     * Filter the query on the naam_item_4_posities column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamItem4Posities('fooValue');   // WHERE naam_item_4_posities = 'fooValue'
     * $query->filterByNaamItem4Posities('%fooValue%'); // WHERE naam_item_4_posities LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamItem4Posities The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByNaamItem4Posities($naamItem4Posities = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamItem4Posities)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamItem4Posities)) {
                $naamItem4Posities = str_replace('*', '%', $naamItem4Posities);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES, $naamItem4Posities, $comparison);
    }

    /**
     * Filter the query on the naam_item_15_posities column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamItem15Posities('fooValue');   // WHERE naam_item_15_posities = 'fooValue'
     * $query->filterByNaamItem15Posities('%fooValue%'); // WHERE naam_item_15_posities LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamItem15Posities The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByNaamItem15Posities($naamItem15Posities = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamItem15Posities)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamItem15Posities)) {
                $naamItem15Posities = str_replace('*', '%', $naamItem15Posities);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES, $naamItem15Posities, $comparison);
    }

    /**
     * Filter the query on the naam_item_25_posities column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamItem25Posities('fooValue');   // WHERE naam_item_25_posities = 'fooValue'
     * $query->filterByNaamItem25Posities('%fooValue%'); // WHERE naam_item_25_posities LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamItem25Posities The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByNaamItem25Posities($naamItem25Posities = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamItem25Posities)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamItem25Posities)) {
                $naamItem25Posities = str_replace('*', '%', $naamItem25Posities);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES, $naamItem25Posities, $comparison);
    }

    /**
     * Filter the query on the naam_item_50_posities column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamItem50Posities('fooValue');   // WHERE naam_item_50_posities = 'fooValue'
     * $query->filterByNaamItem50Posities('%fooValue%'); // WHERE naam_item_50_posities LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamItem50Posities The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByNaamItem50Posities($naamItem50Posities = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamItem50Posities)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamItem50Posities)) {
                $naamItem50Posities = str_replace('*', '%', $naamItem50Posities);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES, $naamItem50Posities, $comparison);
    }

    /**
     * Filter the query on the aanvullende_kode_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeKode1('fooValue');   // WHERE aanvullende_kode_1 = 'fooValue'
     * $query->filterByAanvullendeKode1('%fooValue%'); // WHERE aanvullende_kode_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeKode1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByAanvullendeKode1($aanvullendeKode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeKode1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeKode1)) {
                $aanvullendeKode1 = str_replace('*', '%', $aanvullendeKode1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::AANVULLENDE_KODE_1, $aanvullendeKode1, $comparison);
    }

    /**
     * Filter the query on the aanvullende_kode_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeKode2('fooValue');   // WHERE aanvullende_kode_2 = 'fooValue'
     * $query->filterByAanvullendeKode2('%fooValue%'); // WHERE aanvullende_kode_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeKode2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByAanvullendeKode2($aanvullendeKode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeKode2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeKode2)) {
                $aanvullendeKode2 = str_replace('*', '%', $aanvullendeKode2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::AANVULLENDE_KODE_2, $aanvullendeKode2, $comparison);
    }

    /**
     * Filter the query on the aanvullende_kode_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeKode3('fooValue');   // WHERE aanvullende_kode_3 = 'fooValue'
     * $query->filterByAanvullendeKode3('%fooValue%'); // WHERE aanvullende_kode_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeKode3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByAanvullendeKode3($aanvullendeKode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeKode3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeKode3)) {
                $aanvullendeKode3 = str_replace('*', '%', $aanvullendeKode3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::AANVULLENDE_KODE_3, $aanvullendeKode3, $comparison);
    }

    /**
     * Filter the query on the aanvullende_kode_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeKode4('fooValue');   // WHERE aanvullende_kode_4 = 'fooValue'
     * $query->filterByAanvullendeKode4('%fooValue%'); // WHERE aanvullende_kode_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeKode4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByAanvullendeKode4($aanvullendeKode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeKode4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeKode4)) {
                $aanvullendeKode4 = str_replace('*', '%', $aanvullendeKode4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::AANVULLENDE_KODE_4, $aanvullendeKode4, $comparison);
    }

    /**
     * Filter the query on the aanvullende_kode_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeKode5('fooValue');   // WHERE aanvullende_kode_5 = 'fooValue'
     * $query->filterByAanvullendeKode5('%fooValue%'); // WHERE aanvullende_kode_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeKode5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByAanvullendeKode5($aanvullendeKode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeKode5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeKode5)) {
                $aanvullendeKode5 = str_replace('*', '%', $aanvullendeKode5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::AANVULLENDE_KODE_5, $aanvullendeKode5, $comparison);
    }

    /**
     * Filter the query on the aanvullende_kode_6 column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeKode6('fooValue');   // WHERE aanvullende_kode_6 = 'fooValue'
     * $query->filterByAanvullendeKode6('%fooValue%'); // WHERE aanvullende_kode_6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeKode6 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function filterByAanvullendeKode6($aanvullendeKode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeKode6)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeKode6)) {
                $aanvullendeKode6 = str_replace('*', '%', $aanvullendeKode6);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsThesauriTotaalPeer::AANVULLENDE_KODE_6, $aanvullendeKode6, $comparison);
    }

    /**
     * Filter the query by a related GsSupplementaireProductenHistorie object
     *
     * @param   GsSupplementaireProductenHistorie|PropelObjectCollection $gsSupplementaireProductenHistorie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie, $comparison = null)
    {
        if ($gsSupplementaireProductenHistorie instanceof GsSupplementaireProductenHistorie) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsSupplementaireProductenHistorie->getThesaurusNummerSoortSupplementairProduct(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsSupplementaireProductenHistorie->getSoortSupplementairProduct(), $comparison);
        } else {
            throw new PropelException('filterByGsSupplementaireProductenHistorie() only accepts arguments of type GsSupplementaireProductenHistorie');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsSupplementaireProductenHistorie relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsSupplementaireProductenHistorie($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsSupplementaireProductenHistorie');

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
            $this->addJoinObject($join, 'GsSupplementaireProductenHistorie');
        }

        return $this;
    }

    /**
     * Use the GsSupplementaireProductenHistorie relation GsSupplementaireProductenHistorie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorieQuery A secondary query class using the current class as primary query
     */
    public function useGsSupplementaireProductenHistorieQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsSupplementaireProductenHistorie($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsSupplementaireProductenHistorie', '\PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorieQuery');
    }

    /**
     * Filter the query by a related GsAanvullendeMedicatiebewakingsgegevens object
     *
     * @param   GsAanvullendeMedicatiebewakingsgegevens|PropelObjectCollection $gsAanvullendeMedicatiebewakingsgegevens  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAanvullendeMedicatiebewakingsgegevens($gsAanvullendeMedicatiebewakingsgegevens, $comparison = null)
    {
        if ($gsAanvullendeMedicatiebewakingsgegevens instanceof GsAanvullendeMedicatiebewakingsgegevens) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsAanvullendeMedicatiebewakingsgegevens->getThesnrBewakingssoort(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsAanvullendeMedicatiebewakingsgegevens->getBewakingssoort(), $comparison);
        } else {
            throw new PropelException('filterByGsAanvullendeMedicatiebewakingsgegevens() only accepts arguments of type GsAanvullendeMedicatiebewakingsgegevens');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAanvullendeMedicatiebewakingsgegevens relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsAanvullendeMedicatiebewakingsgegevens($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAanvullendeMedicatiebewakingsgegevens');

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
            $this->addJoinObject($join, 'GsAanvullendeMedicatiebewakingsgegevens');
        }

        return $this;
    }

    /**
     * Use the GsAanvullendeMedicatiebewakingsgegevens relation GsAanvullendeMedicatiebewakingsgegevens object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensQuery A secondary query class using the current class as primary query
     */
    public function useGsAanvullendeMedicatiebewakingsgegevensQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsAanvullendeMedicatiebewakingsgegevens($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAanvullendeMedicatiebewakingsgegevens', '\PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeVerpakkingsinformatie object
     *
     * @param   GsLogistiekeVerpakkingsinformatie|PropelObjectCollection $gsLogistiekeVerpakkingsinformatie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($gsLogistiekeVerpakkingsinformatie, $comparison = null)
    {
        if ($gsLogistiekeVerpakkingsinformatie instanceof GsLogistiekeVerpakkingsinformatie) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusSoortenVerpakkingen(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusitemSoortenVerpakkingen(), $comparison);
        } else {
            throw new PropelException('filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen() only accepts arguments of type GsLogistiekeVerpakkingsinformatie');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen');

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
            $this->addJoinObject($join, 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen');
        }

        return $this;
    }

    /**
     * Use the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen relation GsLogistiekeVerpakkingsinformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery A secondary query class using the current class as primary query
     */
    public function useGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeVerpakkingsinformatie object
     *
     * @param   GsLogistiekeVerpakkingsinformatie|PropelObjectCollection $gsLogistiekeVerpakkingsinformatie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($gsLogistiekeVerpakkingsinformatie, $comparison = null)
    {
        if ($gsLogistiekeVerpakkingsinformatie instanceof GsLogistiekeVerpakkingsinformatie) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusMetItemsVanEenheden(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusitemVanEenheidHoogte(), $comparison);
        } else {
            throw new PropelException('filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte() only accepts arguments of type GsLogistiekeVerpakkingsinformatie');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte');

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
            $this->addJoinObject($join, 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte');
        }

        return $this;
    }

    /**
     * Use the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte relation GsLogistiekeVerpakkingsinformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery A secondary query class using the current class as primary query
     */
    public function useGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeVerpakkingsinformatie object
     *
     * @param   GsLogistiekeVerpakkingsinformatie|PropelObjectCollection $gsLogistiekeVerpakkingsinformatie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($gsLogistiekeVerpakkingsinformatie, $comparison = null)
    {
        if ($gsLogistiekeVerpakkingsinformatie instanceof GsLogistiekeVerpakkingsinformatie) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusMetItemsVanEenheden(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusitemVanEenheidDiepte(), $comparison);
        } else {
            throw new PropelException('filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte() only accepts arguments of type GsLogistiekeVerpakkingsinformatie');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte');

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
            $this->addJoinObject($join, 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte');
        }

        return $this;
    }

    /**
     * Use the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte relation GsLogistiekeVerpakkingsinformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery A secondary query class using the current class as primary query
     */
    public function useGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeVerpakkingsinformatie object
     *
     * @param   GsLogistiekeVerpakkingsinformatie|PropelObjectCollection $gsLogistiekeVerpakkingsinformatie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($gsLogistiekeVerpakkingsinformatie, $comparison = null)
    {
        if ($gsLogistiekeVerpakkingsinformatie instanceof GsLogistiekeVerpakkingsinformatie) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusMetItemsVanEenheden(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsLogistiekeVerpakkingsinformatie->getThesaurusitemVanEenheidBreedte(), $comparison);
        } else {
            throw new PropelException('filterByGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte() only accepts arguments of type GsLogistiekeVerpakkingsinformatie');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte');

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
            $this->addJoinObject($join, 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte');
        }

        return $this;
    }

    /**
     * Use the GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte relation GsLogistiekeVerpakkingsinformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery A secondary query class using the current class as primary query
     */
    public function useGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsArtikelen->getLandVanHerkomstThesaurusNummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsArtikelen->getLandVanHerkomstKode(), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode() only accepts arguments of type GsArtikelen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsArtikelen->getHoofdverpakkingOmschrijvingThesnr(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsArtikelen->getHoofdverpakkingOmschrijvingKode(), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode() only accepts arguments of type GsArtikelen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsArtikelen->getDeelverpakkingOmschrijvingThesnr(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsArtikelen->getDeelverpakkingOmschrijvingKode(), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode() only accepts arguments of type GsArtikelen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsBijzondereKenmerken object
     *
     * @param   GsBijzondereKenmerken|PropelObjectCollection $gsBijzondereKenmerken  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsBijzondereKenmerken($gsBijzondereKenmerken, $comparison = null)
    {
        if ($gsBijzondereKenmerken instanceof GsBijzondereKenmerken) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsBijzondereKenmerken->getThesnrBijzondereKenmerken(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsBijzondereKenmerken->getBijzondereKenmerk(), $comparison);
        } else {
            throw new PropelException('filterByGsBijzondereKenmerken() only accepts arguments of type GsBijzondereKenmerken');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsBijzondereKenmerken relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsBijzondereKenmerken($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsBijzondereKenmerkenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsBijzondereKenmerken($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsBijzondereKenmerken', '\PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery');
    }

    /**
     * Filter the query by a related GsDailyDefinedDose object
     *
     * @param   GsDailyDefinedDose|PropelObjectCollection $gsDailyDefinedDose  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($gsDailyDefinedDose, $comparison = null)
    {
        if ($gsDailyDefinedDose instanceof GsDailyDefinedDose) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsDailyDefinedDose->getDddeenheidThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsDailyDefinedDose->getDddeenheid(), $comparison);
        } else {
            throw new PropelException('filterByGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid() only accepts arguments of type GsDailyDefinedDose');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid');

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
            $this->addJoinObject($join, 'GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid');
        }

        return $this;
    }

    /**
     * Use the GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid relation GsDailyDefinedDose object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery A secondary query class using the current class as primary query
     */
    public function useGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheidQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid', '\PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery');
    }

    /**
     * Filter the query by a related GsDailyDefinedDose object
     *
     * @param   GsDailyDefinedDose|PropelObjectCollection $gsDailyDefinedDose  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($gsDailyDefinedDose, $comparison = null)
    {
        if ($gsDailyDefinedDose instanceof GsDailyDefinedDose) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsDailyDefinedDose->getDddToedieningswegThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsDailyDefinedDose->getDddtoedieningsweg(), $comparison);
        } else {
            throw new PropelException('filterByGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg() only accepts arguments of type GsDailyDefinedDose');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg');

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
            $this->addJoinObject($join, 'GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg');
        }

        return $this;
    }

    /**
     * Use the GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg relation GsDailyDefinedDose object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery A secondary query class using the current class as primary query
     */
    public function useGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg', '\PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery');
    }

    /**
     * Filter the query by a related GsDeclaratietabelDureGeneesmiddelen object
     *
     * @param   GsDeclaratietabelDureGeneesmiddelen|PropelObjectCollection $gsDeclaratietabelDureGeneesmiddelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($gsDeclaratietabelDureGeneesmiddelen, $comparison = null)
    {
        if ($gsDeclaratietabelDureGeneesmiddelen instanceof GsDeclaratietabelDureGeneesmiddelen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsDeclaratietabelDureGeneesmiddelen->getThesaurusNummerBeleidsregel(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsDeclaratietabelDureGeneesmiddelen->getItemnummerBeleidsregel(), $comparison);
        } else {
            throw new PropelException('filterByGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel() only accepts arguments of type GsDeclaratietabelDureGeneesmiddelen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel');

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
            $this->addJoinObject($join, 'GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel');
        }

        return $this;
    }

    /**
     * Use the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel relation GsDeclaratietabelDureGeneesmiddelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery A secondary query class using the current class as primary query
     */
    public function useGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel', '\PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery');
    }

    /**
     * Filter the query by a related GsDeclaratietabelDureGeneesmiddelen object
     *
     * @param   GsDeclaratietabelDureGeneesmiddelen|PropelObjectCollection $gsDeclaratietabelDureGeneesmiddelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($gsDeclaratietabelDureGeneesmiddelen, $comparison = null)
    {
        if ($gsDeclaratietabelDureGeneesmiddelen instanceof GsDeclaratietabelDureGeneesmiddelen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsDeclaratietabelDureGeneesmiddelen->getThesaurusVerwijzingEenheid(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsDeclaratietabelDureGeneesmiddelen->getEenheid(), $comparison);
        } else {
            throw new PropelException('filterByGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid() only accepts arguments of type GsDeclaratietabelDureGeneesmiddelen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid');

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
            $this->addJoinObject($join, 'GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid');
        }

        return $this;
    }

    /**
     * Use the GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid relation GsDeclaratietabelDureGeneesmiddelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery A secondary query class using the current class as primary query
     */
    public function useGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheidQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid', '\PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsGeneriekeProducten->getFarmaceutischeVormThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsGeneriekeProducten->getFarmaceutischeVormCode(), $comparison);
        } else {
            throw new PropelException('filterByGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode() only accepts arguments of type GsGeneriekeProducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode');

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
            $this->addJoinObject($join, 'GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsGeneriekeProducten->getToedieningswegThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsGeneriekeProducten->getToedieningswegCode(), $comparison);
        } else {
            throw new PropelException('filterByGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode() only accepts arguments of type GsGeneriekeProducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode');

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
            $this->addJoinObject($join, 'GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getEenheidInkoophoeveelheidThesnr(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getEenheidInkoophoeveelheid(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getBasiseenheidVerpakkingThesnr(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getBasiseenheidVerpakking(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getEmballagemateriaalThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getEmballagemateriaalKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getEmballagesluitingThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getEmballagesluitingKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getEmballagedoseerinrThesaurusnr(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getEmballagedoseerinrichtingKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getKleurThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getKleurKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByKleurThesaurusnummerKleurKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getSmaakThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getSmaakKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getBereidingsvoorschrThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getBereidingsvoorschriftKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getProduktgroepThesaurusnummer(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getProduktgroepKode(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getThesaurusRzvVerstrekking(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getRzvverstrekking(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekkingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsHandelsproducten->getRzvThesaurus120(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsHandelsproducten->getRzvvoorwaardenBijlage2(), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2() only accepts arguments of type GsHandelsproducten');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2');

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
            $this->addJoinObject($join, 'GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsIngegevenSamenstellingen object
     *
     * @param   GsIngegevenSamenstellingen|PropelObjectCollection $gsIngegevenSamenstellingen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($gsIngegevenSamenstellingen, $comparison = null)
    {
        if ($gsIngegevenSamenstellingen instanceof GsIngegevenSamenstellingen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsIngegevenSamenstellingen->getEenhHvhWerkzstofThesaurus1(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsIngegevenSamenstellingen->getEenhhoeveelheidWerkzameStofKode(), $comparison);
        } else {
            throw new PropelException('filterByGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode() only accepts arguments of type GsIngegevenSamenstellingen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode');

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
            $this->addJoinObject($join, 'GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode');
        }

        return $this;
    }

    /**
     * Use the GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode relation GsIngegevenSamenstellingen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery A secondary query class using the current class as primary query
     */
    public function useGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode', '\PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery');
    }

    /**
     * Filter the query by a related GsIngegevenSamenstellingen object
     *
     * @param   GsIngegevenSamenstellingen|PropelObjectCollection $gsIngegevenSamenstellingen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($gsIngegevenSamenstellingen, $comparison = null)
    {
        if ($gsIngegevenSamenstellingen instanceof GsIngegevenSamenstellingen) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsIngegevenSamenstellingen->getStamtoedieningswegThesaurus58(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsIngegevenSamenstellingen->getStamtoedieningswegCode(), $comparison);
        } else {
            throw new PropelException('filterByGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode() only accepts arguments of type GsIngegevenSamenstellingen');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode');

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
            $this->addJoinObject($join, 'GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode');
        }

        return $this;
    }

    /**
     * Use the GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode relation GsIngegevenSamenstellingen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery A secondary query class using the current class as primary query
     */
    public function useGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode', '\PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery');
    }

    /**
     * Filter the query by a related GsNawGegevensGstandaard object
     *
     * @param   GsNawGegevensGstandaard|PropelObjectCollection $gsNawGegevensGstandaard  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNawGegevensGstandaard($gsNawGegevensGstandaard, $comparison = null)
    {
        if ($gsNawGegevensGstandaard instanceof GsNawGegevensGstandaard) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsNawGegevensGstandaard->getThesaurusnummerSoortNaw(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsNawGegevensGstandaard->getNawSoort(), $comparison);
        } else {
            throw new PropelException('filterByGsNawGegevensGstandaard() only accepts arguments of type GsNawGegevensGstandaard');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNawGegevensGstandaard relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsNawGegevensGstandaard($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNawGegevensGstandaard');

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
            $this->addJoinObject($join, 'GsNawGegevensGstandaard');
        }

        return $this;
    }

    /**
     * Use the GsNawGegevensGstandaard relation GsNawGegevensGstandaard object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery A secondary query class using the current class as primary query
     */
    public function useGsNawGegevensGstandaardQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNawGegevensGstandaard($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNawGegevensGstandaard', '\PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery');
    }

    /**
     * Filter the query by a related GsPreferentieBeleid object
     *
     * @param   GsPreferentieBeleid|PropelObjectCollection $gsPreferentieBeleid  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPreferentieBeleid($gsPreferentieBeleid, $comparison = null)
    {
        if ($gsPreferentieBeleid instanceof GsPreferentieBeleid) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsPreferentieBeleid->getThesaurusverwijzingPreferentieStatus(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsPreferentieBeleid->getPreferentieStatus(), $comparison);
        } else {
            throw new PropelException('filterByGsPreferentieBeleid() only accepts arguments of type GsPreferentieBeleid');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsPreferentieBeleid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsPreferentieBeleid($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsPreferentieBeleid');

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
            $this->addJoinObject($join, 'GsPreferentieBeleid');
        }

        return $this;
    }

    /**
     * Use the GsPreferentieBeleid relation GsPreferentieBeleid object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery A secondary query class using the current class as primary query
     */
    public function useGsPreferentieBeleidQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsPreferentieBeleid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPreferentieBeleid', '\PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery');
    }

    /**
     * Filter the query by a related GsPrijsTariefTabel object
     *
     * @param   GsPrijsTariefTabel|PropelObjectCollection $gsPrijsTariefTabel  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($gsPrijsTariefTabel, $comparison = null)
    {
        if ($gsPrijsTariefTabel instanceof GsPrijsTariefTabel) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsPrijsTariefTabel->getThesaurusverwijzingSoortCodering(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsPrijsTariefTabel->getSoortCodering(), $comparison);
        } else {
            throw new PropelException('filterByGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering() only accepts arguments of type GsPrijsTariefTabel');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering');

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
            $this->addJoinObject($join, 'GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering');
        }

        return $this;
    }

    /**
     * Use the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering relation GsPrijsTariefTabel object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery A secondary query class using the current class as primary query
     */
    public function useGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCoderingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering', '\PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery');
    }

    /**
     * Filter the query by a related GsPrijsTariefTabel object
     *
     * @param   GsPrijsTariefTabel|PropelObjectCollection $gsPrijsTariefTabel  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($gsPrijsTariefTabel, $comparison = null)
    {
        if ($gsPrijsTariefTabel instanceof GsPrijsTariefTabel) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsPrijsTariefTabel->getThesaurusverwijzingSrtTariefprijsbedrag(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsPrijsTariefTabel->getSoortTariefprijsbedrag(), $comparison);
        } else {
            throw new PropelException('filterByGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag() only accepts arguments of type GsPrijsTariefTabel');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag');

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
            $this->addJoinObject($join, 'GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag');
        }

        return $this;
    }

    /**
     * Use the GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag relation GsPrijsTariefTabel object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery A secondary query class using the current class as primary query
     */
    public function useGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag', '\PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery');
    }

    /**
     * Filter the query by a related GsPrijsTariefTabel object
     *
     * @param   GsPrijsTariefTabel|PropelObjectCollection $gsPrijsTariefTabel  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($gsPrijsTariefTabel, $comparison = null)
    {
        if ($gsPrijsTariefTabel instanceof GsPrijsTariefTabel) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsPrijsTariefTabel->getThesaurusverwijzingSoortBron(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsPrijsTariefTabel->getSoortBron(), $comparison);
        } else {
            throw new PropelException('filterByGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron() only accepts arguments of type GsPrijsTariefTabel');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron');

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
            $this->addJoinObject($join, 'GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron');
        }

        return $this;
    }

    /**
     * Use the GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron relation GsPrijsTariefTabel object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery A secondary query class using the current class as primary query
     */
    public function useGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBronQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron', '\PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery');
    }

    /**
     * Filter the query by a related GsRelatieOngewensteGroepensnk object
     *
     * @param   GsRelatieOngewensteGroepensnk|PropelObjectCollection $gsRelatieOngewensteGroepensnk  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsThesauriTotaalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsRelatieOngewensteGroepensnk($gsRelatieOngewensteGroepensnk, $comparison = null)
    {
        if ($gsRelatieOngewensteGroepensnk instanceof GsRelatieOngewensteGroepensnk) {
            return $this
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUSNUMMER, $gsRelatieOngewensteGroepensnk->getOngewensteGroepenThesaurus122(), $comparison)
                ->addUsingAlias(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $gsRelatieOngewensteGroepensnk->getOngewensteGroepsnummer(), $comparison);
        } else {
            throw new PropelException('filterByGsRelatieOngewensteGroepensnk() only accepts arguments of type GsRelatieOngewensteGroepensnk');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsRelatieOngewensteGroepensnk relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function joinGsRelatieOngewensteGroepensnk($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsRelatieOngewensteGroepensnk');

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
            $this->addJoinObject($join, 'GsRelatieOngewensteGroepensnk');
        }

        return $this;
    }

    /**
     * Use the GsRelatieOngewensteGroepensnk relation GsRelatieOngewensteGroepensnk object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkQuery A secondary query class using the current class as primary query
     */
    public function useGsRelatieOngewensteGroepensnkQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsRelatieOngewensteGroepensnk($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsRelatieOngewensteGroepensnk', '\PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal Object to remove from the list of results
     *
     * @return GsThesauriTotaalQuery The current query, for fluid interface
     */
    public function prune($gsThesauriTotaal = null)
    {
        if ($gsThesauriTotaal) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsThesauriTotaalPeer::THESAURUSNUMMER), $gsThesauriTotaal->getThesaurusnummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER), $gsThesauriTotaal->getThesaurusItemnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
