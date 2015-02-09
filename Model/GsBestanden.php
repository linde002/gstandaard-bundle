<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsBestanden;

class GsBestanden extends BaseGsBestanden
{
	public function getUitgavedatum($format = 'd-m-Y') {
		$uitgaveDatum = parent::getUitgavedatum();
		if(strlen(parent::getUitgavedatum()) == 7)
			$uitgaveDatum = "0".parent::getUitgavedatum();
		return \DateTime::createFromFormat('dmY', $uitgaveDatum)->format($format);
	}
}
