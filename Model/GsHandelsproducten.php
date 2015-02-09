<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsHandelsproducten;

class GsHandelsproducten extends BaseGsHandelsproducten
{
	const PRODUCTGROEP_GROND_HULPSTOFFEN = 6;
	
	public function isGrondOfHulpstof() {
		return $this->produktgroep_kode == self::PRODUCTGROEP_GROND_HULPSTOFFEN;
	}
}
