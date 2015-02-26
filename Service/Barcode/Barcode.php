<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

class Barcode
{
    protected $barcode;
    
    protected $type;
    
    protected $attributes = array();
    
    public function __construct($barcode) {
        $this->barcode = $barcode;    
        $this->type = new BarcodeType($barcode);
        if($this->type->isGtinExpanded() || $this->type->isGtin14()) {
            $parser = new GS1128BarcodeParser();
            $this->attributes = $parser->parse($barcode); 
        } else {
            $this->attributes['productIdentifier'] = $this->barcode;
        }
    }
    
    public function getBarcode() {
        if(array_key_exists('batch', $this->attributes))
            return $this->attributes['batch'];
        return null;
    }
    public function getProductIdentifier() {
        return $this->attributes['productIdentifier'];
    }
    
    public function getVervalDatum() {
        if(array_key_exists('expirationDate', $this->attributes))
            return $this->attributes['expirationDate'];
        return \DateTime::createFromFormat('Y-m-d', '0000-00-00');
    }
    
    /**
     * 
     * @return BarcodeType
     */
    public function getBarcodeType() {
        return $this->type;
    }
}
