<?php

error_reporting(E_ALL);
ini_set("display_errors", 1); 

//define('APP_PATH', realpath('./'));
define('APP_PATH', dirname(__FILE__) . '/');

function __autoload($class_name) {
    include APP_PATH.'classes/class.'.$class_name .'.php';
}

$config = new loadConfig();


?>