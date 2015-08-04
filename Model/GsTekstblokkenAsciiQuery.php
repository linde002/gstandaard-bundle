<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsTekstblokkenAsciiQuery;

class GsTekstblokkenAsciiQuery extends BaseGsTekstblokkenAsciiQuery
{
    public static function getTekstVolledig($tekstModule, $tekstSoort, $tekstKode) {
        return GsTekstblokkenHtmlQuery::create()
            ->filterByTekstmodule($tekstModule)
            ->filterByTekstsoort($tekstSoort)
            ->filterByTekstNivoKode($tekstKode)
            ->withColumn('GROUP_CONCAT(Tekst ORDER BY Tekstbloknummer, Tekstregelnummer SEPARATOR " ")', 'Tekst')
            ->select('Tekst')
            ->findOne();
    }
}
