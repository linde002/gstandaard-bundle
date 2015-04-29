<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

class GS1128BarcodeParser
{
    protected $mapping = array(
        '01' => array(
            'name' => 'productIdentifier',
            'length' => 14,
            'lengthType' => 'fixed',
            'type' => 'number'
            ),
        '10' => array(
            'name' => 'batch',
            'length' => 0,
            'lengthType' => 'variable',
            'type' => 'string'
            ),
        '17' => array(
            'name' => 'expirationDate',
            'length' => 6,
            'lengthType' => 'fixed',
            'type' => 'date'
            ),
        '21' => array(
            'name' => 'serialNumber',
            'length' => 0,
            'lengthType' => 'variable',
            'type' => 'string'
            ),
    );
    
    protected $attributes = array();
    
    /**
     * Returns key=>value array of attributes
     */
    public function parse($barcode) {
        $this->attributes = array();
        
        for($index = 0; $index < strlen($barcode); $index) {
            $identifier = substr($barcode, $index, 2);
            if(!array_key_exists($identifier, $this->mapping)) {
                return $this->attributes;
            }
            $index += 2+ $this->parseIdentifierSegment($this->mapping[$identifier], $index, $barcode);
        }
        return $this->attributes;
    }
    
    
    /**
     * 
     * @param array $segmentMapping
     * @param unknown $startIndex
     * @param unknown $barcodeString
     * @return integer Number of characters read
     */
    protected function parseIdentifierSegment(array $segmentMapping, $startIndex, $barcodeString) {
        if($segmentMapping['lengthType'] == 'fixed') {
            $segmentLength = $segmentMapping['length'];
        } else {
            $endIndex = strpos(substr($barcodeString, $startIndex), chr(29));
            if($endIndex === false)
                $endIndex = strlen($barcodeString);
            $segmentLength = $endIndex-1;
        }
        
        $segmentContents = substr($barcodeString, $startIndex+2, $segmentLength);
        if($segmentMapping['type'] == 'date') {
            $segmentContents = $this->convertToDate($segmentContents);
        }
        $this->attributes[$segmentMapping['name']] = $segmentContents;
        return $segmentLength;
    }
    
    protected function convertToDate($dateString) {
        if(substr($dateString, 3, 2) == 00) {
            $date = \DateTime::createFromFormat('ym', substr($dateString, 0, 4));
            return \DateTime::createFromFormat('Ymd', $date->format('Ymt'));
        }
        return \DateTime::createFromFormat('ymd', $dateString);
    }
}

?>