# laravel-barcode-generator
<h1 align="center">Generate Barcode using Laravel & Core PHP</h1>

<p align="center">
This package(Generate barcode in Laravel as well as core PHP) use devid tufts barcode.php script, In this package I have converted devid tufts scripts to laravel way,you may find full script of devid tufts from below link
http://davidscotttufts.com/2009/03/31/how-to-create-barcodes-in-php/

Note: For this package you have to enable gd library.
</p>

## Installation

Inside your project root directory, open your terminal

```shell
composer require peal/barcode-generator
```

Composer will automatically download all dependencies.

#### For Laravel

After complete the installation, open your app.php from config folder, paste below line inside providers array 

```php
peal\barcode-generator\BarcodeServiceProvider::class,
```

For Facade support, paste below line inside aliases array

```php
'BarCode' => peal\barcode-generator\BarCode::class,
```

### USAGES 

```php
$bar = App::make('BarCode');
$barcontent = $bar->barcodeFactory("BarCode")
                  ->renderBarcode(
                          $filepath ='', 
                          $text="HelloHello", 
                          $size='50', 
                          $orientation="horizontal", 
                          $code_type="code39",// code_type : code128,code39,code128b,code128a,code25,codabar 
                          $print=true, 
                          $sizefactor=1
                  );
return '<img alt="testing" src="'.$barcontent.'"/>';
```
### Using Facades

```php
use BarCode;

$barcontent = BarCode::barcodeFactory("BarCode")
                      ->renderBarcode(
                              $filepath ='', 
                              $text="HelloHello", 
                              $size='50', 
                              $orientation="horizontal", 
                              $code_type="code39", // code_type : code128,code39,code128b,code128a,code25,codabar 
                              $print=true, 
                              $sizefactor=1
                      );
return '<img alt="testing" src="'.$barcontent.'"/>';

```

### For core php
```php
    
    use peal\barcodegenerator\Server\BarCodeServer;
    try {

    $barcode = new BarCodeServer("BarCode");
        
    $barcontent = $barcode->barcodeFactory("BarCode")
                        ->renderBarcode(
                                $filepath ='', 
                                $text="HelloHello", 
                                $size='50', 
                                $orientation="horizontal", 
                                $code_type="code39", // code_type : code128,code39,code128b,code128a,code25,codabar 
                                $print=true, 
                                $sizefactor=1
                        );
    return '<img alt="testing" src="'.$barcontent.'"/>';
} catch(\Exception $e) {
    return $e->getMessage();
}
```

### Author

[Mohammed Minuddin(Peal)](https://moinshareidea.wordpress.com)

