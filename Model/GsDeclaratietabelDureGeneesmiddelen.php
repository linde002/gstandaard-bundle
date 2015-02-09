<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsDeclaratietabelDureGeneesmiddelen;

class GsDeclaratietabelDureGeneesmiddelen extends BaseGsDeclaratietabelDureGeneesmiddelen
{
	public function getOmrekenFactor() {
		return $this->getOmrekenfactorAantalToedieningseenhedenPerHpk();
	}
}
