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
        "Seretos/fileManager": "0.1.0",
    }
}
```

Usage
-----

this repository provides currently the following functions:

```php
$manager = new FileManager();
$manager->fileExists('path/to/file.ext');                       //check if the file exists
$manager->clearDirectory('path/to/directory');                  //remove all files contained in this directory
$manager->createDirectory('path/to/directory',0777,true,null);  //create a directory
```