<?php
namespace Peal\BarCodeGenerator;
use Illuminate\Support\ServiceProvider;
use Peal\BarCodeGenerator\BarCodeType\BarCode;
use Peal\BarCodeGenerator\Server\BarCodeServer;

class BarcodeServiceProvider extends ServiceProvider {
    
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
            return new BarCodeServer(new BarCode());
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
