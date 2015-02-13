<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

class Barcode
{
    protected $barcode;
    
    protected $type;
    
    public function __construct($barcode) {
        $this->barcode = $barcode;    
        $this->type = new BarcodeType($barcode);
    }
    
    public function getProductIdentifier() {
        if($this->type->isGtinExpanded() || $this->type->isGtin14()) {
            return substr($this->barcode, 3, 13);
        }
        return $this->barcode;
    }
    
    public function getVervalDatum() {
        if(!$this->type->isGtinExpanded()) {
            return \DateTimeImmutable::createFromFormat('Y-m-d', '0000-00-00');
        }
        
        $vervalDatumRegexp = '/17(\d{6})/';
        if(preg_match($vervalDatumRegexp, substr($this->barcode, 14)) === 0) {
            return \DateTime::createFromFormat('Y-m-d', '0000-00-00');
        }
        preg_match($vervalDatumRegexp, substr($this->barcode, 14), $matches);
        if(substr($matches[1], 4) == '00')
            $matches[1] = substr($matches[1], 0, 4).'01';
        return \DateTime::createFromFormat('ymd', $matches[1]);
    }
    
    /**
     * 
     * @return BarcodeType
     */
    public function getBarcodeType() {
        return $this->type;
    }
}
