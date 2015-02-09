<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsVoorschrijfproducten;

class GsVoorschrijfproducten extends BaseGsVoorschrijfproducten
{
	protected $merknamen = null;
	public function getMerknamen() {
		if(is_null($this->merknamen))
		{
			$this->merknamen = GsHandelsproductenQuery::create()
				->select('Merkstamnaam')
				->filterByPrkcode($this->getPrkcode())
				->distinct()
				->orderBy('Merkstamnaam')
				->where('Merkstamnaam <> ""')
				->find();
		}
		return $this->merknamen;
	}
}
