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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimenten;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibc;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorie;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtarief;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsArtikelenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsArtikelenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsArtikelenQuery orderByZinummer($order = Criteria::ASC) Order by the zinummer column
 * @method GsArtikelenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsArtikelenQuery orderByArtikelnaamnummer($order = Criteria::ASC) Order by the artikelnaamnummer column
 * @method GsArtikelenQuery orderByInkoophoeveelheid($order = Criteria::ASC) Order by the inkoophoeveelheid column
 * @method GsArtikelenQuery orderByAantalHoofdverpakkingen($order = Criteria::ASC) Order by the aantal_hoofdverpakkingen column
 * @method GsArtikelenQuery orderByHoofdverpakkingOmschrijvingThesnr($order = Criteria::ASC) Order by the hoofdverpakking_omschrijving_thesnr column
 * @method GsArtikelenQuery orderByHoofdverpakkingOmschrijvingKode($order = Criteria::ASC) Order by the hoofdverpakking_omschrijving_kode column
 * @method GsArtikelenQuery orderByAantalDeelverpakkingen($order = Criteria::ASC) Order by the aantal_deelverpakkingen column
 * @method GsArtikelenQuery orderByDeelverpakkingOmschrijvingThesnr($order = Criteria::ASC) Order by the deelverpakking_omschrijving_thesnr column
 * @method GsArtikelenQuery orderByDeelverpakkingOmschrijvingKode($order = Criteria::ASC) Order by the deelverpakking_omschrijving_kode column
 * @method GsArtikelenQuery orderByHoeveelheidPerDeelverpakking($order = Criteria::ASC) Order by the hoeveelheid_per_deelverpakking column
 * @method GsArtikelenQuery orderByUnKode($order = Criteria::ASC) Order by the un_kode column
 * @method GsArtikelenQuery orderByUnDatum($order = Criteria::ASC) Order by the un_datum column
 * @method GsArtikelenQuery orderByKodeWetOpDeGeneesmiddelen($order = Criteria::ASC) Order by the kode_wet_op_de_geneesmiddelen column
 * @method GsArtikelenQuery orderByKodeKoelkast($order = Criteria::ASC) Order by the kode_koelkast column
 * @method GsArtikelenQuery orderByKodeKliniekverpakking($order = Criteria::ASC) Order by the kode_kliniekverpakking column
 * @method GsArtikelenQuery orderByKodeVervaldatum($order = Criteria::ASC) Order by the kode_vervaldatum column
 * @method GsArtikelenQuery orderByKodeEasysteem($order = Criteria::ASC) Order by the kode_easysteem column
 * @method GsArtikelenQuery orderByRvgnummer1($order = Criteria::ASC) Order by the rvgnummer_1 column
 * @method GsArtikelenQuery orderByRvgnummer2($order = Criteria::ASC) Order by the rvgnummer_2 column
 * @method GsArtikelenQuery orderByRvgnummer3($order = Criteria::ASC) Order by the rvgnummer_3 column
 * @method GsArtikelenQuery orderByDatumInschrijvingRegistratie($order = Criteria::ASC) Order by the datum_inschrijving_registratie column
 * @method GsArtikelenQuery orderByAantalDddsPerVerpakking($order = Criteria::ASC) Order by the aantal_ddds_per_verpakking column
 * @method GsArtikelenQuery orderByFabrikantArtikelkodering($order = Criteria::ASC) Order by the fabrikant_artikelkodering column
 * @method GsArtikelenQuery orderByRegistratiehouderKode($order = Criteria::ASC) Order by the registratiehouder_kode column
 * @method GsArtikelenQuery orderByImporteurKode($order = Criteria::ASC) Order by the importeur_kode column
 * @method GsArtikelenQuery orderByLeverancierKode($order = Criteria::ASC) Order by the leverancier_kode column
 * @method GsArtikelenQuery orderByLandVanHerkomstThesaurusNummer($order = Criteria::ASC) Order by the land_van_herkomst_thesaurus_nummer column
 * @method GsArtikelenQuery orderByLandVanHerkomstKode($order = Criteria::ASC) Order by the land_van_herkomst_kode column
 * @method GsArtikelenQuery orderByDatumInvoerVerpakking($order = Criteria::ASC) Order by the datum_invoer_verpakking column
 * @method GsArtikelenQuery orderByDatumAfvoerVerpakking($order = Criteria::ASC) Order by the datum_afvoer_verpakking column
 * @method GsArtikelenQuery orderByProduktkoppelKode($order = Criteria::ASC) Order by the produktkoppel_kode column
 * @method GsArtikelenQuery orderByWtgkode($order = Criteria::ASC) Order by the wtgkode column
 * @method GsArtikelenQuery orderByBtwkodeVoorDeclaratie($order = Criteria::ASC) Order by the btwkode_voor_declaratie column
 * @method GsArtikelenQuery orderByKodeInkoopkanaal($order = Criteria::ASC) Order by the kode_inkoopkanaal column
 * @method GsArtikelenQuery orderByKodeReferentieproduktPerCluster($order = Criteria::ASC) Order by the kode_referentieprodukt_per_cluster column
 * @method GsArtikelenQuery orderByVerkoopprijsExclusiefBtw($order = Criteria::ASC) Order by the verkoopprijs_exclusief_btw column
 * @method GsArtikelenQuery orderByVergoedingsprijs($order = Criteria::ASC) Order by the vergoedingsprijs column
 * @method GsArtikelenQuery orderByReferentieprijs($order = Criteria::ASC) Order by the referentieprijs column
 * @method GsArtikelenQuery orderByDatumSchorsing($order = Criteria::ASC) Order by the datum_schorsing column
 * @method GsArtikelenQuery orderByDatumDoorhaling($order = Criteria::ASC) Order by the datum_doorhaling column
 * @method GsArtikelenQuery orderByMutatieDatum($order = Criteria::ASC) Order by the mutatie_datum column
 * @method GsArtikelenQuery orderByUitgavedatum($order = Criteria::ASC) Order by the uitgavedatum column
 * @method GsArtikelenQuery orderByGvsClusterKode($order = Criteria::ASC) Order by the gvs_cluster_kode column
 * @method GsArtikelenQuery orderByGvsVergoedingslimiet($order = Criteria::ASC) Order by the gvs_vergoedingslimiet column
 * @method GsArtikelenQuery orderByInkoopprijs($order = Criteria::ASC) Order by the inkoopprijs column
 * @method GsArtikelenQuery orderByEuropeesRegistratienummer($order = Criteria::ASC) Order by the europees_registratienummer column
 * @method GsArtikelenQuery orderByKortingspercentage($order = Criteria::ASC) Order by the kortingspercentage column
 * @method GsArtikelenQuery orderByMaximumprijsVws($order = Criteria::ASC) Order by the maximumprijs_vws column
 * @method GsArtikelenQuery orderByRegistratieNummer1($order = Criteria::ASC) Order by the registratie_nummer_1 column
 * @method GsArtikelenQuery orderByRegistratieNummer2($order = Criteria::ASC) Order by the registratie_nummer_2 column
 * @method GsArtikelenQuery orderByRegistratieNummer3($order = Criteria::ASC) Order by the registratie_nummer_3 column
 * @method GsArtikelenQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 *
 * @method GsArtikelenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsArtikelenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsArtikelenQuery groupByZinummer() Group by the zinummer column
 * @method GsArtikelenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsArtikelenQuery groupByArtikelnaamnummer() Group by the artikelnaamnummer column
 * @method GsArtikelenQuery groupByInkoophoeveelheid() Group by the inkoophoeveelheid column
 * @method GsArtikelenQuery groupByAantalHoofdverpakkingen() Group by the aantal_hoofdverpakkingen column
 * @method GsArtikelenQuery groupByHoofdverpakkingOmschrijvingThesnr() Group by the hoofdverpakking_omschrijving_thesnr column
 * @method GsArtikelenQuery groupByHoofdverpakkingOmschrijvingKode() Group by the hoofdverpakking_omschrijving_kode column
 * @method GsArtikelenQuery groupByAantalDeelverpakkingen() Group by the aantal_deelverpakkingen column
 * @method GsArtikelenQuery groupByDeelverpakkingOmschrijvingThesnr() Group by the deelverpakking_omschrijving_thesnr column
 * @method GsArtikelenQuery groupByDeelverpakkingOmschrijvingKode() Group by the deelverpakking_omschrijving_kode column
 * @method GsArtikelenQuery groupByHoeveelheidPerDeelverpakking() Group by the hoeveelheid_per_deelverpakking column
 * @method GsArtikelenQuery groupByUnKode() Group by the un_kode column
 * @method GsArtikelenQuery groupByUnDatum() Group by the un_datum column
 * @method GsArtikelenQuery groupByKodeWetOpDeGeneesmiddelen() Group by the kode_wet_op_de_geneesmiddelen column
 * @method GsArtikelenQuery groupByKodeKoelkast() Group by the kode_koelkast column
 * @method GsArtikelenQuery groupByKodeKliniekverpakking() Group by the kode_kliniekverpakking column
 * @method GsArtikelenQuery groupByKodeVervaldatum() Group by the kode_vervaldatum column
 * @method GsArtikelenQuery groupByKodeEasysteem() Group by the kode_easysteem column
 * @method GsArtikelenQuery groupByRvgnummer1() Group by the rvgnummer_1 column
 * @method GsArtikelenQuery groupByRvgnummer2() Group by the rvgnummer_2 column
 * @method GsArtikelenQuery groupByRvgnummer3() Group by the rvgnummer_3 column
 * @method GsArtikelenQuery groupByDatumInschrijvingRegistratie() Group by the datum_inschrijving_registratie column
 * @method GsArtikelenQuery groupByAantalDddsPerVerpakking() Group by the aantal_ddds_per_verpakking column
 * @method GsArtikelenQuery groupByFabrikantArtikelkodering() Group by the fabrikant_artikelkodering column
 * @method GsArtikelenQuery groupByRegistratiehouderKode() Group by the registratiehouder_kode column
 * @method GsArtikelenQuery groupByImporteurKode() Group by the importeur_kode column
 * @method GsArtikelenQuery groupByLeverancierKode() Group by the leverancier_kode column
 * @method GsArtikelenQuery groupByLandVanHerkomstThesaurusNummer() Group by the land_van_herkomst_thesaurus_nummer column
 * @method GsArtikelenQuery groupByLandVanHerkomstKode() Group by the land_van_herkomst_kode column
 * @method GsArtikelenQuery groupByDatumInvoerVerpakking() Group by the datum_invoer_verpakking column
 * @method GsArtikelenQuery groupByDatumAfvoerVerpakking() Group by the datum_afvoer_verpakking column
 * @method GsArtikelenQuery groupByProduktkoppelKode() Group by the produktkoppel_kode column
 * @method GsArtikelenQuery groupByWtgkode() Group by the wtgkode column
 * @method GsArtikelenQuery groupByBtwkodeVoorDeclaratie() Group by the btwkode_voor_declaratie column
 * @method GsArtikelenQuery groupByKodeInkoopkanaal() Group by the kode_inkoopkanaal column
 * @method GsArtikelenQuery groupByKodeReferentieproduktPerCluster() Group by the kode_referentieprodukt_per_cluster column
 * @method GsArtikelenQuery groupByVerkoopprijsExclusiefBtw() Group by the verkoopprijs_exclusief_btw column
 * @method GsArtikelenQuery groupByVergoedingsprijs() Group by the vergoedingsprijs column
 * @method GsArtikelenQuery groupByReferentieprijs() Group by the referentieprijs column
 * @method GsArtikelenQuery groupByDatumSchorsing() Group by the datum_schorsing column
 * @method GsArtikelenQuery groupByDatumDoorhaling() Group by the datum_doorhaling column
 * @method GsArtikelenQuery groupByMutatieDatum() Group by the mutatie_datum column
 * @method GsArtikelenQuery groupByUitgavedatum() Group by the uitgavedatum column
 * @method GsArtikelenQuery groupByGvsClusterKode() Group by the gvs_cluster_kode column
 * @method GsArtikelenQuery groupByGvsVergoedingslimiet() Group by the gvs_vergoedingslimiet column
 * @method GsArtikelenQuery groupByInkoopprijs() Group by the inkoopprijs column
 * @method GsArtikelenQuery groupByEuropeesRegistratienummer() Group by the europees_registratienummer column
 * @method GsArtikelenQuery groupByKortingspercentage() Group by the kortingspercentage column
 * @method GsArtikelenQuery groupByMaximumprijsVws() Group by the maximumprijs_vws column
 * @method GsArtikelenQuery groupByRegistratieNummer1() Group by the registratie_nummer_1 column
 * @method GsArtikelenQuery groupByRegistratieNummer2() Group by the registratie_nummer_2 column
 * @method GsArtikelenQuery groupByRegistratieNummer3() Group by the registratie_nummer_3 column
 * @method GsArtikelenQuery groupBySlug() Group by the slug column
 *
 * @method GsArtikelenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsArtikelenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsArtikelenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsArtikelenQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsArtikelenQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsArtikelenQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsArtikelenQuery leftJoinGsNamen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNamen relation
 * @method GsArtikelenQuery rightJoinGsNamen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNamen relation
 * @method GsArtikelenQuery innerJoinGsNamen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNamen relation
 *
 * @method GsArtikelenQuery leftJoinLeverancier($relationAlias = null) Adds a LEFT JOIN clause to the query using the Leverancier relation
 * @method GsArtikelenQuery rightJoinLeverancier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Leverancier relation
 * @method GsArtikelenQuery innerJoinLeverancier($relationAlias = null) Adds a INNER JOIN clause to the query using the Leverancier relation
 *
 * @method GsArtikelenQuery leftJoinImporteur($relationAlias = null) Adds a LEFT JOIN clause to the query using the Importeur relation
 * @method GsArtikelenQuery rightJoinImporteur($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Importeur relation
 * @method GsArtikelenQuery innerJoinImporteur($relationAlias = null) Adds a INNER JOIN clause to the query using the Importeur relation
 *
 * @method GsArtikelenQuery leftJoinRegistratiehouder($relationAlias = null) Adds a LEFT JOIN clause to the query using the Registratiehouder relation
 * @method GsArtikelenQuery rightJoinRegistratiehouder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Registratiehouder relation
 * @method GsArtikelenQuery innerJoinRegistratiehouder($relationAlias = null) Adds a INNER JOIN clause to the query using the Registratiehouder relation
 *
 * @method GsArtikelenQuery leftJoinLandOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the LandOmschrijving relation
 * @method GsArtikelenQuery rightJoinLandOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LandOmschrijving relation
 * @method GsArtikelenQuery innerJoinLandOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the LandOmschrijving relation
 *
 * @method GsArtikelenQuery leftJoinHoofdverpakkingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the HoofdverpakkingOmschrijving relation
 * @method GsArtikelenQuery rightJoinHoofdverpakkingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the HoofdverpakkingOmschrijving relation
 * @method GsArtikelenQuery innerJoinHoofdverpakkingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the HoofdverpakkingOmschrijving relation
 *
 * @method GsArtikelenQuery leftJoinDeelverpakkingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the DeelverpakkingOmschrijving relation
 * @method GsArtikelenQuery rightJoinDeelverpakkingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DeelverpakkingOmschrijving relation
 * @method GsArtikelenQuery innerJoinDeelverpakkingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the DeelverpakkingOmschrijving relation
 *
 * @method GsArtikelenQuery leftJoinLogistiekeInformatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the LogistiekeInformatie relation
 * @method GsArtikelenQuery rightJoinLogistiekeInformatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LogistiekeInformatie relation
 * @method GsArtikelenQuery innerJoinLogistiekeInformatie($relationAlias = null) Adds a INNER JOIN clause to the query using the LogistiekeInformatie relation
 *
 * @method GsArtikelenQuery leftJoinGsSupplementaireProductenHistorie($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsSupplementaireProductenHistorie relation
 * @method GsArtikelenQuery rightJoinGsSupplementaireProductenHistorie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsSupplementaireProductenHistorie relation
 * @method GsArtikelenQuery innerJoinGsSupplementaireProductenHistorie($relationAlias = null) Adds a INNER JOIN clause to the query using the GsSupplementaireProductenHistorie relation
 *
 * @method GsArtikelenQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsArtikelenQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsArtikelenQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsArtikelenQuery leftJoinGsRzvAanspraak($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsRzvAanspraak relation
 * @method GsArtikelenQuery rightJoinGsRzvAanspraak($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsRzvAanspraak relation
 * @method GsArtikelenQuery innerJoinGsRzvAanspraak($relationAlias = null) Adds a INNER JOIN clause to the query using the GsRzvAanspraak relation
 *
 * @method GsArtikelenQuery leftJoinGsLogistiekeVerpakkingsinformatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatie relation
 * @method GsArtikelenQuery rightJoinGsLogistiekeVerpakkingsinformatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLogistiekeVerpakkingsinformatie relation
 * @method GsArtikelenQuery innerJoinGsLogistiekeVerpakkingsinformatie($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLogistiekeVerpakkingsinformatie relation
 *
 * @method GsArtikelenQuery leftJoinGsSupplementaireProductenMetNzaMaximumtarief($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsSupplementaireProductenMetNzaMaximumtarief relation
 * @method GsArtikelenQuery rightJoinGsSupplementaireProductenMetNzaMaximumtarief($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsSupplementaireProductenMetNzaMaximumtarief relation
 * @method GsArtikelenQuery innerJoinGsSupplementaireProductenMetNzaMaximumtarief($relationAlias = null) Adds a INNER JOIN clause to the query using the GsSupplementaireProductenMetNzaMaximumtarief relation
 *
 * @method GsArtikelenQuery leftJoinGsIndicatiesBijSupplementaireProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsIndicatiesBijSupplementaireProducten relation
 * @method GsArtikelenQuery rightJoinGsIndicatiesBijSupplementaireProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsIndicatiesBijSupplementaireProducten relation
 * @method GsArtikelenQuery innerJoinGsIndicatiesBijSupplementaireProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsIndicatiesBijSupplementaireProducten relation
 *
 * @method GsArtikelenQuery leftJoinGsLeveranciersassortimenten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLeveranciersassortimenten relation
 * @method GsArtikelenQuery rightJoinGsLeveranciersassortimenten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLeveranciersassortimenten relation
 * @method GsArtikelenQuery innerJoinGsLeveranciersassortimenten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLeveranciersassortimenten relation
 *
 * @method GsArtikelenQuery leftJoinGsLogistiekeInformatieRelatedByZindexNummer($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsLogistiekeInformatieRelatedByZindexNummer relation
 * @method GsArtikelenQuery rightJoinGsLogistiekeInformatieRelatedByZindexNummer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsLogistiekeInformatieRelatedByZindexNummer relation
 * @method GsArtikelenQuery innerJoinGsLogistiekeInformatieRelatedByZindexNummer($relationAlias = null) Adds a INNER JOIN clause to the query using the GsLogistiekeInformatieRelatedByZindexNummer relation
 *
 * @method GsArtikelenQuery leftJoinGsPreferentieBeleid($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPreferentieBeleid relation
 * @method GsArtikelenQuery rightJoinGsPreferentieBeleid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPreferentieBeleid relation
 * @method GsArtikelenQuery innerJoinGsPreferentieBeleid($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPreferentieBeleid relation
 *
 * @method GsArtikelenQuery leftJoinGsRelatieTussenZinummerHibc($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsRelatieTussenZinummerHibc relation
 * @method GsArtikelenQuery rightJoinGsRelatieTussenZinummerHibc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsRelatieTussenZinummerHibc relation
 * @method GsArtikelenQuery innerJoinGsRelatieTussenZinummerHibc($relationAlias = null) Adds a INNER JOIN clause to the query using the GsRelatieTussenZinummerHibc relation
 *
 * @method GsArtikelen findOne(PropelPDO $con = null) Return the first GsArtikelen matching the query
 * @method GsArtikelen findOneOrCreate(PropelPDO $con = null) Return the first GsArtikelen matching the query, or a new GsArtikelen object populated from the query conditions when no match is found
 *
 * @method GsArtikelen findOneByBestandnummer(int $bestandnummer) Return the first GsArtikelen filtered by the bestandnummer column
 * @method GsArtikelen findOneByMutatiekode(int $mutatiekode) Return the first GsArtikelen filtered by the mutatiekode column
 * @method GsArtikelen findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsArtikelen filtered by the handelsproduktkode column
 * @method GsArtikelen findOneByArtikelnaamnummer(int $artikelnaamnummer) Return the first GsArtikelen filtered by the artikelnaamnummer column
 * @method GsArtikelen findOneByInkoophoeveelheid(string $inkoophoeveelheid) Return the first GsArtikelen filtered by the inkoophoeveelheid column
 * @method GsArtikelen findOneByAantalHoofdverpakkingen(int $aantal_hoofdverpakkingen) Return the first GsArtikelen filtered by the aantal_hoofdverpakkingen column
 * @method GsArtikelen findOneByHoofdverpakkingOmschrijvingThesnr(int $hoofdverpakking_omschrijving_thesnr) Return the first GsArtikelen filtered by the hoofdverpakking_omschrijving_thesnr column
 * @method GsArtikelen findOneByHoofdverpakkingOmschrijvingKode(int $hoofdverpakking_omschrijving_kode) Return the first GsArtikelen filtered by the hoofdverpakking_omschrijving_kode column
 * @method GsArtikelen findOneByAantalDeelverpakkingen(int $aantal_deelverpakkingen) Return the first GsArtikelen filtered by the aantal_deelverpakkingen column
 * @method GsArtikelen findOneByDeelverpakkingOmschrijvingThesnr(int $deelverpakking_omschrijving_thesnr) Return the first GsArtikelen filtered by the deelverpakking_omschrijving_thesnr column
 * @method GsArtikelen findOneByDeelverpakkingOmschrijvingKode(int $deelverpakking_omschrijving_kode) Return the first GsArtikelen filtered by the deelverpakking_omschrijving_kode column
 * @method GsArtikelen findOneByHoeveelheidPerDeelverpakking(string $hoeveelheid_per_deelverpakking) Return the first GsArtikelen filtered by the hoeveelheid_per_deelverpakking column
 * @method GsArtikelen findOneByUnKode(string $un_kode) Return the first GsArtikelen filtered by the un_kode column
 * @method GsArtikelen findOneByUnDatum(string $un_datum) Return the first GsArtikelen filtered by the un_datum column
 * @method GsArtikelen findOneByKodeWetOpDeGeneesmiddelen(string $kode_wet_op_de_geneesmiddelen) Return the first GsArtikelen filtered by the kode_wet_op_de_geneesmiddelen column
 * @method GsArtikelen findOneByKodeKoelkast(string $kode_koelkast) Return the first GsArtikelen filtered by the kode_koelkast column
 * @method GsArtikelen findOneByKodeKliniekverpakking(string $kode_kliniekverpakking) Return the first GsArtikelen filtered by the kode_kliniekverpakking column
 * @method GsArtikelen findOneByKodeVervaldatum(string $kode_vervaldatum) Return the first GsArtikelen filtered by the kode_vervaldatum column
 * @method GsArtikelen findOneByKodeEasysteem(string $kode_easysteem) Return the first GsArtikelen filtered by the kode_easysteem column
 * @method GsArtikelen findOneByRvgnummer1(int $rvgnummer_1) Return the first GsArtikelen filtered by the rvgnummer_1 column
 * @method GsArtikelen findOneByRvgnummer2(string $rvgnummer_2) Return the first GsArtikelen filtered by the rvgnummer_2 column
 * @method GsArtikelen findOneByRvgnummer3(int $rvgnummer_3) Return the first GsArtikelen filtered by the rvgnummer_3 column
 * @method GsArtikelen findOneByDatumInschrijvingRegistratie(string $datum_inschrijving_registratie) Return the first GsArtikelen filtered by the datum_inschrijving_registratie column
 * @method GsArtikelen findOneByAantalDddsPerVerpakking(string $aantal_ddds_per_verpakking) Return the first GsArtikelen filtered by the aantal_ddds_per_verpakking column
 * @method GsArtikelen findOneByFabrikantArtikelkodering(string $fabrikant_artikelkodering) Return the first GsArtikelen filtered by the fabrikant_artikelkodering column
 * @method GsArtikelen findOneByRegistratiehouderKode(int $registratiehouder_kode) Return the first GsArtikelen filtered by the registratiehouder_kode column
 * @method GsArtikelen findOneByImporteurKode(int $importeur_kode) Return the first GsArtikelen filtered by the importeur_kode column
 * @method GsArtikelen findOneByLeverancierKode(int $leverancier_kode) Return the first GsArtikelen filtered by the leverancier_kode column
 * @method GsArtikelen findOneByLandVanHerkomstThesaurusNummer(int $land_van_herkomst_thesaurus_nummer) Return the first GsArtikelen filtered by the land_van_herkomst_thesaurus_nummer column
 * @method GsArtikelen findOneByLandVanHerkomstKode(int $land_van_herkomst_kode) Return the first GsArtikelen filtered by the land_van_herkomst_kode column
 * @method GsArtikelen findOneByDatumInvoerVerpakking(string $datum_invoer_verpakking) Return the first GsArtikelen filtered by the datum_invoer_verpakking column
 * @method GsArtikelen findOneByDatumAfvoerVerpakking(string $datum_afvoer_verpakking) Return the first GsArtikelen filtered by the datum_afvoer_verpakking column
 * @method GsArtikelen findOneByProduktkoppelKode(int $produktkoppel_kode) Return the first GsArtikelen filtered by the produktkoppel_kode column
 * @method GsArtikelen findOneByWtgkode(int $wtgkode) Return the first GsArtikelen filtered by the wtgkode column
 * @method GsArtikelen findOneByBtwkodeVoorDeclaratie(int $btwkode_voor_declaratie) Return the first GsArtikelen filtered by the btwkode_voor_declaratie column
 * @method GsArtikelen findOneByKodeInkoopkanaal(int $kode_inkoopkanaal) Return the first GsArtikelen filtered by the kode_inkoopkanaal column
 * @method GsArtikelen findOneByKodeReferentieproduktPerCluster(int $kode_referentieprodukt_per_cluster) Return the first GsArtikelen filtered by the kode_referentieprodukt_per_cluster column
 * @method GsArtikelen findOneByVerkoopprijsExclusiefBtw(string $verkoopprijs_exclusief_btw) Return the first GsArtikelen filtered by the verkoopprijs_exclusief_btw column
 * @method GsArtikelen findOneByVergoedingsprijs(string $vergoedingsprijs) Return the first GsArtikelen filtered by the vergoedingsprijs column
 * @method GsArtikelen findOneByReferentieprijs(string $referentieprijs) Return the first GsArtikelen filtered by the referentieprijs column
 * @method GsArtikelen findOneByDatumSchorsing(string $datum_schorsing) Return the first GsArtikelen filtered by the datum_schorsing column
 * @method GsArtikelen findOneByDatumDoorhaling(string $datum_doorhaling) Return the first GsArtikelen filtered by the datum_doorhaling column
 * @method GsArtikelen findOneByMutatieDatum(string $mutatie_datum) Return the first GsArtikelen filtered by the mutatie_datum column
 * @method GsArtikelen findOneByUitgavedatum(string $uitgavedatum) Return the first GsArtikelen filtered by the uitgavedatum column
 * @method GsArtikelen findOneByGvsClusterKode(string $gvs_cluster_kode) Return the first GsArtikelen filtered by the gvs_cluster_kode column
 * @method GsArtikelen findOneByGvsVergoedingslimiet(string $gvs_vergoedingslimiet) Return the first GsArtikelen filtered by the gvs_vergoedingslimiet column
 * @method GsArtikelen findOneByInkoopprijs(string $inkoopprijs) Return the first GsArtikelen filtered by the inkoopprijs column
 * @method GsArtikelen findOneByEuropeesRegistratienummer(string $europees_registratienummer) Return the first GsArtikelen filtered by the europees_registratienummer column
 * @method GsArtikelen findOneByKortingspercentage(string $kortingspercentage) Return the first GsArtikelen filtered by the kortingspercentage column
 * @method GsArtikelen findOneByMaximumprijsVws(string $maximumprijs_vws) Return the first GsArtikelen filtered by the maximumprijs_vws column
 * @method GsArtikelen findOneByRegistratieNummer1(int $registratie_nummer_1) Return the first GsArtikelen filtered by the registratie_nummer_1 column
 * @method GsArtikelen findOneByRegistratieNummer2(string $registratie_nummer_2) Return the first GsArtikelen filtered by the registratie_nummer_2 column
 * @method GsArtikelen findOneByRegistratieNummer3(int $registratie_nummer_3) Return the first GsArtikelen filtered by the registratie_nummer_3 column
 * @method GsArtikelen findOneBySlug(string $slug) Return the first GsArtikelen filtered by the slug column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsArtikelen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsArtikelen objects filtered by the mutatiekode column
 * @method array findByZinummer(int $zinummer) Return GsArtikelen objects filtered by the zinummer column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsArtikelen objects filtered by the handelsproduktkode column
 * @method array findByArtikelnaamnummer(int $artikelnaamnummer) Return GsArtikelen objects filtered by the artikelnaamnummer column
 * @method array findByInkoophoeveelheid(string $inkoophoeveelheid) Return GsArtikelen objects filtered by the inkoophoeveelheid column
 * @method array findByAantalHoofdverpakkingen(int $aantal_hoofdverpakkingen) Return GsArtikelen objects filtered by the aantal_hoofdverpakkingen column
 * @method array findByHoofdverpakkingOmschrijvingThesnr(int $hoofdverpakking_omschrijving_thesnr) Return GsArtikelen objects filtered by the hoofdverpakking_omschrijving_thesnr column
 * @method array findByHoofdverpakkingOmschrijvingKode(int $hoofdverpakking_omschrijving_kode) Return GsArtikelen objects filtered by the hoofdverpakking_omschrijving_kode column
 * @method array findByAantalDeelverpakkingen(int $aantal_deelverpakkingen) Return GsArtikelen objects filtered by the aantal_deelverpakkingen column
 * @method array findByDeelverpakkingOmschrijvingThesnr(int $deelverpakking_omschrijving_thesnr) Return GsArtikelen objects filtered by the deelverpakking_omschrijving_thesnr column
 * @method array findByDeelverpakkingOmschrijvingKode(int $deelverpakking_omschrijving_kode) Return GsArtikelen objects filtered by the deelverpakking_omschrijving_kode column
 * @method array findByHoeveelheidPerDeelverpakking(string $hoeveelheid_per_deelverpakking) Return GsArtikelen objects filtered by the hoeveelheid_per_deelverpakking column
 * @method array findByUnKode(string $un_kode) Return GsArtikelen objects filtered by the un_kode column
 * @method array findByUnDatum(string $un_datum) Return GsArtikelen objects filtered by the un_datum column
 * @method array findByKodeWetOpDeGeneesmiddelen(string $kode_wet_op_de_geneesmiddelen) Return GsArtikelen objects filtered by the kode_wet_op_de_geneesmiddelen column
 * @method array findByKodeKoelkast(string $kode_koelkast) Return GsArtikelen objects filtered by the kode_koelkast column
 * @method array findByKodeKliniekverpakking(string $kode_kliniekverpakking) Return GsArtikelen objects filtered by the kode_kliniekverpakking column
 * @method array findByKodeVervaldatum(string $kode_vervaldatum) Return GsArtikelen objects filtered by the kode_vervaldatum column
 * @method array findByKodeEasysteem(string $kode_easysteem) Return GsArtikelen objects filtered by the kode_easysteem column
 * @method array findByRvgnummer1(int $rvgnummer_1) Return GsArtikelen objects filtered by the rvgnummer_1 column
 * @method array findByRvgnummer2(string $rvgnummer_2) Return GsArtikelen objects filtered by the rvgnummer_2 column
 * @method array findByRvgnummer3(int $rvgnummer_3) Return GsArtikelen objects filtered by the rvgnummer_3 column
 * @method array findByDatumInschrijvingRegistratie(string $datum_inschrijving_registratie) Return GsArtikelen objects filtered by the datum_inschrijving_registratie column
 * @method array findByAantalDddsPerVerpakking(string $aantal_ddds_per_verpakking) Return GsArtikelen objects filtered by the aantal_ddds_per_verpakking column
 * @method array findByFabrikantArtikelkodering(string $fabrikant_artikelkodering) Return GsArtikelen objects filtered by the fabrikant_artikelkodering column
 * @method array findByRegistratiehouderKode(int $registratiehouder_kode) Return GsArtikelen objects filtered by the registratiehouder_kode column
 * @method array findByImporteurKode(int $importeur_kode) Return GsArtikelen objects filtered by the importeur_kode column
 * @method array findByLeverancierKode(int $leverancier_kode) Return GsArtikelen objects filtered by the leverancier_kode column
 * @method array findByLandVanHerkomstThesaurusNummer(int $land_van_herkomst_thesaurus_nummer) Return GsArtikelen objects filtered by the land_van_herkomst_thesaurus_nummer column
 * @method array findByLandVanHerkomstKode(int $land_van_herkomst_kode) Return GsArtikelen objects filtered by the land_van_herkomst_kode column
 * @method array findByDatumInvoerVerpakking(string $datum_invoer_verpakking) Return GsArtikelen objects filtered by the datum_invoer_verpakking column
 * @method array findByDatumAfvoerVerpakking(string $datum_afvoer_verpakking) Return GsArtikelen objects filtered by the datum_afvoer_verpakking column
 * @method array findByProduktkoppelKode(int $produktkoppel_kode) Return GsArtikelen objects filtered by the produktkoppel_kode column
 * @method array findByWtgkode(int $wtgkode) Return GsArtikelen objects filtered by the wtgkode column
 * @method array findByBtwkodeVoorDeclaratie(int $btwkode_voor_declaratie) Return GsArtikelen objects filtered by the btwkode_voor_declaratie column
 * @method array findByKodeInkoopkanaal(int $kode_inkoopkanaal) Return GsArtikelen objects filtered by the kode_inkoopkanaal column
 * @method array findByKodeReferentieproduktPerCluster(int $kode_referentieprodukt_per_cluster) Return GsArtikelen objects filtered by the kode_referentieprodukt_per_cluster column
 * @method array findByVerkoopprijsExclusiefBtw(string $verkoopprijs_exclusief_btw) Return GsArtikelen objects filtered by the verkoopprijs_exclusief_btw column
 * @method array findByVergoedingsprijs(string $vergoedingsprijs) Return GsArtikelen objects filtered by the vergoedingsprijs column
 * @method array findByReferentieprijs(string $referentieprijs) Return GsArtikelen objects filtered by the referentieprijs column
 * @method array findByDatumSchorsing(string $datum_schorsing) Return GsArtikelen objects filtered by the datum_schorsing column
 * @method array findByDatumDoorhaling(string $datum_doorhaling) Return GsArtikelen objects filtered by the datum_doorhaling column
 * @method array findByMutatieDatum(string $mutatie_datum) Return GsArtikelen objects filtered by the mutatie_datum column
 * @method array findByUitgavedatum(string $uitgavedatum) Return GsArtikelen objects filtered by the uitgavedatum column
 * @method array findByGvsClusterKode(string $gvs_cluster_kode) Return GsArtikelen objects filtered by the gvs_cluster_kode column
 * @method array findByGvsVergoedingslimiet(string $gvs_vergoedingslimiet) Return GsArtikelen objects filtered by the gvs_vergoedingslimiet column
 * @method array findByInkoopprijs(string $inkoopprijs) Return GsArtikelen objects filtered by the inkoopprijs column
 * @method array findByEuropeesRegistratienummer(string $europees_registratienummer) Return GsArtikelen objects filtered by the europees_registratienummer column
 * @method array findByKortingspercentage(string $kortingspercentage) Return GsArtikelen objects filtered by the kortingspercentage column
 * @method array findByMaximumprijsVws(string $maximumprijs_vws) Return GsArtikelen objects filtered by the maximumprijs_vws column
 * @method array findByRegistratieNummer1(int $registratie_nummer_1) Return GsArtikelen objects filtered by the registratie_nummer_1 column
 * @method array findByRegistratieNummer2(string $registratie_nummer_2) Return GsArtikelen objects filtered by the registratie_nummer_2 column
 * @method array findByRegistratieNummer3(int $registratie_nummer_3) Return GsArtikelen objects filtered by the registratie_nummer_3 column
 * @method array findBySlug(string $slug) Return GsArtikelen objects filtered by the slug column
 */
abstract class BaseGsArtikelenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsArtikelenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsArtikelenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsArtikelenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsArtikelenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsArtikelenQuery) {
            return $criteria;
        }
        $query = new GsArtikelenQuery(null, null, $modelAlias);

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
     * @return   GsArtikelen|GsArtikelen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsArtikelenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsArtikelen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByZinummer($key, $con = null)
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
     * @return                 GsArtikelen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zinummer`, `handelsproduktkode`, `artikelnaamnummer`, `inkoophoeveelheid`, `aantal_hoofdverpakkingen`, `hoofdverpakking_omschrijving_thesnr`, `hoofdverpakking_omschrijving_kode`, `aantal_deelverpakkingen`, `deelverpakking_omschrijving_thesnr`, `deelverpakking_omschrijving_kode`, `hoeveelheid_per_deelverpakking`, `un_kode`, `un_datum`, `kode_wet_op_de_geneesmiddelen`, `kode_koelkast`, `kode_kliniekverpakking`, `kode_vervaldatum`, `kode_easysteem`, `rvgnummer_1`, `rvgnummer_2`, `rvgnummer_3`, `datum_inschrijving_registratie`, `aantal_ddds_per_verpakking`, `fabrikant_artikelkodering`, `registratiehouder_kode`, `importeur_kode`, `leverancier_kode`, `land_van_herkomst_thesaurus_nummer`, `land_van_herkomst_kode`, `datum_invoer_verpakking`, `datum_afvoer_verpakking`, `produktkoppel_kode`, `wtgkode`, `btwkode_voor_declaratie`, `kode_inkoopkanaal`, `kode_referentieprodukt_per_cluster`, `verkoopprijs_exclusief_btw`, `vergoedingsprijs`, `referentieprijs`, `datum_schorsing`, `datum_doorhaling`, `mutatie_datum`, `uitgavedatum`, `gvs_cluster_kode`, `gvs_vergoedingslimiet`, `inkoopprijs`, `europees_registratienummer`, `kortingspercentage`, `maximumprijs_vws`, `registratie_nummer_1`, `registratie_nummer_2`, `registratie_nummer_3`, `slug` FROM `gs_artikelen` WHERE `zinummer` = :p0';
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
            $obj = new GsArtikelen();
            $obj->hydrate($row);
            GsArtikelenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsArtikelen|GsArtikelen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsArtikelen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsArtikelenPeer::ZINUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsArtikelenPeer::ZINUMMER, $keys, Criteria::IN);
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
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zinummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZinummer(1234); // WHERE zinummer = 1234
     * $query->filterByZinummer(array(12, 34)); // WHERE zinummer IN (12, 34)
     * $query->filterByZinummer(array('min' => 12)); // WHERE zinummer >= 12
     * $query->filterByZinummer(array('max' => 12)); // WHERE zinummer <= 12
     * </code>
     *
     * @see       filterByLogistiekeInformatie()
     *
     * @param     mixed $zinummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByZinummer($zinummer = null, $comparison = null)
    {
        if (is_array($zinummer)) {
            $useMinMax = false;
            if (isset($zinummer['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::ZINUMMER, $zinummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zinummer['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::ZINUMMER, $zinummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::ZINUMMER, $zinummer, $comparison);
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
     * @see       filterByGsHandelsproducten()
     *
     * @param     mixed $handelsproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the artikelnaamnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelnaamnummer(1234); // WHERE artikelnaamnummer = 1234
     * $query->filterByArtikelnaamnummer(array(12, 34)); // WHERE artikelnaamnummer IN (12, 34)
     * $query->filterByArtikelnaamnummer(array('min' => 12)); // WHERE artikelnaamnummer >= 12
     * $query->filterByArtikelnaamnummer(array('max' => 12)); // WHERE artikelnaamnummer <= 12
     * </code>
     *
     * @see       filterByGsNamen()
     *
     * @param     mixed $artikelnaamnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByArtikelnaamnummer($artikelnaamnummer = null, $comparison = null)
    {
        if (is_array($artikelnaamnummer)) {
            $useMinMax = false;
            if (isset($artikelnaamnummer['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::ARTIKELNAAMNUMMER, $artikelnaamnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artikelnaamnummer['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::ARTIKELNAAMNUMMER, $artikelnaamnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::ARTIKELNAAMNUMMER, $artikelnaamnummer, $comparison);
    }

    /**
     * Filter the query on the inkoophoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByInkoophoeveelheid(1234); // WHERE inkoophoeveelheid = 1234
     * $query->filterByInkoophoeveelheid(array(12, 34)); // WHERE inkoophoeveelheid IN (12, 34)
     * $query->filterByInkoophoeveelheid(array('min' => 12)); // WHERE inkoophoeveelheid >= 12
     * $query->filterByInkoophoeveelheid(array('max' => 12)); // WHERE inkoophoeveelheid <= 12
     * </code>
     *
     * @param     mixed $inkoophoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByInkoophoeveelheid($inkoophoeveelheid = null, $comparison = null)
    {
        if (is_array($inkoophoeveelheid)) {
            $useMinMax = false;
            if (isset($inkoophoeveelheid['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::INKOOPHOEVEELHEID, $inkoophoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inkoophoeveelheid['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::INKOOPHOEVEELHEID, $inkoophoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::INKOOPHOEVEELHEID, $inkoophoeveelheid, $comparison);
    }

    /**
     * Filter the query on the aantal_hoofdverpakkingen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalHoofdverpakkingen(1234); // WHERE aantal_hoofdverpakkingen = 1234
     * $query->filterByAantalHoofdverpakkingen(array(12, 34)); // WHERE aantal_hoofdverpakkingen IN (12, 34)
     * $query->filterByAantalHoofdverpakkingen(array('min' => 12)); // WHERE aantal_hoofdverpakkingen >= 12
     * $query->filterByAantalHoofdverpakkingen(array('max' => 12)); // WHERE aantal_hoofdverpakkingen <= 12
     * </code>
     *
     * @param     mixed $aantalHoofdverpakkingen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByAantalHoofdverpakkingen($aantalHoofdverpakkingen = null, $comparison = null)
    {
        if (is_array($aantalHoofdverpakkingen)) {
            $useMinMax = false;
            if (isset($aantalHoofdverpakkingen['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN, $aantalHoofdverpakkingen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalHoofdverpakkingen['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN, $aantalHoofdverpakkingen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN, $aantalHoofdverpakkingen, $comparison);
    }

    /**
     * Filter the query on the hoofdverpakking_omschrijving_thesnr column
     *
     * Example usage:
     * <code>
     * $query->filterByHoofdverpakkingOmschrijvingThesnr(1234); // WHERE hoofdverpakking_omschrijving_thesnr = 1234
     * $query->filterByHoofdverpakkingOmschrijvingThesnr(array(12, 34)); // WHERE hoofdverpakking_omschrijving_thesnr IN (12, 34)
     * $query->filterByHoofdverpakkingOmschrijvingThesnr(array('min' => 12)); // WHERE hoofdverpakking_omschrijving_thesnr >= 12
     * $query->filterByHoofdverpakkingOmschrijvingThesnr(array('max' => 12)); // WHERE hoofdverpakking_omschrijving_thesnr <= 12
     * </code>
     *
     * @see       filterByHoofdverpakkingOmschrijving()
     *
     * @param     mixed $hoofdverpakkingOmschrijvingThesnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByHoofdverpakkingOmschrijvingThesnr($hoofdverpakkingOmschrijvingThesnr = null, $comparison = null)
    {
        if (is_array($hoofdverpakkingOmschrijvingThesnr)) {
            $useMinMax = false;
            if (isset($hoofdverpakkingOmschrijvingThesnr['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, $hoofdverpakkingOmschrijvingThesnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoofdverpakkingOmschrijvingThesnr['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, $hoofdverpakkingOmschrijvingThesnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, $hoofdverpakkingOmschrijvingThesnr, $comparison);
    }

    /**
     * Filter the query on the hoofdverpakking_omschrijving_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByHoofdverpakkingOmschrijvingKode(1234); // WHERE hoofdverpakking_omschrijving_kode = 1234
     * $query->filterByHoofdverpakkingOmschrijvingKode(array(12, 34)); // WHERE hoofdverpakking_omschrijving_kode IN (12, 34)
     * $query->filterByHoofdverpakkingOmschrijvingKode(array('min' => 12)); // WHERE hoofdverpakking_omschrijving_kode >= 12
     * $query->filterByHoofdverpakkingOmschrijvingKode(array('max' => 12)); // WHERE hoofdverpakking_omschrijving_kode <= 12
     * </code>
     *
     * @see       filterByHoofdverpakkingOmschrijving()
     *
     * @param     mixed $hoofdverpakkingOmschrijvingKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByHoofdverpakkingOmschrijvingKode($hoofdverpakkingOmschrijvingKode = null, $comparison = null)
    {
        if (is_array($hoofdverpakkingOmschrijvingKode)) {
            $useMinMax = false;
            if (isset($hoofdverpakkingOmschrijvingKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $hoofdverpakkingOmschrijvingKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoofdverpakkingOmschrijvingKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $hoofdverpakkingOmschrijvingKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $hoofdverpakkingOmschrijvingKode, $comparison);
    }

    /**
     * Filter the query on the aantal_deelverpakkingen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDeelverpakkingen(1234); // WHERE aantal_deelverpakkingen = 1234
     * $query->filterByAantalDeelverpakkingen(array(12, 34)); // WHERE aantal_deelverpakkingen IN (12, 34)
     * $query->filterByAantalDeelverpakkingen(array('min' => 12)); // WHERE aantal_deelverpakkingen >= 12
     * $query->filterByAantalDeelverpakkingen(array('max' => 12)); // WHERE aantal_deelverpakkingen <= 12
     * </code>
     *
     * @param     mixed $aantalDeelverpakkingen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByAantalDeelverpakkingen($aantalDeelverpakkingen = null, $comparison = null)
    {
        if (is_array($aantalDeelverpakkingen)) {
            $useMinMax = false;
            if (isset($aantalDeelverpakkingen['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN, $aantalDeelverpakkingen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDeelverpakkingen['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN, $aantalDeelverpakkingen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN, $aantalDeelverpakkingen, $comparison);
    }

    /**
     * Filter the query on the deelverpakking_omschrijving_thesnr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeelverpakkingOmschrijvingThesnr(1234); // WHERE deelverpakking_omschrijving_thesnr = 1234
     * $query->filterByDeelverpakkingOmschrijvingThesnr(array(12, 34)); // WHERE deelverpakking_omschrijving_thesnr IN (12, 34)
     * $query->filterByDeelverpakkingOmschrijvingThesnr(array('min' => 12)); // WHERE deelverpakking_omschrijving_thesnr >= 12
     * $query->filterByDeelverpakkingOmschrijvingThesnr(array('max' => 12)); // WHERE deelverpakking_omschrijving_thesnr <= 12
     * </code>
     *
     * @see       filterByDeelverpakkingOmschrijving()
     *
     * @param     mixed $deelverpakkingOmschrijvingThesnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDeelverpakkingOmschrijvingThesnr($deelverpakkingOmschrijvingThesnr = null, $comparison = null)
    {
        if (is_array($deelverpakkingOmschrijvingThesnr)) {
            $useMinMax = false;
            if (isset($deelverpakkingOmschrijvingThesnr['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, $deelverpakkingOmschrijvingThesnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deelverpakkingOmschrijvingThesnr['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, $deelverpakkingOmschrijvingThesnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, $deelverpakkingOmschrijvingThesnr, $comparison);
    }

    /**
     * Filter the query on the deelverpakking_omschrijving_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByDeelverpakkingOmschrijvingKode(1234); // WHERE deelverpakking_omschrijving_kode = 1234
     * $query->filterByDeelverpakkingOmschrijvingKode(array(12, 34)); // WHERE deelverpakking_omschrijving_kode IN (12, 34)
     * $query->filterByDeelverpakkingOmschrijvingKode(array('min' => 12)); // WHERE deelverpakking_omschrijving_kode >= 12
     * $query->filterByDeelverpakkingOmschrijvingKode(array('max' => 12)); // WHERE deelverpakking_omschrijving_kode <= 12
     * </code>
     *
     * @see       filterByDeelverpakkingOmschrijving()
     *
     * @param     mixed $deelverpakkingOmschrijvingKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDeelverpakkingOmschrijvingKode($deelverpakkingOmschrijvingKode = null, $comparison = null)
    {
        if (is_array($deelverpakkingOmschrijvingKode)) {
            $useMinMax = false;
            if (isset($deelverpakkingOmschrijvingKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $deelverpakkingOmschrijvingKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deelverpakkingOmschrijvingKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $deelverpakkingOmschrijvingKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $deelverpakkingOmschrijvingKode, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_per_deelverpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidPerDeelverpakking(1234); // WHERE hoeveelheid_per_deelverpakking = 1234
     * $query->filterByHoeveelheidPerDeelverpakking(array(12, 34)); // WHERE hoeveelheid_per_deelverpakking IN (12, 34)
     * $query->filterByHoeveelheidPerDeelverpakking(array('min' => 12)); // WHERE hoeveelheid_per_deelverpakking >= 12
     * $query->filterByHoeveelheidPerDeelverpakking(array('max' => 12)); // WHERE hoeveelheid_per_deelverpakking <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidPerDeelverpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidPerDeelverpakking($hoeveelheidPerDeelverpakking = null, $comparison = null)
    {
        if (is_array($hoeveelheidPerDeelverpakking)) {
            $useMinMax = false;
            if (isset($hoeveelheidPerDeelverpakking['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING, $hoeveelheidPerDeelverpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidPerDeelverpakking['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING, $hoeveelheidPerDeelverpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING, $hoeveelheidPerDeelverpakking, $comparison);
    }

    /**
     * Filter the query on the un_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByUnKode('fooValue');   // WHERE un_kode = 'fooValue'
     * $query->filterByUnKode('%fooValue%'); // WHERE un_kode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unKode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByUnKode($unKode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unKode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unKode)) {
                $unKode = str_replace('*', '%', $unKode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::UN_KODE, $unKode, $comparison);
    }

    /**
     * Filter the query on the un_datum column
     *
     * Example usage:
     * <code>
     * $query->filterByUnDatum('2011-03-14'); // WHERE un_datum = '2011-03-14'
     * $query->filterByUnDatum('now'); // WHERE un_datum = '2011-03-14'
     * $query->filterByUnDatum(array('max' => 'yesterday')); // WHERE un_datum < '2011-03-13'
     * </code>
     *
     * @param     mixed $unDatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByUnDatum($unDatum = null, $comparison = null)
    {
        if (is_array($unDatum)) {
            $useMinMax = false;
            if (isset($unDatum['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::UN_DATUM, $unDatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unDatum['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::UN_DATUM, $unDatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::UN_DATUM, $unDatum, $comparison);
    }

    /**
     * Filter the query on the kode_wet_op_de_geneesmiddelen column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeWetOpDeGeneesmiddelen('fooValue');   // WHERE kode_wet_op_de_geneesmiddelen = 'fooValue'
     * $query->filterByKodeWetOpDeGeneesmiddelen('%fooValue%'); // WHERE kode_wet_op_de_geneesmiddelen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeWetOpDeGeneesmiddelen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeWetOpDeGeneesmiddelen($kodeWetOpDeGeneesmiddelen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeWetOpDeGeneesmiddelen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeWetOpDeGeneesmiddelen)) {
                $kodeWetOpDeGeneesmiddelen = str_replace('*', '%', $kodeWetOpDeGeneesmiddelen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN, $kodeWetOpDeGeneesmiddelen, $comparison);
    }

    /**
     * Filter the query on the kode_koelkast column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeKoelkast('fooValue');   // WHERE kode_koelkast = 'fooValue'
     * $query->filterByKodeKoelkast('%fooValue%'); // WHERE kode_koelkast LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeKoelkast The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeKoelkast($kodeKoelkast = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeKoelkast)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeKoelkast)) {
                $kodeKoelkast = str_replace('*', '%', $kodeKoelkast);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_KOELKAST, $kodeKoelkast, $comparison);
    }

    /**
     * Filter the query on the kode_kliniekverpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeKliniekverpakking('fooValue');   // WHERE kode_kliniekverpakking = 'fooValue'
     * $query->filterByKodeKliniekverpakking('%fooValue%'); // WHERE kode_kliniekverpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeKliniekverpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeKliniekverpakking($kodeKliniekverpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeKliniekverpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeKliniekverpakking)) {
                $kodeKliniekverpakking = str_replace('*', '%', $kodeKliniekverpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_KLINIEKVERPAKKING, $kodeKliniekverpakking, $comparison);
    }

    /**
     * Filter the query on the kode_vervaldatum column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeVervaldatum('fooValue');   // WHERE kode_vervaldatum = 'fooValue'
     * $query->filterByKodeVervaldatum('%fooValue%'); // WHERE kode_vervaldatum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeVervaldatum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeVervaldatum($kodeVervaldatum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeVervaldatum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeVervaldatum)) {
                $kodeVervaldatum = str_replace('*', '%', $kodeVervaldatum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_VERVALDATUM, $kodeVervaldatum, $comparison);
    }

    /**
     * Filter the query on the kode_easysteem column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeEasysteem('fooValue');   // WHERE kode_easysteem = 'fooValue'
     * $query->filterByKodeEasysteem('%fooValue%'); // WHERE kode_easysteem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeEasysteem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeEasysteem($kodeEasysteem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeEasysteem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeEasysteem)) {
                $kodeEasysteem = str_replace('*', '%', $kodeEasysteem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_EASYSTEEM, $kodeEasysteem, $comparison);
    }

    /**
     * Filter the query on the rvgnummer_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRvgnummer1(1234); // WHERE rvgnummer_1 = 1234
     * $query->filterByRvgnummer1(array(12, 34)); // WHERE rvgnummer_1 IN (12, 34)
     * $query->filterByRvgnummer1(array('min' => 12)); // WHERE rvgnummer_1 >= 12
     * $query->filterByRvgnummer1(array('max' => 12)); // WHERE rvgnummer_1 <= 12
     * </code>
     *
     * @param     mixed $rvgnummer1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRvgnummer1($rvgnummer1 = null, $comparison = null)
    {
        if (is_array($rvgnummer1)) {
            $useMinMax = false;
            if (isset($rvgnummer1['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_1, $rvgnummer1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rvgnummer1['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_1, $rvgnummer1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_1, $rvgnummer1, $comparison);
    }

    /**
     * Filter the query on the rvgnummer_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRvgnummer2('fooValue');   // WHERE rvgnummer_2 = 'fooValue'
     * $query->filterByRvgnummer2('%fooValue%'); // WHERE rvgnummer_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rvgnummer2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRvgnummer2($rvgnummer2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rvgnummer2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rvgnummer2)) {
                $rvgnummer2 = str_replace('*', '%', $rvgnummer2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_2, $rvgnummer2, $comparison);
    }

    /**
     * Filter the query on the rvgnummer_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRvgnummer3(1234); // WHERE rvgnummer_3 = 1234
     * $query->filterByRvgnummer3(array(12, 34)); // WHERE rvgnummer_3 IN (12, 34)
     * $query->filterByRvgnummer3(array('min' => 12)); // WHERE rvgnummer_3 >= 12
     * $query->filterByRvgnummer3(array('max' => 12)); // WHERE rvgnummer_3 <= 12
     * </code>
     *
     * @param     mixed $rvgnummer3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRvgnummer3($rvgnummer3 = null, $comparison = null)
    {
        if (is_array($rvgnummer3)) {
            $useMinMax = false;
            if (isset($rvgnummer3['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_3, $rvgnummer3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rvgnummer3['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_3, $rvgnummer3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::RVGNUMMER_3, $rvgnummer3, $comparison);
    }

    /**
     * Filter the query on the datum_inschrijving_registratie column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumInschrijvingRegistratie('2011-03-14'); // WHERE datum_inschrijving_registratie = '2011-03-14'
     * $query->filterByDatumInschrijvingRegistratie('now'); // WHERE datum_inschrijving_registratie = '2011-03-14'
     * $query->filterByDatumInschrijvingRegistratie(array('max' => 'yesterday')); // WHERE datum_inschrijving_registratie < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumInschrijvingRegistratie The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDatumInschrijvingRegistratie($datumInschrijvingRegistratie = null, $comparison = null)
    {
        if (is_array($datumInschrijvingRegistratie)) {
            $useMinMax = false;
            if (isset($datumInschrijvingRegistratie['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE, $datumInschrijvingRegistratie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumInschrijvingRegistratie['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE, $datumInschrijvingRegistratie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE, $datumInschrijvingRegistratie, $comparison);
    }

    /**
     * Filter the query on the aantal_ddds_per_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDddsPerVerpakking(1234); // WHERE aantal_ddds_per_verpakking = 1234
     * $query->filterByAantalDddsPerVerpakking(array(12, 34)); // WHERE aantal_ddds_per_verpakking IN (12, 34)
     * $query->filterByAantalDddsPerVerpakking(array('min' => 12)); // WHERE aantal_ddds_per_verpakking >= 12
     * $query->filterByAantalDddsPerVerpakking(array('max' => 12)); // WHERE aantal_ddds_per_verpakking <= 12
     * </code>
     *
     * @param     mixed $aantalDddsPerVerpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByAantalDddsPerVerpakking($aantalDddsPerVerpakking = null, $comparison = null)
    {
        if (is_array($aantalDddsPerVerpakking)) {
            $useMinMax = false;
            if (isset($aantalDddsPerVerpakking['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING, $aantalDddsPerVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDddsPerVerpakking['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING, $aantalDddsPerVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING, $aantalDddsPerVerpakking, $comparison);
    }

    /**
     * Filter the query on the fabrikant_artikelkodering column
     *
     * Example usage:
     * <code>
     * $query->filterByFabrikantArtikelkodering('fooValue');   // WHERE fabrikant_artikelkodering = 'fooValue'
     * $query->filterByFabrikantArtikelkodering('%fooValue%'); // WHERE fabrikant_artikelkodering LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fabrikantArtikelkodering The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByFabrikantArtikelkodering($fabrikantArtikelkodering = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fabrikantArtikelkodering)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fabrikantArtikelkodering)) {
                $fabrikantArtikelkodering = str_replace('*', '%', $fabrikantArtikelkodering);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::FABRIKANT_ARTIKELKODERING, $fabrikantArtikelkodering, $comparison);
    }

    /**
     * Filter the query on the registratiehouder_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistratiehouderKode(1234); // WHERE registratiehouder_kode = 1234
     * $query->filterByRegistratiehouderKode(array(12, 34)); // WHERE registratiehouder_kode IN (12, 34)
     * $query->filterByRegistratiehouderKode(array('min' => 12)); // WHERE registratiehouder_kode >= 12
     * $query->filterByRegistratiehouderKode(array('max' => 12)); // WHERE registratiehouder_kode <= 12
     * </code>
     *
     * @see       filterByRegistratiehouder()
     *
     * @param     mixed $registratiehouderKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRegistratiehouderKode($registratiehouderKode = null, $comparison = null)
    {
        if (is_array($registratiehouderKode)) {
            $useMinMax = false;
            if (isset($registratiehouderKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, $registratiehouderKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($registratiehouderKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, $registratiehouderKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, $registratiehouderKode, $comparison);
    }

    /**
     * Filter the query on the importeur_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByImporteurKode(1234); // WHERE importeur_kode = 1234
     * $query->filterByImporteurKode(array(12, 34)); // WHERE importeur_kode IN (12, 34)
     * $query->filterByImporteurKode(array('min' => 12)); // WHERE importeur_kode >= 12
     * $query->filterByImporteurKode(array('max' => 12)); // WHERE importeur_kode <= 12
     * </code>
     *
     * @see       filterByImporteur()
     *
     * @param     mixed $importeurKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByImporteurKode($importeurKode = null, $comparison = null)
    {
        if (is_array($importeurKode)) {
            $useMinMax = false;
            if (isset($importeurKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::IMPORTEUR_KODE, $importeurKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($importeurKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::IMPORTEUR_KODE, $importeurKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::IMPORTEUR_KODE, $importeurKode, $comparison);
    }

    /**
     * Filter the query on the leverancier_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByLeverancierKode(1234); // WHERE leverancier_kode = 1234
     * $query->filterByLeverancierKode(array(12, 34)); // WHERE leverancier_kode IN (12, 34)
     * $query->filterByLeverancierKode(array('min' => 12)); // WHERE leverancier_kode >= 12
     * $query->filterByLeverancierKode(array('max' => 12)); // WHERE leverancier_kode <= 12
     * </code>
     *
     * @see       filterByLeverancier()
     *
     * @param     mixed $leverancierKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByLeverancierKode($leverancierKode = null, $comparison = null)
    {
        if (is_array($leverancierKode)) {
            $useMinMax = false;
            if (isset($leverancierKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::LEVERANCIER_KODE, $leverancierKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leverancierKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::LEVERANCIER_KODE, $leverancierKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::LEVERANCIER_KODE, $leverancierKode, $comparison);
    }

    /**
     * Filter the query on the land_van_herkomst_thesaurus_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByLandVanHerkomstThesaurusNummer(1234); // WHERE land_van_herkomst_thesaurus_nummer = 1234
     * $query->filterByLandVanHerkomstThesaurusNummer(array(12, 34)); // WHERE land_van_herkomst_thesaurus_nummer IN (12, 34)
     * $query->filterByLandVanHerkomstThesaurusNummer(array('min' => 12)); // WHERE land_van_herkomst_thesaurus_nummer >= 12
     * $query->filterByLandVanHerkomstThesaurusNummer(array('max' => 12)); // WHERE land_van_herkomst_thesaurus_nummer <= 12
     * </code>
     *
     * @see       filterByLandOmschrijving()
     *
     * @param     mixed $landVanHerkomstThesaurusNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByLandVanHerkomstThesaurusNummer($landVanHerkomstThesaurusNummer = null, $comparison = null)
    {
        if (is_array($landVanHerkomstThesaurusNummer)) {
            $useMinMax = false;
            if (isset($landVanHerkomstThesaurusNummer['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, $landVanHerkomstThesaurusNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($landVanHerkomstThesaurusNummer['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, $landVanHerkomstThesaurusNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, $landVanHerkomstThesaurusNummer, $comparison);
    }

    /**
     * Filter the query on the land_van_herkomst_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByLandVanHerkomstKode(1234); // WHERE land_van_herkomst_kode = 1234
     * $query->filterByLandVanHerkomstKode(array(12, 34)); // WHERE land_van_herkomst_kode IN (12, 34)
     * $query->filterByLandVanHerkomstKode(array('min' => 12)); // WHERE land_van_herkomst_kode >= 12
     * $query->filterByLandVanHerkomstKode(array('max' => 12)); // WHERE land_van_herkomst_kode <= 12
     * </code>
     *
     * @see       filterByLandOmschrijving()
     *
     * @param     mixed $landVanHerkomstKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByLandVanHerkomstKode($landVanHerkomstKode = null, $comparison = null)
    {
        if (is_array($landVanHerkomstKode)) {
            $useMinMax = false;
            if (isset($landVanHerkomstKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, $landVanHerkomstKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($landVanHerkomstKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, $landVanHerkomstKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, $landVanHerkomstKode, $comparison);
    }

    /**
     * Filter the query on the datum_invoer_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumInvoerVerpakking('2011-03-14'); // WHERE datum_invoer_verpakking = '2011-03-14'
     * $query->filterByDatumInvoerVerpakking('now'); // WHERE datum_invoer_verpakking = '2011-03-14'
     * $query->filterByDatumInvoerVerpakking(array('max' => 'yesterday')); // WHERE datum_invoer_verpakking < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumInvoerVerpakking The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDatumInvoerVerpakking($datumInvoerVerpakking = null, $comparison = null)
    {
        if (is_array($datumInvoerVerpakking)) {
            $useMinMax = false;
            if (isset($datumInvoerVerpakking['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_INVOER_VERPAKKING, $datumInvoerVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumInvoerVerpakking['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_INVOER_VERPAKKING, $datumInvoerVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DATUM_INVOER_VERPAKKING, $datumInvoerVerpakking, $comparison);
    }

    /**
     * Filter the query on the datum_afvoer_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumAfvoerVerpakking('2011-03-14'); // WHERE datum_afvoer_verpakking = '2011-03-14'
     * $query->filterByDatumAfvoerVerpakking('now'); // WHERE datum_afvoer_verpakking = '2011-03-14'
     * $query->filterByDatumAfvoerVerpakking(array('max' => 'yesterday')); // WHERE datum_afvoer_verpakking < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumAfvoerVerpakking The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDatumAfvoerVerpakking($datumAfvoerVerpakking = null, $comparison = null)
    {
        if (is_array($datumAfvoerVerpakking)) {
            $useMinMax = false;
            if (isset($datumAfvoerVerpakking['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING, $datumAfvoerVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumAfvoerVerpakking['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING, $datumAfvoerVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING, $datumAfvoerVerpakking, $comparison);
    }

    /**
     * Filter the query on the produktkoppel_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByProduktkoppelKode(1234); // WHERE produktkoppel_kode = 1234
     * $query->filterByProduktkoppelKode(array(12, 34)); // WHERE produktkoppel_kode IN (12, 34)
     * $query->filterByProduktkoppelKode(array('min' => 12)); // WHERE produktkoppel_kode >= 12
     * $query->filterByProduktkoppelKode(array('max' => 12)); // WHERE produktkoppel_kode <= 12
     * </code>
     *
     * @param     mixed $produktkoppelKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByProduktkoppelKode($produktkoppelKode = null, $comparison = null)
    {
        if (is_array($produktkoppelKode)) {
            $useMinMax = false;
            if (isset($produktkoppelKode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::PRODUKTKOPPEL_KODE, $produktkoppelKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($produktkoppelKode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::PRODUKTKOPPEL_KODE, $produktkoppelKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::PRODUKTKOPPEL_KODE, $produktkoppelKode, $comparison);
    }

    /**
     * Filter the query on the wtgkode column
     *
     * Example usage:
     * <code>
     * $query->filterByWtgkode(1234); // WHERE wtgkode = 1234
     * $query->filterByWtgkode(array(12, 34)); // WHERE wtgkode IN (12, 34)
     * $query->filterByWtgkode(array('min' => 12)); // WHERE wtgkode >= 12
     * $query->filterByWtgkode(array('max' => 12)); // WHERE wtgkode <= 12
     * </code>
     *
     * @param     mixed $wtgkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByWtgkode($wtgkode = null, $comparison = null)
    {
        if (is_array($wtgkode)) {
            $useMinMax = false;
            if (isset($wtgkode['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::WTGKODE, $wtgkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wtgkode['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::WTGKODE, $wtgkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::WTGKODE, $wtgkode, $comparison);
    }

    /**
     * Filter the query on the btwkode_voor_declaratie column
     *
     * Example usage:
     * <code>
     * $query->filterByBtwkodeVoorDeclaratie(1234); // WHERE btwkode_voor_declaratie = 1234
     * $query->filterByBtwkodeVoorDeclaratie(array(12, 34)); // WHERE btwkode_voor_declaratie IN (12, 34)
     * $query->filterByBtwkodeVoorDeclaratie(array('min' => 12)); // WHERE btwkode_voor_declaratie >= 12
     * $query->filterByBtwkodeVoorDeclaratie(array('max' => 12)); // WHERE btwkode_voor_declaratie <= 12
     * </code>
     *
     * @param     mixed $btwkodeVoorDeclaratie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByBtwkodeVoorDeclaratie($btwkodeVoorDeclaratie = null, $comparison = null)
    {
        if (is_array($btwkodeVoorDeclaratie)) {
            $useMinMax = false;
            if (isset($btwkodeVoorDeclaratie['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE, $btwkodeVoorDeclaratie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($btwkodeVoorDeclaratie['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE, $btwkodeVoorDeclaratie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE, $btwkodeVoorDeclaratie, $comparison);
    }

    /**
     * Filter the query on the kode_inkoopkanaal column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeInkoopkanaal(1234); // WHERE kode_inkoopkanaal = 1234
     * $query->filterByKodeInkoopkanaal(array(12, 34)); // WHERE kode_inkoopkanaal IN (12, 34)
     * $query->filterByKodeInkoopkanaal(array('min' => 12)); // WHERE kode_inkoopkanaal >= 12
     * $query->filterByKodeInkoopkanaal(array('max' => 12)); // WHERE kode_inkoopkanaal <= 12
     * </code>
     *
     * @param     mixed $kodeInkoopkanaal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeInkoopkanaal($kodeInkoopkanaal = null, $comparison = null)
    {
        if (is_array($kodeInkoopkanaal)) {
            $useMinMax = false;
            if (isset($kodeInkoopkanaal['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::KODE_INKOOPKANAAL, $kodeInkoopkanaal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kodeInkoopkanaal['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::KODE_INKOOPKANAAL, $kodeInkoopkanaal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_INKOOPKANAAL, $kodeInkoopkanaal, $comparison);
    }

    /**
     * Filter the query on the kode_referentieprodukt_per_cluster column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeReferentieproduktPerCluster(1234); // WHERE kode_referentieprodukt_per_cluster = 1234
     * $query->filterByKodeReferentieproduktPerCluster(array(12, 34)); // WHERE kode_referentieprodukt_per_cluster IN (12, 34)
     * $query->filterByKodeReferentieproduktPerCluster(array('min' => 12)); // WHERE kode_referentieprodukt_per_cluster >= 12
     * $query->filterByKodeReferentieproduktPerCluster(array('max' => 12)); // WHERE kode_referentieprodukt_per_cluster <= 12
     * </code>
     *
     * @param     mixed $kodeReferentieproduktPerCluster The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKodeReferentieproduktPerCluster($kodeReferentieproduktPerCluster = null, $comparison = null)
    {
        if (is_array($kodeReferentieproduktPerCluster)) {
            $useMinMax = false;
            if (isset($kodeReferentieproduktPerCluster['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER, $kodeReferentieproduktPerCluster['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kodeReferentieproduktPerCluster['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER, $kodeReferentieproduktPerCluster['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER, $kodeReferentieproduktPerCluster, $comparison);
    }

    /**
     * Filter the query on the verkoopprijs_exclusief_btw column
     *
     * Example usage:
     * <code>
     * $query->filterByVerkoopprijsExclusiefBtw(1234); // WHERE verkoopprijs_exclusief_btw = 1234
     * $query->filterByVerkoopprijsExclusiefBtw(array(12, 34)); // WHERE verkoopprijs_exclusief_btw IN (12, 34)
     * $query->filterByVerkoopprijsExclusiefBtw(array('min' => 12)); // WHERE verkoopprijs_exclusief_btw >= 12
     * $query->filterByVerkoopprijsExclusiefBtw(array('max' => 12)); // WHERE verkoopprijs_exclusief_btw <= 12
     * </code>
     *
     * @param     mixed $verkoopprijsExclusiefBtw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByVerkoopprijsExclusiefBtw($verkoopprijsExclusiefBtw = null, $comparison = null)
    {
        if (is_array($verkoopprijsExclusiefBtw)) {
            $useMinMax = false;
            if (isset($verkoopprijsExclusiefBtw['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW, $verkoopprijsExclusiefBtw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verkoopprijsExclusiefBtw['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW, $verkoopprijsExclusiefBtw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW, $verkoopprijsExclusiefBtw, $comparison);
    }

    /**
     * Filter the query on the vergoedingsprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByVergoedingsprijs(1234); // WHERE vergoedingsprijs = 1234
     * $query->filterByVergoedingsprijs(array(12, 34)); // WHERE vergoedingsprijs IN (12, 34)
     * $query->filterByVergoedingsprijs(array('min' => 12)); // WHERE vergoedingsprijs >= 12
     * $query->filterByVergoedingsprijs(array('max' => 12)); // WHERE vergoedingsprijs <= 12
     * </code>
     *
     * @param     mixed $vergoedingsprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByVergoedingsprijs($vergoedingsprijs = null, $comparison = null)
    {
        if (is_array($vergoedingsprijs)) {
            $useMinMax = false;
            if (isset($vergoedingsprijs['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::VERGOEDINGSPRIJS, $vergoedingsprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vergoedingsprijs['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::VERGOEDINGSPRIJS, $vergoedingsprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::VERGOEDINGSPRIJS, $vergoedingsprijs, $comparison);
    }

    /**
     * Filter the query on the referentieprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByReferentieprijs(1234); // WHERE referentieprijs = 1234
     * $query->filterByReferentieprijs(array(12, 34)); // WHERE referentieprijs IN (12, 34)
     * $query->filterByReferentieprijs(array('min' => 12)); // WHERE referentieprijs >= 12
     * $query->filterByReferentieprijs(array('max' => 12)); // WHERE referentieprijs <= 12
     * </code>
     *
     * @param     mixed $referentieprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByReferentieprijs($referentieprijs = null, $comparison = null)
    {
        if (is_array($referentieprijs)) {
            $useMinMax = false;
            if (isset($referentieprijs['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::REFERENTIEPRIJS, $referentieprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referentieprijs['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::REFERENTIEPRIJS, $referentieprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::REFERENTIEPRIJS, $referentieprijs, $comparison);
    }

    /**
     * Filter the query on the datum_schorsing column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumSchorsing('2011-03-14'); // WHERE datum_schorsing = '2011-03-14'
     * $query->filterByDatumSchorsing('now'); // WHERE datum_schorsing = '2011-03-14'
     * $query->filterByDatumSchorsing(array('max' => 'yesterday')); // WHERE datum_schorsing < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumSchorsing The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDatumSchorsing($datumSchorsing = null, $comparison = null)
    {
        if (is_array($datumSchorsing)) {
            $useMinMax = false;
            if (isset($datumSchorsing['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_SCHORSING, $datumSchorsing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumSchorsing['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_SCHORSING, $datumSchorsing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DATUM_SCHORSING, $datumSchorsing, $comparison);
    }

    /**
     * Filter the query on the datum_doorhaling column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumDoorhaling('2011-03-14'); // WHERE datum_doorhaling = '2011-03-14'
     * $query->filterByDatumDoorhaling('now'); // WHERE datum_doorhaling = '2011-03-14'
     * $query->filterByDatumDoorhaling(array('max' => 'yesterday')); // WHERE datum_doorhaling < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumDoorhaling The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByDatumDoorhaling($datumDoorhaling = null, $comparison = null)
    {
        if (is_array($datumDoorhaling)) {
            $useMinMax = false;
            if (isset($datumDoorhaling['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_DOORHALING, $datumDoorhaling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumDoorhaling['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::DATUM_DOORHALING, $datumDoorhaling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::DATUM_DOORHALING, $datumDoorhaling, $comparison);
    }

    /**
     * Filter the query on the mutatie_datum column
     *
     * Example usage:
     * <code>
     * $query->filterByMutatieDatum('2011-03-14'); // WHERE mutatie_datum = '2011-03-14'
     * $query->filterByMutatieDatum('now'); // WHERE mutatie_datum = '2011-03-14'
     * $query->filterByMutatieDatum(array('max' => 'yesterday')); // WHERE mutatie_datum < '2011-03-13'
     * </code>
     *
     * @param     mixed $mutatieDatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByMutatieDatum($mutatieDatum = null, $comparison = null)
    {
        if (is_array($mutatieDatum)) {
            $useMinMax = false;
            if (isset($mutatieDatum['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::MUTATIE_DATUM, $mutatieDatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatieDatum['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::MUTATIE_DATUM, $mutatieDatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::MUTATIE_DATUM, $mutatieDatum, $comparison);
    }

    /**
     * Filter the query on the uitgavedatum column
     *
     * Example usage:
     * <code>
     * $query->filterByUitgavedatum('2011-03-14'); // WHERE uitgavedatum = '2011-03-14'
     * $query->filterByUitgavedatum('now'); // WHERE uitgavedatum = '2011-03-14'
     * $query->filterByUitgavedatum(array('max' => 'yesterday')); // WHERE uitgavedatum < '2011-03-13'
     * </code>
     *
     * @param     mixed $uitgavedatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByUitgavedatum($uitgavedatum = null, $comparison = null)
    {
        if (is_array($uitgavedatum)) {
            $useMinMax = false;
            if (isset($uitgavedatum['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::UITGAVEDATUM, $uitgavedatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uitgavedatum['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::UITGAVEDATUM, $uitgavedatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::UITGAVEDATUM, $uitgavedatum, $comparison);
    }

    /**
     * Filter the query on the gvs_cluster_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByGvsClusterKode('fooValue');   // WHERE gvs_cluster_kode = 'fooValue'
     * $query->filterByGvsClusterKode('%fooValue%'); // WHERE gvs_cluster_kode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gvsClusterKode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByGvsClusterKode($gvsClusterKode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gvsClusterKode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gvsClusterKode)) {
                $gvsClusterKode = str_replace('*', '%', $gvsClusterKode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::GVS_CLUSTER_KODE, $gvsClusterKode, $comparison);
    }

    /**
     * Filter the query on the gvs_vergoedingslimiet column
     *
     * Example usage:
     * <code>
     * $query->filterByGvsVergoedingslimiet(1234); // WHERE gvs_vergoedingslimiet = 1234
     * $query->filterByGvsVergoedingslimiet(array(12, 34)); // WHERE gvs_vergoedingslimiet IN (12, 34)
     * $query->filterByGvsVergoedingslimiet(array('min' => 12)); // WHERE gvs_vergoedingslimiet >= 12
     * $query->filterByGvsVergoedingslimiet(array('max' => 12)); // WHERE gvs_vergoedingslimiet <= 12
     * </code>
     *
     * @param     mixed $gvsVergoedingslimiet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByGvsVergoedingslimiet($gvsVergoedingslimiet = null, $comparison = null)
    {
        if (is_array($gvsVergoedingslimiet)) {
            $useMinMax = false;
            if (isset($gvsVergoedingslimiet['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET, $gvsVergoedingslimiet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gvsVergoedingslimiet['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET, $gvsVergoedingslimiet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET, $gvsVergoedingslimiet, $comparison);
    }

    /**
     * Filter the query on the inkoopprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByInkoopprijs(1234); // WHERE inkoopprijs = 1234
     * $query->filterByInkoopprijs(array(12, 34)); // WHERE inkoopprijs IN (12, 34)
     * $query->filterByInkoopprijs(array('min' => 12)); // WHERE inkoopprijs >= 12
     * $query->filterByInkoopprijs(array('max' => 12)); // WHERE inkoopprijs <= 12
     * </code>
     *
     * @param     mixed $inkoopprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByInkoopprijs($inkoopprijs = null, $comparison = null)
    {
        if (is_array($inkoopprijs)) {
            $useMinMax = false;
            if (isset($inkoopprijs['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::INKOOPPRIJS, $inkoopprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inkoopprijs['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::INKOOPPRIJS, $inkoopprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::INKOOPPRIJS, $inkoopprijs, $comparison);
    }

    /**
     * Filter the query on the europees_registratienummer column
     *
     * Example usage:
     * <code>
     * $query->filterByEuropeesRegistratienummer('fooValue');   // WHERE europees_registratienummer = 'fooValue'
     * $query->filterByEuropeesRegistratienummer('%fooValue%'); // WHERE europees_registratienummer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $europeesRegistratienummer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByEuropeesRegistratienummer($europeesRegistratienummer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($europeesRegistratienummer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $europeesRegistratienummer)) {
                $europeesRegistratienummer = str_replace('*', '%', $europeesRegistratienummer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER, $europeesRegistratienummer, $comparison);
    }

    /**
     * Filter the query on the kortingspercentage column
     *
     * Example usage:
     * <code>
     * $query->filterByKortingspercentage(1234); // WHERE kortingspercentage = 1234
     * $query->filterByKortingspercentage(array(12, 34)); // WHERE kortingspercentage IN (12, 34)
     * $query->filterByKortingspercentage(array('min' => 12)); // WHERE kortingspercentage >= 12
     * $query->filterByKortingspercentage(array('max' => 12)); // WHERE kortingspercentage <= 12
     * </code>
     *
     * @param     mixed $kortingspercentage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByKortingspercentage($kortingspercentage = null, $comparison = null)
    {
        if (is_array($kortingspercentage)) {
            $useMinMax = false;
            if (isset($kortingspercentage['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::KORTINGSPERCENTAGE, $kortingspercentage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kortingspercentage['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::KORTINGSPERCENTAGE, $kortingspercentage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::KORTINGSPERCENTAGE, $kortingspercentage, $comparison);
    }

    /**
     * Filter the query on the maximumprijs_vws column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximumprijsVws(1234); // WHERE maximumprijs_vws = 1234
     * $query->filterByMaximumprijsVws(array(12, 34)); // WHERE maximumprijs_vws IN (12, 34)
     * $query->filterByMaximumprijsVws(array('min' => 12)); // WHERE maximumprijs_vws >= 12
     * $query->filterByMaximumprijsVws(array('max' => 12)); // WHERE maximumprijs_vws <= 12
     * </code>
     *
     * @param     mixed $maximumprijsVws The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByMaximumprijsVws($maximumprijsVws = null, $comparison = null)
    {
        if (is_array($maximumprijsVws)) {
            $useMinMax = false;
            if (isset($maximumprijsVws['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::MAXIMUMPRIJS_VWS, $maximumprijsVws['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximumprijsVws['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::MAXIMUMPRIJS_VWS, $maximumprijsVws['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::MAXIMUMPRIJS_VWS, $maximumprijsVws, $comparison);
    }

    /**
     * Filter the query on the registratie_nummer_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistratieNummer1(1234); // WHERE registratie_nummer_1 = 1234
     * $query->filterByRegistratieNummer1(array(12, 34)); // WHERE registratie_nummer_1 IN (12, 34)
     * $query->filterByRegistratieNummer1(array('min' => 12)); // WHERE registratie_nummer_1 >= 12
     * $query->filterByRegistratieNummer1(array('max' => 12)); // WHERE registratie_nummer_1 <= 12
     * </code>
     *
     * @param     mixed $registratieNummer1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRegistratieNummer1($registratieNummer1 = null, $comparison = null)
    {
        if (is_array($registratieNummer1)) {
            $useMinMax = false;
            if (isset($registratieNummer1['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_1, $registratieNummer1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($registratieNummer1['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_1, $registratieNummer1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_1, $registratieNummer1, $comparison);
    }

    /**
     * Filter the query on the registratie_nummer_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistratieNummer2('fooValue');   // WHERE registratie_nummer_2 = 'fooValue'
     * $query->filterByRegistratieNummer2('%fooValue%'); // WHERE registratie_nummer_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registratieNummer2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRegistratieNummer2($registratieNummer2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registratieNummer2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $registratieNummer2)) {
                $registratieNummer2 = str_replace('*', '%', $registratieNummer2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_2, $registratieNummer2, $comparison);
    }

    /**
     * Filter the query on the registratie_nummer_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistratieNummer3(1234); // WHERE registratie_nummer_3 = 1234
     * $query->filterByRegistratieNummer3(array(12, 34)); // WHERE registratie_nummer_3 IN (12, 34)
     * $query->filterByRegistratieNummer3(array('min' => 12)); // WHERE registratie_nummer_3 >= 12
     * $query->filterByRegistratieNummer3(array('max' => 12)); // WHERE registratie_nummer_3 <= 12
     * </code>
     *
     * @param     mixed $registratieNummer3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterByRegistratieNummer3($registratieNummer3 = null, $comparison = null)
    {
        if (is_array($registratieNummer3)) {
            $useMinMax = false;
            if (isset($registratieNummer3['min'])) {
                $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_3, $registratieNummer3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($registratieNummer3['max'])) {
                $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_3, $registratieNummer3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::REGISTRATIE_NUMMER_3, $registratieNummer3, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelenPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->getHandelsproduktkode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->toKeyValue('PrimaryKey', 'Handelsproduktkode'), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproducten() only accepts arguments of type GsHandelsproducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsHandelsproducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproducten');

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
            $this->addJoinObject($join, 'GsHandelsproducten');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproducten relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsNamen object
     *
     * @param   GsNamen|PropelObjectCollection $gsNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNamen($gsNamen, $comparison = null)
    {
        if ($gsNamen instanceof GsNamen) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ARTIKELNAAMNUMMER, $gsNamen->getNaamnummer(), $comparison);
        } elseif ($gsNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelenPeer::ARTIKELNAAMNUMMER, $gsNamen->toKeyValue('PrimaryKey', 'Naamnummer'), $comparison);
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
     * @return GsArtikelenQuery The current query, for fluid interface
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
     * Filter the query by a related GsNawGegevensGstandaard object
     *
     * @param   GsNawGegevensGstandaard|PropelObjectCollection $gsNawGegevensGstandaard The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLeverancier($gsNawGegevensGstandaard, $comparison = null)
    {
        if ($gsNawGegevensGstandaard instanceof GsNawGegevensGstandaard) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::LEVERANCIER_KODE, $gsNawGegevensGstandaard->getNawNummer(), $comparison);
        } elseif ($gsNawGegevensGstandaard instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelenPeer::LEVERANCIER_KODE, $gsNawGegevensGstandaard->toKeyValue('NawNummer', 'NawNummer'), $comparison);
        } else {
            throw new PropelException('filterByLeverancier() only accepts arguments of type GsNawGegevensGstandaard or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Leverancier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinLeverancier($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Leverancier');

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
            $this->addJoinObject($join, 'Leverancier');
        }

        return $this;
    }

    /**
     * Use the Leverancier relation GsNawGegevensGstandaard object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery A secondary query class using the current class as primary query
     */
    public function useLeverancierQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLeverancier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Leverancier', '\PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery');
    }

    /**
     * Filter the query by a related GsNawGegevensGstandaard object
     *
     * @param   GsNawGegevensGstandaard|PropelObjectCollection $gsNawGegevensGstandaard The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByImporteur($gsNawGegevensGstandaard, $comparison = null)
    {
        if ($gsNawGegevensGstandaard instanceof GsNawGegevensGstandaard) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::IMPORTEUR_KODE, $gsNawGegevensGstandaard->getNawNummer(), $comparison);
        } elseif ($gsNawGegevensGstandaard instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelenPeer::IMPORTEUR_KODE, $gsNawGegevensGstandaard->toKeyValue('NawNummer', 'NawNummer'), $comparison);
        } else {
            throw new PropelException('filterByImporteur() only accepts arguments of type GsNawGegevensGstandaard or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Importeur relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinImporteur($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Importeur');

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
            $this->addJoinObject($join, 'Importeur');
        }

        return $this;
    }

    /**
     * Use the Importeur relation GsNawGegevensGstandaard object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery A secondary query class using the current class as primary query
     */
    public function useImporteurQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinImporteur($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Importeur', '\PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery');
    }

    /**
     * Filter the query by a related GsNawGegevensGstandaard object
     *
     * @param   GsNawGegevensGstandaard|PropelObjectCollection $gsNawGegevensGstandaard The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRegistratiehouder($gsNawGegevensGstandaard, $comparison = null)
    {
        if ($gsNawGegevensGstandaard instanceof GsNawGegevensGstandaard) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, $gsNawGegevensGstandaard->getNawNummer(), $comparison);
        } elseif ($gsNawGegevensGstandaard instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, $gsNawGegevensGstandaard->toKeyValue('NawNummer', 'NawNummer'), $comparison);
        } else {
            throw new PropelException('filterByRegistratiehouder() only accepts arguments of type GsNawGegevensGstandaard or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Registratiehouder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinRegistratiehouder($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Registratiehouder');

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
            $this->addJoinObject($join, 'Registratiehouder');
        }

        return $this;
    }

    /**
     * Use the Registratiehouder relation GsNawGegevensGstandaard object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery A secondary query class using the current class as primary query
     */
    public function useRegistratiehouderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRegistratiehouder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Registratiehouder', '\PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLandOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByLandOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LandOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinLandOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LandOmschrijving');

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
            $this->addJoinObject($join, 'LandOmschrijving');
        }

        return $this;
    }

    /**
     * Use the LandOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useLandOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLandOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LandOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHoofdverpakkingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByHoofdverpakkingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the HoofdverpakkingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinHoofdverpakkingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('HoofdverpakkingOmschrijving');

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
            $this->addJoinObject($join, 'HoofdverpakkingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the HoofdverpakkingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useHoofdverpakkingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinHoofdverpakkingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'HoofdverpakkingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDeelverpakkingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByDeelverpakkingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DeelverpakkingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinDeelverpakkingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DeelverpakkingOmschrijving');

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
            $this->addJoinObject($join, 'DeelverpakkingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the DeelverpakkingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useDeelverpakkingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDeelverpakkingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DeelverpakkingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeInformatie object
     *
     * @param   GsLogistiekeInformatie|PropelObjectCollection $gsLogistiekeInformatie The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLogistiekeInformatie($gsLogistiekeInformatie, $comparison = null)
    {
        if ($gsLogistiekeInformatie instanceof GsLogistiekeInformatie) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsLogistiekeInformatie->getZindexNummer(), $comparison);
        } elseif ($gsLogistiekeInformatie instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsLogistiekeInformatie->toKeyValue('ZindexNummer', 'ZindexNummer'), $comparison);
        } else {
            throw new PropelException('filterByLogistiekeInformatie() only accepts arguments of type GsLogistiekeInformatie or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LogistiekeInformatie relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinLogistiekeInformatie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LogistiekeInformatie');

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
            $this->addJoinObject($join, 'LogistiekeInformatie');
        }

        return $this;
    }

    /**
     * Use the LogistiekeInformatie relation GsLogistiekeInformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery A secondary query class using the current class as primary query
     */
    public function useLogistiekeInformatieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLogistiekeInformatie($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LogistiekeInformatie', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery');
    }

    /**
     * Filter the query by a related GsSupplementaireProductenHistorie object
     *
     * @param   GsSupplementaireProductenHistorie|PropelObjectCollection $gsSupplementaireProductenHistorie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie, $comparison = null)
    {
        if ($gsSupplementaireProductenHistorie instanceof GsSupplementaireProductenHistorie) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsSupplementaireProductenHistorie->getZindexNummer(), $comparison);
        } elseif ($gsSupplementaireProductenHistorie instanceof PropelObjectCollection) {
            return $this
                ->useGsSupplementaireProductenHistorieQuery()
                ->filterByPrimaryKeys($gsSupplementaireProductenHistorie->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsSupplementaireProductenHistorie() only accepts arguments of type GsSupplementaireProductenHistorie or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsSupplementaireProductenHistorie relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsSupplementaireProductenHistorie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useGsSupplementaireProductenHistorieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsSupplementaireProductenHistorie($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsSupplementaireProductenHistorie', '\PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorieQuery');
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsArtikelEigenschappen->getZindexNummer(), $comparison);
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
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Filter the query by a related GsRzvAanspraak object
     *
     * @param   GsRzvAanspraak|PropelObjectCollection $gsRzvAanspraak  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsRzvAanspraak($gsRzvAanspraak, $comparison = null)
    {
        if ($gsRzvAanspraak instanceof GsRzvAanspraak) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsRzvAanspraak->getZinummer(), $comparison);
        } elseif ($gsRzvAanspraak instanceof PropelObjectCollection) {
            return $this
                ->useGsRzvAanspraakQuery()
                ->filterByPrimaryKeys($gsRzvAanspraak->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsRzvAanspraak() only accepts arguments of type GsRzvAanspraak or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsRzvAanspraak relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsRzvAanspraak($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsRzvAanspraak');

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
            $this->addJoinObject($join, 'GsRzvAanspraak');
        }

        return $this;
    }

    /**
     * Use the GsRzvAanspraak relation GsRzvAanspraak object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery A secondary query class using the current class as primary query
     */
    public function useGsRzvAanspraakQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsRzvAanspraak($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsRzvAanspraak', '\PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeVerpakkingsinformatie object
     *
     * @param   GsLogistiekeVerpakkingsinformatie|PropelObjectCollection $gsLogistiekeVerpakkingsinformatie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLogistiekeVerpakkingsinformatie($gsLogistiekeVerpakkingsinformatie, $comparison = null)
    {
        if ($gsLogistiekeVerpakkingsinformatie instanceof GsLogistiekeVerpakkingsinformatie) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsLogistiekeVerpakkingsinformatie->getZindexNummer(), $comparison);
        } elseif ($gsLogistiekeVerpakkingsinformatie instanceof PropelObjectCollection) {
            return $this
                ->useGsLogistiekeVerpakkingsinformatieQuery()
                ->filterByPrimaryKeys($gsLogistiekeVerpakkingsinformatie->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsLogistiekeVerpakkingsinformatie() only accepts arguments of type GsLogistiekeVerpakkingsinformatie or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLogistiekeVerpakkingsinformatie relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsLogistiekeVerpakkingsinformatie($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLogistiekeVerpakkingsinformatie');

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
            $this->addJoinObject($join, 'GsLogistiekeVerpakkingsinformatie');
        }

        return $this;
    }

    /**
     * Use the GsLogistiekeVerpakkingsinformatie relation GsLogistiekeVerpakkingsinformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery A secondary query class using the current class as primary query
     */
    public function useGsLogistiekeVerpakkingsinformatieQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLogistiekeVerpakkingsinformatie($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLogistiekeVerpakkingsinformatie', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery');
    }

    /**
     * Filter the query by a related GsSupplementaireProductenMetNzaMaximumtarief object
     *
     * @param   GsSupplementaireProductenMetNzaMaximumtarief|PropelObjectCollection $gsSupplementaireProductenMetNzaMaximumtarief  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsSupplementaireProductenMetNzaMaximumtarief($gsSupplementaireProductenMetNzaMaximumtarief, $comparison = null)
    {
        if ($gsSupplementaireProductenMetNzaMaximumtarief instanceof GsSupplementaireProductenMetNzaMaximumtarief) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsSupplementaireProductenMetNzaMaximumtarief->getZindexNummer(), $comparison);
        } elseif ($gsSupplementaireProductenMetNzaMaximumtarief instanceof PropelObjectCollection) {
            return $this
                ->useGsSupplementaireProductenMetNzaMaximumtariefQuery()
                ->filterByPrimaryKeys($gsSupplementaireProductenMetNzaMaximumtarief->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsSupplementaireProductenMetNzaMaximumtarief() only accepts arguments of type GsSupplementaireProductenMetNzaMaximumtarief or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsSupplementaireProductenMetNzaMaximumtarief relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsSupplementaireProductenMetNzaMaximumtarief($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsSupplementaireProductenMetNzaMaximumtarief');

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
            $this->addJoinObject($join, 'GsSupplementaireProductenMetNzaMaximumtarief');
        }

        return $this;
    }

    /**
     * Use the GsSupplementaireProductenMetNzaMaximumtarief relation GsSupplementaireProductenMetNzaMaximumtarief object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefQuery A secondary query class using the current class as primary query
     */
    public function useGsSupplementaireProductenMetNzaMaximumtariefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsSupplementaireProductenMetNzaMaximumtarief($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsSupplementaireProductenMetNzaMaximumtarief', '\PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefQuery');
    }

    /**
     * Filter the query by a related GsIndicatiesBijSupplementaireProducten object
     *
     * @param   GsIndicatiesBijSupplementaireProducten|PropelObjectCollection $gsIndicatiesBijSupplementaireProducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsIndicatiesBijSupplementaireProducten($gsIndicatiesBijSupplementaireProducten, $comparison = null)
    {
        if ($gsIndicatiesBijSupplementaireProducten instanceof GsIndicatiesBijSupplementaireProducten) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsIndicatiesBijSupplementaireProducten->getZindexNummer(), $comparison);
        } elseif ($gsIndicatiesBijSupplementaireProducten instanceof PropelObjectCollection) {
            return $this
                ->useGsIndicatiesBijSupplementaireProductenQuery()
                ->filterByPrimaryKeys($gsIndicatiesBijSupplementaireProducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsIndicatiesBijSupplementaireProducten() only accepts arguments of type GsIndicatiesBijSupplementaireProducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsIndicatiesBijSupplementaireProducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsIndicatiesBijSupplementaireProducten($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsIndicatiesBijSupplementaireProducten');

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
            $this->addJoinObject($join, 'GsIndicatiesBijSupplementaireProducten');
        }

        return $this;
    }

    /**
     * Use the GsIndicatiesBijSupplementaireProducten relation GsIndicatiesBijSupplementaireProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsIndicatiesBijSupplementaireProductenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsIndicatiesBijSupplementaireProducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsIndicatiesBijSupplementaireProducten', '\PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenQuery');
    }

    /**
     * Filter the query by a related GsLeveranciersassortimenten object
     *
     * @param   GsLeveranciersassortimenten|PropelObjectCollection $gsLeveranciersassortimenten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLeveranciersassortimenten($gsLeveranciersassortimenten, $comparison = null)
    {
        if ($gsLeveranciersassortimenten instanceof GsLeveranciersassortimenten) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsLeveranciersassortimenten->getZinummer(), $comparison);
        } elseif ($gsLeveranciersassortimenten instanceof PropelObjectCollection) {
            return $this
                ->useGsLeveranciersassortimentenQuery()
                ->filterByPrimaryKeys($gsLeveranciersassortimenten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsLeveranciersassortimenten() only accepts arguments of type GsLeveranciersassortimenten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLeveranciersassortimenten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsLeveranciersassortimenten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLeveranciersassortimenten');

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
            $this->addJoinObject($join, 'GsLeveranciersassortimenten');
        }

        return $this;
    }

    /**
     * Use the GsLeveranciersassortimenten relation GsLeveranciersassortimenten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenQuery A secondary query class using the current class as primary query
     */
    public function useGsLeveranciersassortimentenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLeveranciersassortimenten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLeveranciersassortimenten', '\PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenQuery');
    }

    /**
     * Filter the query by a related GsLogistiekeInformatie object
     *
     * @param   GsLogistiekeInformatie|PropelObjectCollection $gsLogistiekeInformatie  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsLogistiekeInformatieRelatedByZindexNummer($gsLogistiekeInformatie, $comparison = null)
    {
        if ($gsLogistiekeInformatie instanceof GsLogistiekeInformatie) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsLogistiekeInformatie->getZindexNummer(), $comparison);
        } elseif ($gsLogistiekeInformatie instanceof PropelObjectCollection) {
            return $this
                ->useGsLogistiekeInformatieRelatedByZindexNummerQuery()
                ->filterByPrimaryKeys($gsLogistiekeInformatie->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsLogistiekeInformatieRelatedByZindexNummer() only accepts arguments of type GsLogistiekeInformatie or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsLogistiekeInformatieRelatedByZindexNummer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsLogistiekeInformatieRelatedByZindexNummer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsLogistiekeInformatieRelatedByZindexNummer');

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
            $this->addJoinObject($join, 'GsLogistiekeInformatieRelatedByZindexNummer');
        }

        return $this;
    }

    /**
     * Use the GsLogistiekeInformatieRelatedByZindexNummer relation GsLogistiekeInformatie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery A secondary query class using the current class as primary query
     */
    public function useGsLogistiekeInformatieRelatedByZindexNummerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsLogistiekeInformatieRelatedByZindexNummer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsLogistiekeInformatieRelatedByZindexNummer', '\PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery');
    }

    /**
     * Filter the query by a related GsPreferentieBeleid object
     *
     * @param   GsPreferentieBeleid|PropelObjectCollection $gsPreferentieBeleid  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPreferentieBeleid($gsPreferentieBeleid, $comparison = null)
    {
        if ($gsPreferentieBeleid instanceof GsPreferentieBeleid) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsPreferentieBeleid->getZindexNummer(), $comparison);
        } elseif ($gsPreferentieBeleid instanceof PropelObjectCollection) {
            return $this
                ->useGsPreferentieBeleidQuery()
                ->filterByPrimaryKeys($gsPreferentieBeleid->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsPreferentieBeleid() only accepts arguments of type GsPreferentieBeleid or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsPreferentieBeleid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsPreferentieBeleid($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useGsPreferentieBeleidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsPreferentieBeleid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPreferentieBeleid', '\PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery');
    }

    /**
     * Filter the query by a related GsRelatieTussenZinummerHibc object
     *
     * @param   GsRelatieTussenZinummerHibc|PropelObjectCollection $gsRelatieTussenZinummerHibc  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsRelatieTussenZinummerHibc($gsRelatieTussenZinummerHibc, $comparison = null)
    {
        if ($gsRelatieTussenZinummerHibc instanceof GsRelatieTussenZinummerHibc) {
            return $this
                ->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsRelatieTussenZinummerHibc->getZinummer(), $comparison);
        } elseif ($gsRelatieTussenZinummerHibc instanceof PropelObjectCollection) {
            return $this
                ->useGsRelatieTussenZinummerHibcQuery()
                ->filterByPrimaryKeys($gsRelatieTussenZinummerHibc->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsRelatieTussenZinummerHibc() only accepts arguments of type GsRelatieTussenZinummerHibc or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsRelatieTussenZinummerHibc relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function joinGsRelatieTussenZinummerHibc($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsRelatieTussenZinummerHibc');

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
            $this->addJoinObject($join, 'GsRelatieTussenZinummerHibc');
        }

        return $this;
    }

    /**
     * Use the GsRelatieTussenZinummerHibc relation GsRelatieTussenZinummerHibc object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibcQuery A secondary query class using the current class as primary query
     */
    public function useGsRelatieTussenZinummerHibcQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsRelatieTussenZinummerHibc($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsRelatieTussenZinummerHibc', '\PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibcQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsArtikelen $gsArtikelen Object to remove from the list of results
     *
     * @return GsArtikelenQuery The current query, for fluid interface
     */
    public function prune($gsArtikelen = null)
    {
        if ($gsArtikelen) {
            $this->addUsingAlias(GsArtikelenPeer::ZINUMMER, $gsArtikelen->getZinummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
