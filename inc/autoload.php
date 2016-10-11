<?php

require_once "Psr4AutoloaderClass.php";

$loader = new Psr4AutoloaderClass();

// register the autoloader
$loader->register();

// register the base directories for the namespace    prefix
$loader->addNamespace('Projeto\Cliente', __DIR__ . '/src/Projeto/Cliente');
 