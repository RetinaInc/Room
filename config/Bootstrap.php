<?php

$composer = 'vendor/autoload.php';
if (! file_exists($composer)) {
    throw new RuntimeException('Autoloader file not found, did you run composer install?');
}

ini_set('display_errors', true);
error_reporting(E_ALL);

require $composer;