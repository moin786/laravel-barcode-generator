<?php
namespace Peal\BarCodeGenerator;
use Illuminate\Support\ServiceProvider;
use Peal\BarCodeGenerator\BarCodeType\BarCodeType;
use Peal\BarCodeGenerator\Facades\BarCode;
use Peal\BarCodeGenerator\Server\BarCodeServer;

class BarCodeServiceProvider extends ServiceProvider {
    
    /**
     * Register our service
     */
    
    public function register() 
    {
        $this->registerBarcode();
    }
    
    /**
     * Bar code application
     * 
     * @return object [access bar code factory]
     */
    
    public function registerBarcode() 
    {
        $this->app->bind('BarCode', function(){
            return new BarCodeServer(new BarCodeType());
        });
        
        $this->app->alias('BarCode', BarCode::class);
    }
    
    
    
    /*
     * Load routes if needed from package
     * 
     * 
     */
    protected function loadRoute() 
    {
        require __DIR__ . '/routes.php';
    }
    
    /*
     * Booting our routes and configuration
     */
    public function boot() 
    {
        $this->loadRoute();
    }
}