<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsTekstblokkenHtmlQuery;

class GsTekstblokkenHtmlQuery extends BaseGsTekstblokkenHtmlQuery
{
    public static function getTekstVolledig($tekstModule, $tekstSoort, $tekstKode) {
        return GsTekstblokkenHtmlQuery::create()
        ->filterByMutatiekode(GsArtikelen::MUTATIE_VERWIJDER, \Criteria::NOT_EQUAL)
        ->filterByTekstmodule($tekstModule)
        ->filterByTekstsoort($tekstSoort)
        ->filterByTekstNivoKode($tekstKode)
        ->withColumn('GROUP_CONCAT(Tekst ORDER BY Tekstbloknummer, Tekstregelnummer SEPARATOR " ")', 'Tekst')
        ->select('Tekst')
        ->findOne();
    }
}
