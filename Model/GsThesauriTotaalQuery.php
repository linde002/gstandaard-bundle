<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsThesauriTotaalQuery;

class GsThesauriTotaalQuery extends BaseGsThesauriTotaalQuery
{
	public function getThesaurusInhoud($thesaurusnummer, $orderBy = GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES) 
	{
		return $this
			->filterByThesaurusnummer($thesaurusnummer)
			->orderBy($orderBy)
			->find();
	}
}
