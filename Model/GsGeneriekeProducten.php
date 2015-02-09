<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsGeneriekeProducten;

class GsGeneriekeProducten extends BaseGsGeneriekeProducten
{
	public function getProductnaam() {
		return $this->getGsNamenRelatedByNaamnummerVolledigeGpknaam();
	}
	
}
