<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP-ENV', getenv('APPLICATION_ENV')?: 'production');
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', ROOT_PATH . DS .'src');
define('PUBLIC_PATH', SRC_PATH . DS .'public');
define('VENDOR_PATH', SRC_PATH . DS .'vendor');
define('APP_PATH', SRC_PATH . DS .'application');

require_once VENDOR_PATH . DS . 'autoload.php';

$autoloader = Zend_Loader_Autoloader::getInstance();

$application = new Zend_Application(
		'development',
		APP_PATH . DS . 'Core' . DS . 'application.in'
);

$application->bootstrap();
$application->run();