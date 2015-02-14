<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsArtikelEigenschappen;

class GsArtikelEigenschappen extends BaseGsArtikelEigenschappen
{
    public function getVerpakkingsHoeveelheidOmschrijving() {
        if($this->getBasiseenheidOmschrijving() != 'STUK') {
            return $this->getDeelverpakkingOmschrijving();
        }
        return $this->getBasiseenheidOmschrijving();
    }
}
