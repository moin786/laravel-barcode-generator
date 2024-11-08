<?php

/**
 * Can use route from here
 */

use Peal\BarCodeGenerator\Server\BarCodeServer;
use Illuminate\Support\Facades\File;
use Peal\BarCodeGenerator\BarCodeType\BarCodeType;
use Peal\BarCodeGenerator\Facades\BarCode;

Route::get("/testbarcode",function(){
    
    try {
        
        //Using core php
        
        $barcode = new BarCodeServer(new BarCodeType());
        
        $barcontent = $barcode->barcodeFactory("BarCode")
                            ->renderBarcode(
                                    $filepath = '', 
                                    $text="HelloHello", 
                                    $size='50', 
                                    $orientation="horizontal", 
                                    $code_type="code39", 
                                    $print=true, 
                                    $sizefactor=1
                            );
        return '<img alt="testing" src="'.$barcontent.'"/>';
        
        //using facads
        $barcontent = BarCode::barcodeFactory("BarCode")
                            ->renderBarcode(
                                    $filepath ='', 
                                    $text="HelloHello", 
                                    $size='50', 
                                    $orientation="horizontal", 
                                    $code_type="code39", 
                                    $print=true, 
                                    $sizefactor=1
                            );
        return '<img alt="testing" src="'.$barcontent.'"/>';
        
        //Without facades
        
        $bar = App::make('BarCode');
        $barcontent = $bar->barcodeFactory("BarCode")
                            ->renderBarcode(
                                    $filepath ='', 
                                    $text="HelloHello", 
                                    $size='50', 
                                    $orientation="horizontal", 
                                    $code_type="code39", 
                                    $print=true, 
                                    $sizefactor=1
                            );
        return '<img alt="testing" src="'.$barcontent.'"/>';
        
    } catch(Exception $e) {
        return $e->getMessage();
    }
});
