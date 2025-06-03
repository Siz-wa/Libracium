<?php
use Dotenv\Dotenv;

require_once __DIR__.'/../../vendor/autoload.php';

// for loading .env variables 
$dotenv = Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->load();

// Default Timezone
date_default_timezone_set('UTC');

// Global error handler to cater for the unhandled exceptions
// set_exception_handler(function($e){
//     http_response_code(500);
//     echo 'Unhandled Exception (SIZA):'.$e->getMessage();
// });

set_error_handler(function ($severity, $message, $file, $line){
    throw new ErrorException($message, 0 , $severity, $file,$line);
});

session_start();


?>