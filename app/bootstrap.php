<?php

/*
 * This is the application's bootstrapper.
 * It is loaded when the application starts and
 * it's job is to load all the required files.
 */ 

require_once 'config/config.php';

// Autoload classes in the libraries directory
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
