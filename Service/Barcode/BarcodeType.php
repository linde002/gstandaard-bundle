<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

class BarcodeType
{
    const TYPE_UNKNOWN          = 0;
    const TYPE_EHIBCC           = 1;
    const TYPE_HIBC             = 2;
    const TYPE_GTIN             = 3;
    const TYPE_GTIN14_EXTENDED  = 4;
    
    protected $type = 0;
    
    public function __construct($type) {
        $this->type = $type;
    }
    
    public function isEHIBCC() {
        return $this->type == self::TYPE_EHIBCC;
    }
    
    public function isHIBC() {
        return $this->type == self::TYPE_HIBC;
    }
    
    public function isGTIN() {
        return $this->type == self::TYPE_GTIN;
    }
    
    public function isGTIN14Extended() {
        return $this->type == self::TYPE_GTIN14_EXTENDED;
    }
    
    public function __toString() {
        switch($this->type) {
            case self::TYPE_EHIBCC:
                return 'EHIBCC';
                break;
            case self::TYPE_HIBC:
                return 'HIBC';
                break;
            case self::TYPE_GTIN:
                return 'GTIN (8, 11, 12, 13)';
                break;
            case self::TYPE_GTIN14_EXTENDED:
                 return 'GTIN14, extended';
                 break;
        }
        return 'Unknown';
    }
}

?>