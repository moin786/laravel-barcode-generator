<?php

namespace peal\barcodegenerator\Responsibility;

interface IBarcode
{
    /**
     * Translate the $text into barcode the correct code_type like code128
     */
    
    public function code128();
    
    /**
     * Translate the $text into barcode the correct code_type like code128b
     */
    
    public function code128b();
    
    /**
     * Translate the $text into barcode the correct code_type like code128a
     */
    
    public function code128a();
    
    /**
     * Translate the $text into barcode the correct code_type like code39
     */
    
    public function code39();
    
    /**
     * Translate the $text into barcode the correct code_type like code25
     */
    
    public function code25();
    
    /**
     * Translate the $text into barcode the correct code_type like codabar
     */
    
    public function codabar();
    
}