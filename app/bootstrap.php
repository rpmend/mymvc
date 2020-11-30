<?php

/*
 * This is the application's bootstrapper.
 * It is loaded when the application starts and
 * it's job is to load all the required files.
 */ 

require_once 'config/config.php';

// Autoload classes in the libraries and models directory
spl_autoload_register(function ($className) {
    if (file_exists('../app/libraries/' . $className . '.php')) {
        require_once 'libraries/' . $className . '.php';
    }

    if (file_exists('../app/models/' . $className . '.php')) {
        require_once 'models/' . $className . '.php';
    }    
});

// Load helpers
require_once 'helpers/Messages.php';
