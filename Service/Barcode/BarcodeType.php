<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

class BarcodeType
{
    const TYPE_UNKNOWN          = 0;
    const TYPE_EHIBCC           = 1;
    const TYPE_HIBC             = 2;
    const TYPE_GTIN8            = 3;
    const TYPE_GTIN12           = 4;
    const TYPE_GTIN13           = 5;
    const TYPE_GTIN14           = 6;
    const TYPE_GTIN14_EXPANDED  = 7;
    
    const EHIBCC_REGEXP = '/^JFK[A-Za-z0-9]{4}[A-Za-z0-9\-\.%$\/\+ ]{1}$/';
    const HIBC_REGEXP = '/^\+[EH]{1}[0-9]{3}[A-Za-z0-9]{4}[A-Za-z0-9]{4}[A-Za-z0-9\-\.%$\/\+ ]{1}$/';
    const GTIN8_REGEXP = '/^([0-9]{8})$/';
    const GTIN12_REGEXP = '/^([0-9]{12})$/';
    const GTIN13_REGEXP = '/^([0-9]{13})$/';
    const GTIN14_REGEXP = '/^01([0-9]{14})$/';
    const GTIN14_EXTENDED_REGEXP = '/^01([0-9]{14})17([A-Za-z0-9]{6})([A-Za-z0-9\-\.%$\/\+ ]*)$/';
    
    protected $type = 0;
    
    public function __construct($barcode) {
        $mapping = array(
            self::TYPE_EHIBCC => self::EHIBCC_REGEXP,
            self::TYPE_GTIN12 => self::GTIN12_REGEXP,
            self::TYPE_GTIN13 => self::GTIN13_REGEXP,
            self::TYPE_GTIN14 => self::GTIN14_REGEXP,
            self::TYPE_GTIN14_EXPANDED => self::GTIN14_EXTENDED_REGEXP,
            self::TYPE_GTIN8 => self::GTIN8_REGEXP,
            self::TYPE_HIBC => self::HIBC_REGEXP
        );
        foreach($mapping as $type => $regexp) {
            if(preg_match($regexp, $barcode) === 1) {
                $this->type = $type;
                break;
            }
        }
        if($this->type == self::TYPE_UNKNOWN)
            throw new InvalidBarcodeException('Barcode is not supported', InvalidBarcodeException::CODE_NO_BARCODE);
    }
    
    public function isHibc() {
        return ($this->type == self::TYPE_HIBC);
    }
    
    public function isEhibcc() {
        return ($this->type == self::TYPE_EHIBCC);
    }
    
    public function isGtin() {
        return in_array($this->type, array(
            self::TYPE_GTIN12,
            self::TYPE_GTIN13,
            self::TYPE_GTIN14,
            self::TYPE_GTIN8,
            self::TYPE_GTIN14_EXPANDED
        ));
    }
    
    public function isGtinExpanded() {
        return ($this->type == self::TYPE_GTIN14_EXPANDED);
    }
    
    public function isGtin14() {
        return ($this->type == self::TYPE_GTIN14);
    }
    
    public function __toString() {
        $mapping = array(
            self::TYPE_EHIBCC => 'EHIBCC',
            self::TYPE_GTIN12 => 'GTIN12',
            self::TYPE_GTIN13 => 'GTIN13',
            self::TYPE_GTIN14 => 'GTIN14',
            self::TYPE_GTIN14_EXPANDED => 'GTIN14 expanded',
            self::TYPE_GTIN8 => 'GTIN8',
            self::TYPE_HIBC => 'HIBC'
        );
        return $mapping[$this->type];
    }
}

?>