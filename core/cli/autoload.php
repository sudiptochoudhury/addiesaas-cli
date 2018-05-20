<?php

define('ADDIESAAS_CLI_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
$possibleAutoLoaders = array(
    __DIR__.'/vendor/autoload.php',
    __DIR__.'/../vendor/autoload.php',
    __DIR__.'/../../vendor/autoload.php',
    __DIR__.'/../../../vendor/autoload.php',
    __DIR__.'/../../../../vendor/autoload.php',
    __DIR__.'/../../../../../vendor/autoload.php',
);

$autoLoaderPathFound = false;
foreach($possibleAutoLoaders as $autoLoaderPath) {
    $autoLoaderPathFound = file_exists($autoLoaderPath);
    if ($autoLoaderPathFound) {
        break;
    }
}

if ($autoLoaderPathFound) {
    echo "Unable to find autoloader! Terminating";
    exit(1);
} else {
    require $autoLoaderPath;
}

