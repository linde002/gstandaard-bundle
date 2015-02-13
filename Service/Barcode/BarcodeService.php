<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;

class BarcodeService
{
    const EHIBCC_REGEXP = '/^JFK[A-Za-z0-9]{4}[A-Za-z0-9\-\.%$\/\+ ]{1}$/';
    const HIBC_REGEXP = '/^\+[EH]{1}[0-9]{3}[A-Za-z0-9]{4}[A-Za-z0-9]{4}[A-Za-z0-9\-\.%$\/\+ ]{1}$/';
    const GTIN_REGEXP = '/^([0-9]{8})([0-9]{4,6})?$/';
    const GTIN14_EXTENDED_REGEXP = '/^(01[0-9]{1})([0-9]{13})([A-Za-z0-9]*)$/';
    
    /**
     * 
     * @param string $barcode
     * @return boolean
     */
    public function isBarcode($barcode) {
        if(preg_match(self::EHIBCC_REGEXP, $barcode) === 1) {
            return true;
        }
        if(preg_match(self::HIBC_REGEXP, $barcode) === 1) {
            return true;
        }
        if(preg_match(self::GTIN_REGEXP, $barcode) === 1) {
            return true;
        }
        if(preg_match(self::GTIN14_EXTENDED_REGEXP, $barcode) === 1) {
            return true;
        }
        return false;
    }
    
    /**
     * 
     * @param string $barcode
     * @return \PharmaIntelligence\GstandaardBundle\Service\Barcode\BarcodeType
     */
    public function getBarcodeType($barcode) {
         if(preg_match(self::EHIBCC_REGEXP, $barcode) === 1) {
            return new BarcodeType(BarcodeType::TYPE_EHIBCC);
        }
        if(preg_match(self::HIBC_REGEXP, $barcode) === 1) {
            return new BarcodeType(BarcodeType::TYPE_HIBC);
        }
        if(preg_match(self::GTIN_REGEXP, $barcode) === 1) {
            return new BarcodeType(BarcodeType::TYPE_GTIN);
        }
        if(preg_match(self::GTIN14_EXTENDED_REGEXP, $barcode) === 1) {
            return new BarcodeType(BarcodeType::TYPE_GTIN14_EXTENDED);
        }
        return new BarcodeType(BarcodeType::TYPE_UNKNOWN);
    }
    
    /**
     * 
     * @param string $barcode
     * @throws InvalidBarcodeException
     * @return PropelObjectCollection
     */
    public function findByBarcode($barcode) {
        if(!$this->isBarcode($barcode)) {
            throw new InvalidBarcodeException('Barcode wordt niet ondersteund');
        }
        if(preg_match(self::EHIBCC_REGEXP, $barcode) === 1) {
            return $this->findByEHIBCC($barcode);
        }
        if(preg_match(self::HIBC_REGEXP, $barcode) === 1) {
            return $this->findByHIBC($barcode);
        }
        if(preg_match(self::GTIN_REGEXP, $barcode) === 1) {
            return $this->findByGTIN($barcode);
        }
        if(preg_match(self::GTIN14_EXTENDED_REGEXP, $barcode) === 1) {
            return $this->findByGTIN14Extended($barcode);
        }
        throw new InvalidBarcodeException('Barcode wordt niet ondersteund');
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
            ->joinGsLeveranciersassortimenten('lev')
            ->joinGsRelatieTussenZinummerHibc('hibc')
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
        if(preg_match(self::GTIN_REGEXP, $barcode) === 0)
            throw new InvalidBarcodeException('Barcode is not a GTIN (GTIN8, GTIN11, GTIN12, GTIN13)');
        $checkdigit = substr($barcode, -1);
        if($this->getGTINCheckDigit(substr($barcode, 0, -1)) != $checkdigit) {
            throw new InvalidBarcodeException('Invalid checksum. Expected: '.$this->getGTINCheckDigit(substr($barcode, 0, -1)).' received: '.$checkdigit);
        }
    }
    
    protected function validateHIBC($barcode) {
        if(preg_match(self::HIBC_REGEXP, $barcode) === 0)
            throw new InvalidBarcodeException('Barcode is not a HIBC (+[E/H]000AAAABBBBC)');
        $checkdigit = substr($barcode, -1);
        if($checkdigit !== $this->getModulo43CheckDigit(substr($barcode, 0, -1))) {
            throw new InvalidBarcodeException('Invalid checksum. Expected: '.$this->getModulo43CheckDigit(substr($barcode, 0, -1)).' received '.$checkdigit);
        }
    }
    
    protected function validateEHIBCC($barcode) {
        if(preg_match(self::EHIBCC_REGEXP, $barcode) === 0)
            throw new InvalidBarcodeException('Barcode is not a EHIBCC (JFKhpkk*)');
        $checkdigit = substr($barcode, -1);
        if($checkdigit !== $this->getModulo43CheckDigit(substr($barcode, 0, 7))) {
            throw new InvalidBarcodeException('Invalid checksum. Expected: '.$this->getModulo43CheckDigit(substr($barcode, 0, 7)).' received '.$checkdigit);
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

class InvalidBarcodeException extends \Exception {}
