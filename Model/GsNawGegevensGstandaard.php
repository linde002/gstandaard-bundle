<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsNawGegevensGstandaard;

class GsNawGegevensGstandaard extends BaseGsNawGegevensGstandaard
{	
	public function isBuitenlandseOnderneming() {
		return ($this->getLandMemocode() != 'NL');
	}
}
