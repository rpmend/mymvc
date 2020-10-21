<?php

/*
 * This is the application's configuration file.
 * 
 * It is loaded by the bootstrapper when the 
 * application starts.
 * 
 * It's job is to define the constant variables 
 * used through out the application.
 */ 

// Site name
define('SITENAME', 'MyMVC');

// Database parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mymvc');

// App root
define('APPROOT', dirname(dirname(__FILE__)));

// URL root
define('URLROOT', 'http://localhost/mymvc');