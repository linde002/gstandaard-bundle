<?php
namespace PharmaIntelligence\GstandaardBundle\Service\Barcode;

class InvalidBarcodeException extends \Exception {
    const CODE_INVALID_CHECKSUM = 10;
    const CODE_NO_BARCODE = 99;
}
