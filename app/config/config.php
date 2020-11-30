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
define('SITENAME', 'your_site_name');

// Set timezone
date_default_timezone_set('America/Sao_Paulo');

// Database parameters
define('DB_HOST', 'your_db_host');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'your_db_name');

// App root
define('APPROOT', dirname(dirname(__FILE__)));

// URL root
define('URLROOT', 'http://192.168.1.2/mymvc'); //http://192.168.1.2/mymvc

// Start session
session_start();

// Debugger
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }