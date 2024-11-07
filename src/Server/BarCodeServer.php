<?php

namespace Peal\BarCodeGenerator\Server;

use Peal\BarCodeGenerator\BarCodeType\BarCodeType;

class BarCodeServer
{
    /**
     * Bar code Factory
     * 
     * @param string $b
     * @return peal\barcodegenerator\BarCode $BarCode 
     */

    protected $barcode;

    public function __construct($barcode)
    {
        $this->barcode = $barcode;
    }

    public function barcodeFactory() {
        
        if (! $this->barcode instanceof BarCodeType) {
                $this->barcode = new BarCodeType();
        }
        
        return $this->barcode;
    }
}
