<?php
ini_set('display_errors','On');
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set("Asia/Hong_Kong");
define('ROOT_PATH',  realpath(dirname(dirname(__FILE__))));
define('APPLICATION_PATH',  ROOT_PATH . '/application');
define('DEVICE_TYPE',  1);//1:mobile ; 2:desktop
header('content-Type:text/html;charset=utf-8;');
$application = new Yaf_Application(ROOT_PATH . "/conf/application.ini");
$application->bootstrap()->run();
?>
