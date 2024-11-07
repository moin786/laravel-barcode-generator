<?php

namespace Peal\BarCodeGenerator\Server;

use Peal\BarCodeGenerator\BarCodeType\BarCode;

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
        
        if (! $this->barcode instanceof BarCode) {
                $this->barcode = new BarCode();
        }
        
        return $this->barcode;
    }
}
