<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\om\BaseGsAtcCodes;

class GsAtcCodes extends BaseGsAtcCodes
{
	/**
	 *
	 * @return GSAtcCodes
	 */
	public function getAnatomischeHoofdGroep() {
		return GsAtcCodesQuery::create()->findOneByAtccode(substr($this->getAtccode(), 0, 1));
	}
	
	/**
	 *
	 * @return GSAtcCodes
	 */
	public function getTherapeutischeHoofdGroep() {
		return GsAtcCodesQuery::create()->findOneByAtccode(substr($this->getAtccode(), 0, 3));
	}
	
	/**
	 *
	 * @return GSAtcCodes
	 */
	public function getTherapeutischeSubGroep() {
		return GsAtcCodesQuery::create()->findOneByAtccode(substr($this->getAtccode(), 0, 4));
	}
	
	/**
	 *
	 * @return GSAtcCodes
	 */
	public function getChemischeSubGroep() {
		return GsAtcCodesQuery::create()->findOneByAtccode(substr($this->getAtccode(), 0, 5));
	}
	
	/**
	 *
	 * @return GSAtcCodes
	 */
	public function getChemischeStofnaam() {
		return GsAtcCodesQuery::create()->findOneByAtccode(substr($this->getAtccode(), 0, 7));
	}
	
	public function getParent()
	{
		switch(strlen($this->getAtccode()))
		{
			case 1:
				return $this;
			case 3:
				return $this->getAnatomischeHoofdGroep();
			case 4:
				return $this->getTherapeutischeHoofdGroep();
			case 5:
				return $this->getTherapeutischeSubGroep();
			case 7:
				return $this->getChemischeSubGroep();
		}
	}
	
	public function getChildren()
	{
		return GsAtcCodesQuery::create('a')
			->filterByAtccode($this->getAtccode().'%')
			->where('a.Atccode != ?', $this->getAtccode())
			->orderByAtccode('asc')
			->find();
			
	}
}
