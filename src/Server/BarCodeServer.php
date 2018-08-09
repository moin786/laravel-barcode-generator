<?php

namespace peal\barcodegenerator\Server;

use peal\barcodegenerator\BarCode;

class BarCodeServer
{
    /**
     * Bar code Factory
     * 
     * @param string $b
     * @return BarCode
     */
    public function barcodeFactory($b) {
        
        $barcode = null;
        
        switch($b) {
            
            case "BarCode":
                
                $barcode = new BarCode();
                
                break;
            
        }
        
        return $barcode;
    }
}
