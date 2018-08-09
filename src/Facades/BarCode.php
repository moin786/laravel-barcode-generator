<?php
namespace peal\barcodegenerator\Facades;

use Illuminate\Support\Facades\Facade;

class BarCode extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'BarCode'; }
}