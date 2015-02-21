<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsArtikelen;

class GsArtikelen extends BaseGsArtikelen
{
	const BTW_HOOG = '2';
	const BTW_LAAG = '1';
	const BTW_GEEN = '0';
	
	const MUTATIE_GEEN = 0;
	const MUTATIE_VERWIJDER = 1;
	const MUTATIE_WIJZIGEN = 2;
	const MUTATIE_NIEUW = 3;
	
	const UN_UITVERKOOP = 'U';
	const UN_VERVALLEN = 'V';
	const UN_WETTELIJK_NIET_VERHANDELEN = 'W';
	
	const EAV_AFKORTING = 'EAV';
	
	public function getGtin() {
		if(is_null($this->getLogistiekeInformatie())) {
			return '';
		} else {
			return $this->getLogistiekeInformatie()->getGtin();
		}
	}
	
	/**
	 * 
	 * @return \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal
	 */
	public function getVerpakkingshoeveelheidEenheidOmschrijving() {
	   if($this->getGsHandelsproducten()->getBasiseenheidOmschrijving()->getMemokodeItem() != 'ST')
	       return $this->getDeelverpakkingOmschrijving();
	   return $this->getGsHandelsproducten()->getBasiseenheidOmschrijving();    
	}
	
	public function isEAV() {
		return $this->getDeelverpakkingOmschrijving()->getAfkorting() == self::EAV_AFKORTING;
	}
	
	public function isRecordVervallen() {
		return $this->getMutatiekode() == 1;
	}
	
	public function isUitverkoop() {
		return $this->getUnKode() == self::UN_UITVERKOOP;
	}
	
	public function isUitverkocht() {
		return $this->isUitverkoop() && $this->getUnDatum('U') < time();
	}
	
	public function isVervallen() {
		return $this->getUnKode() == self::UN_VERVALLEN;
	}
	
	public function isActief() {
		return $this->getMutatiekode() != self::MUTATIE_VERWIJDER;
	}
	
	public function isWettelijkNietVerhandelen() {
		return $this->getUnKode() == self::UN_WETTELIJK_NIET_VERHANDELEN;
	}
	
	
	public function getHeeftDeclaratieTitel() {
		return GsDeclaratietabelDureGeneesmiddelenQuery::create('d')
			->filterByZorgactiviteitVoldoetAanBeleidsregel(true)
			->useGsHandelsproductenQuery()
				->filterByGsArtikelen($this)
			->endUse()
			->where('d.Mutatiekode <> 1')
			->count() > 0;
	}
	
	public function getDeclaratieTitel() {
		return GsDeclaratietabelDureGeneesmiddelenQuery::create('d')
			->filterByZorgactiviteitVoldoetAanBeleidsregel(true)
			->useGsHandelsproductenQuery()
				->filterByGsArtikelen($this)
			->endUse()
			->where('d.Mutatiekode <> 1')
			->findOne();
	}
	
	protected function createRawSlug()
	{
		if(is_null($this->getGsNamen()))
			return '' . $this->cleanupSlugPart($this->getZinummer()) . '-' . $this->cleanupSlugPart('Onbekend') . '';
		else
			return '' . $this->cleanupSlugPart($this->getZinummer()) . '-' . $this->cleanupSlugPart($this->getGsNamen()->getNaamVolledig()) . '';
	}
	
	public function getInkoopStuksPrijs() {
		return $this->getInkoopprijs()/$this->getInkoophoeveelheid();
	}
	
	public function getAantalBasisEenheden() {
		return $this->getAantalHoofdverpakkingen()*$this->getAantalDeelverpakkingen()*$this->getHoeveelheidPerDeelverpakking();
	}
}
