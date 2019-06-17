<?php
session_start();
/**
* Site Configuration
*/

define('_SITE_NAME', 'abc Fashionstore');
define('_ROOT_PATH', _DIR_);
define('ADMIN_PATH', _ROOT_PATH . "/admin");

define('_ROOT_URL','http://' . $_SERVER['HTTP_HOST']);
define('ADMIN_URL', _ROOT_URL. "/admin");




function __autoload($className) {
	$classNames = str_replace('\\', '/', $className);
	
	$classFileName = __DIR__ . "/$classNames.php";

    if(file_exists($classFileName)) {
    	include $classFileName;
    }
};
/**
*Database configuration
*/
define('_DATABASE_HOST',  		'localhost');
define('_DATABASE_USER',  		'root');
define('_DATABASE_PASSWORD', 	'');
define('_DATABASE_NAME',  		'fashionstore');
?>