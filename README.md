# laravel-barcode-generator
<h1 align="center">Generate Barcode using Laravel & Core PHP</h1>

<p align="center">
This package generate different types of barcode using Laravel as well as using core PHP.

Note: For this package you have to enable gd library.
</p>

## Installation

Inside your project root directory, open your terminal

```shell
composer require peal/laravel-barcode-generator
```

Composer will automatically download all dependencies.

#### For Laravel

After complete the installation, open your app.php from config folder, paste below line inside providers array 

```php
peal\barcodegenerator\BarcodeServiceProvider::class,
```

For Facade support, paste below line inside aliases array

```php
'BarCode' => peal\barcodegenerator\Facades\BarCode::class,
```

### USAGES 

```php
//Generate into barcode folder under public
$bar = App::make('BarCode');
$barcodes = [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg'
            ];
$barcontent = $bar->barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename']
                            )->filename($barcode['filename']);

echo '<img alt="testing" src="'.$barcontent.'"/>';    


//Generate into customize folder under public
$bar = App::make('BarCode');
$barcodes = [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg',
                'filepath' => 'prdbarcode'
            ];
$barcontent = $bar->barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename'],
                                    $filepath = $barcode['filepath']
                            )->filename($barcode['filename']);

echo '<img alt="testing" src="'.$barcontent.'"/>';    
```

### Multiple barcode 

```php
//Generate into barcode folder under public
$bar = App::make('BarCode');
$barcodes = [
            [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg'
            ],
            [
                'text' => 'HelloPeal',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image2.jpeg'
            ],
            [
                'text' => 'Hi Ruhul',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code128b',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image3.jpeg'
            ],
            [
                'text' => 'HelloMahian',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image4.jpeg'
            ],
        ];
      
    
    foreach($barcodes as $barcode) {
        $barcontent = $bar->barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename']
                            )->filename($barcode['filename']);

        echo '<img alt="testing" src="'.$barcontent.'"/>';    
            
        
        
    }


    //Generate into customize folder under public

    $bar = App::make('BarCode');
$barcodes = [
            [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg',
                'filepath' => 'prdbarcode'
            ],
            [
                'text' => 'HelloPeal',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image2.jpeg',
                'filepath' => 'prdbarcode'
            ],
            [
                'text' => 'Hi Ruhul',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code128b',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image3.jpeg',
                'filepath' => 'prdbarcode'
            ],
            [
                'text' => 'HelloMahian',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image4.jpeg',
                'filepath' => 'prdbarcode'
            ],
        ];
      
    
    foreach($barcodes as $barcode) {
        $barcontent = $bar->barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename'],
                                    $filepath = $barcode['filepath'],
                            )->filename($barcode['filename']);

        echo '<img alt="testing" src="'.$barcontent.'"/>';    
            
        
        
    }
```

### Using Facades

```php
use peal\barcodegenerator\Facades\BarCode;

//Single barcode
//Generate into barcoce folder under public

$barcodes = [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg'
            ];
$barcontent = BarCode::barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename']
                            )->filename($barcode['filename']);

        echo '<img alt="testing" src="'.$barcontent.'"/>';  
        
        
//Generate into customize folder under public
$barcodes = [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg',
                'filepath' => 'prdbarcode'
            ];
$barcontent = BarCode::barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename'],
                                    $filepath = $barcode['filepath'],
                            )->filename($barcode['filename']);

        echo '<img alt="testing" src="'.$barcontent.'"/>';  


//Multiple barcode

/**
 * For customize folder name, use filepath key and parameter
 */

$barcodes = [
            [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image1.jpeg'
            ],
            [
                'text' => 'HelloPeal',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image2.jpeg'
            ],
            [
                'text' => 'Hi Ruhul',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code128b',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image3.jpeg'
            ],
            [
                'text' => 'HelloMahian',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image4.jpeg'
            ],
            [
                'text' => 'HelloHello',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image5.jpeg'
            ],
            [
                'text' => 'HelloPeal',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image6.jpeg'
            ],
            [
                'text' => 'Hi Ruhul',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code128b',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image7.jpeg'
            ],
            [
                'text' => 'HelloMahian',
                'size' => 50,
                'orientation' => 'horizontal',
                'code_type' => 'code39',
                'print' => true,
                'sizefactor' => 1,
                'filename' => 'image8.jpeg'
            ],
        ];
      

       
    foreach($barcodes as $barcode) {
        $barcontent = BarCode::barcodeFactory()->renderBarcode(
                                    $text=$barcode["text"], 
                                    $size=$barcode['size'], 
                                    $orientation=$barcode['orientation'], 
                                    $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                    $print=$barcode['print'], 
                                    $sizefactor=$barcode['sizefactor'],
                                    $filename = $barcode['filename']
                            )->filename($barcode['filename']);

        echo '<img alt="testing" src="'.$barcontent.'"/>';    
            
        
        
    }

```

### For core php
```php
    
use peal\barcodegenerator\Server\BarCodeServer;
use peal\barcodegenerator\BarCode;

//single barcode

$barcodes = [
        'text' => 'HelloHello',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image1.jpeg'
        ];
$barcontent = new BarCodeServer(new BarCode());

$barcontent = $barcontent->barcodeFactory()->renderBarcode(
                                $text=$barcode["text"], 
                                $size=$barcode['size'], 
                                $orientation=$barcode['orientation'], 
                                $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                $print=$barcode['print'], 
                                $sizefactor=$barcode['sizefactor'],
                                $filename = $barcode['filename']
                        )->filename($barcode['filename']);

echo '<img alt="testing" src="'.$barcontent.'"/>';    

//Multiple barcode

$barcodes = [
        [
        'text' => 'HelloHello',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image1.jpeg'
        ],
        [
        'text' => 'HelloPeal',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image2.jpeg'
        ],
        [
        'text' => 'Hi Ruhul',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code128b',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image3.jpeg'
        ],
        [
        'text' => 'HelloMahian',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image4.jpeg'
        ],
        [
        'text' => 'HelloHello',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image5.jpeg'
        ],
        [
        'text' => 'HelloPeal',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image6.jpeg'
        ],
        [
        'text' => 'Hi Ruhul',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code128b',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image7.jpeg'
        ],
        [
        'text' => 'HelloMahian',
        'size' => 50,
        'orientation' => 'horizontal',
        'code_type' => 'code39',
        'print' => true,
        'sizefactor' => 1,
        'filename' => 'image8.jpeg'
        ],
];


$barcontent = new BarCodeServer(new BarCode());

foreach($barcodes as $barcode) {
$barcontent = $barcontent->barcodeFactory()->renderBarcode(
                                $text=$barcode["text"], 
                                $size=$barcode['size'], 
                                $orientation=$barcode['orientation'], 
                                $code_type=$barcode['code_type'], // code_type : code128,code39,code128b,code128a,code25,codabar 
                                $print=$barcode['print'], 
                                $sizefactor=$barcode['sizefactor'],
                                $filename = $barcode['filename']
                        )->filename($barcode['filename']);

echo '<img alt="testing" src="'.$barcontent.'"/>';    
        


}


```

### Author

[Mohammed Minuddin(Peal)](https://moinshareidea.wordpress.com)

