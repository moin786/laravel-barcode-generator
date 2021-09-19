<?php

namespace peal\barcodegenerator\Abstruction;

use peal\barcodegenerator\Responsibility\IBarcode;

abstract class BarCodePoint implements IBarcode
{
    /**
     * Translate the $text into barcode the correct code_type like code128
     */
    
    public function code128() 
    {
        //
    }
    
    /**
     * Translate the $text into barcode the correct code_type like code128b
     */
    
    public function code128b() 
    {
        //
    }
    
    /**
     * Translate the $text into barcode the correct code_type like code128a
     */
    
    public function code128a() 
    {
        //
    }
    
    /**
     * Translate the $text into barcode the correct code_type like code39
     */
    
    public function code39() 
    {
        //
    }
    
    /**
     * Translate the $text into barcode the correct code_type like code25
     */
    
    public function code25() 
    {
        //
    }
    
    /**
     * Translate the $text into barcode the correct code_type like codabar
     */
    
    public function codabar() 
    {
        //
    }
    
    /**
     * Process Barcode
     */
    abstract protected function generateBarcode();

    /**
     * Render our Bar code
     * 
     * @param string $filepath || Customize folder name under public 
     * @param string $text
     * @param string $size
     * @param string $orientation
     * @param string $code_type
     * @param string $print
     * @param string $sizefactor
     * @return mixed
     */
    
    abstract function renderBarcode($text, $size, $orientation, $code_type, $print, $sizefactor, $filename, $filepath);
}