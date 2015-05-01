<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;

class BarcodeService
{
    
    
    /**
     * 
     * @param string $barcode
     * @return boolean
     */
    public function isBarcode($barcode) {
        try {
            $barcode = new Barcode($barcode);
        } catch(InvalidBarcodeException $e) {
            return false;
        }
        return true;
    }
    
    /**
     * 
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return \PharmaIntelligence\GstandaardBundle\Service\Barcode\BarcodeType
     */
    public function getBarcodeType($barcode) {
        return new BarcodeType($barcode);
    }
    
    /**
     * 
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return PropelObjectCollection
     */
    public function findByBarcode($barcode) {
        $barcode = new Barcode($barcode);
        
        if($barcode->getBarcodeType()->isEhibcc()) {
            return $this->findByEHIBCC($barcode->getProductIdentifier());
        }
        if($barcode->getBarcodeType()->isHibc()) {
            return $this->findByHIBC($barcode->getProductIdentifier());
        }
        if($barcode->getBarcodeType()->isGtin()) {
            return $this->findByGTIN($barcode->getProductIdentifier());
        }
    }
    
    /**
     *
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return PropelObjectCollection
     */
    public function findByEHIBCC($barcode) {
        $this->validateEHIBCC($barcode);
        $hpk = $this->hpkkToHpk(substr($barcode, 3, 4));
        return GsArtikelenQuery::create()
            ->actief()
            ->filterByHandelsproduktkode($hpk)
            ->find();
    }
    
    /**
     *
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return PropelObjectCollection
     */
    public function findByGTIN14Extended($barcode) {
        $gtin = substr($barcode, 3, 13);
        return $this->findByGTIN($gtin);
    }
    
    /**
     *
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return PropelObjectCollection
     */
    public function findByGTIN($barcode) {
        $this->validateGTIN($barcode);
        $logistiek = GsArtikelenQuery::create('a')
            ->actief()
            ->joinGsLogistiekeInformatieRelatedByZindexNummer('log')
            ->where('log.Gtin = ?', $barcode)
            ->distinct()
            ->find();
        if($logistiek->count() > 0)
            return $logistiek;
        
        return GsArtikelenQuery::create('a')
            ->actief()
            ->joinGsLeveranciersassortimenten('ass')
            ->where('ass.EanBarcode = ?', $barcode)
            ->distinct()
            ->find();
        
    }
    
    /**
     *
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return PropelObjectCollection
     */
    public function findByHIBC($barcode) {
        $this->validateHIBC($barcode);
        /**
         * First, try for a discrete match on HIBC
         */
        $distinctQuery = GsArtikelenQuery::create('a')
            ->actief()
            ->joinGsLeveranciersassortimenten('lev', \Criteria::LEFT_JOIN)
            ->joinGsRelatieTussenZinummerHibc('hibc', \Criteria::LEFT_JOIN)
            ->where('lev.HibcBarcode = ?', '*'.$barcode.'*')
            ->_or()
            ->where('hibc.Hibcbarcode = ?', '*'.$barcode.'*')
            ->distinct();

        if($distinctQuery->count() > 0) {
            return $distinctQuery->find();
        }
        /**
         * HIBC consists of + [LIC code] [HPKK] [ITEM] [Checksum]
         * If the LIC exists in Z-Index we can match on supplier + HPK
         */
        if($this->licExists(substr($barcode, 1, 4))) {
            return GsArtikelenQuery::create()
                ->actief()
                ->filterByHandelsproduktkode($this->hpkkToHpk(substr($barcode, 5, 4)))
                ->useLeverancierQuery()
                    ->filterByLicNummer(substr($barcode, 1, 4))
                ->endUse()
                ->find();
        }
        
        return new \PropelCollection(array());
    }
    
    protected function licExists($lic) {
        return GsNawGegevensGstandaardQuery::create()
            ->filterByLicNummer($lic)
            ->count() > 0;
    }
    
    protected function validateGTIN($barcode) {
        $checkdigit = substr($barcode, -1);
        if($this->getGTINCheckDigit(substr($barcode, 0, -1)) != $checkdigit) {
            throw new InvalidBarcodeException('Invalid checksum. Expected: '.$this->getGTINCheckDigit(substr($barcode, 0, -1)).' received: '.$checkdigit, InvalidBarcodeException::CODE_INVALID_CHECKSUM);
        }
    }
    
    protected function validateHIBC($barcode) {
        $checkdigit = substr($barcode, -1);
        if($checkdigit !== $this->getModulo43CheckDigit(substr($barcode, 0, -1))) {
            throw new InvalidBarcodeException('Invalid checksum. Expected: '.$this->getModulo43CheckDigit(substr($barcode, 0, -1)).' received '.$checkdigit, InvalidBarcodeException::CODE_INVALID_CHECKSUM);
        }
    }
    
    protected function validateEHIBCC($barcode) {
        $checkdigit = substr($barcode, -1);
        if($checkdigit !== $this->getModulo43CheckDigit(substr($barcode, 0, 7))) {
            throw new InvalidBarcodeException('Invalid checksum. Expected: '.$this->getModulo43CheckDigit(substr($barcode, 0, 7)).' received '.$checkdigit, InvalidBarcodeException::CODE_INVALID_CHECKSUM);
        }
    }
    
    protected function hpkkToHpk($hpkk) {
        $hpkBase = base_convert($hpkk, 36, 10);
        return $hpkBase.$this->getModulo11CheckDigit($hpkBase);
    }
    
    protected function getModulo11CheckDigit($string) {
        foreach(range(0, 9) as $digit) {
            if($this->checkModulo11CheckDigit($string.$digit))
                return $digit;
        }   
        
        // 11 -  is ook de checksum
    }
    
    protected function getGTINCheckDigit($string) {
        $parts = str_split(strrev($string));
        $total = 0;
        foreach($parts as $index => $string) {
            $total += ($string * ($index %2 == 0?3:1));
        }
        if(($total%10) == 0)
            return 0;
        return (10-($total%10));
    }
    
    protected function checkModulo11CheckDigit($string) {
        $string = str_pad($string, 8, 0, STR_PAD_LEFT);
        $multipliers = range(8,1);
        $parts = str_split($string);
        $total = 0;
        foreach($parts as $int => $part)
            $total += ($part*$multipliers[$int]);
        return ($total%11 === 0);
    }
    
    protected function getModulo43CheckDigit($string) {
        $mappingTable = str_split('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-. $/+%');
        $parts = str_split($string);
        $total = 0;
        foreach($parts as $int => $part) {
            $total += (array_search($part, $mappingTable));
        }
        return $mappingTable[$total%43];
    }
}
