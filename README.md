FileManager
===========
this repository provides an object orientated layer for the php file operations

Installation
------------

Add this repository to your composer.json as below:

```php
{
    ...
    "repositories":[
        ...
        ,
        {
            "type": "git",
            "url": "https://github.com/Seretos/fileManager"
        }
    ],
    ...
    "require": {
        ...
        "Seretos/fileManager": "v0.1.0",
    }
}
```

Usage
-----

this repository provides currently the following file functions:

```php
$manager = new FileManager();
$manager->fileExists('path/to/file.ext');                       //check if the file exists
$manager->clearDirectory('path/to/directory');                  //remove all files contained in this directory
$manager->createDirectory('path/to/directory',0777,true,null);  //create a directory
$manager->getClassName($myClass);                               //returns the name of an class object
```

this repository provides a class to handle image functions

```php
$image = new Image($imageResource);
$image->getResource();                      //get the loaded image resource
$image->loadFromFile('/path/to/file.png');  //load a file
$image->loadFromString($imageContent);
$image->save('/path/to/file.png');
$image->getWidth();
$image->getHeight();
$image->getCharacterWidth($font);
$image->getCharacterHeight($font);
$image->getColor($red,$green,$blue,$alpha);
$image->createFilledRectangle ($x1, $y1, $x2, $y2, $color);
$image->createText ($font, $x, $y, $string, $color);
```