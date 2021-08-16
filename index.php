<?php
session_start();
define('ROOT', dirname(__FILE__));  

error_reporting(E_ALL);

require_once(ROOT.'/config/router.php'); //подключаю роутер

require_once(ROOT.'/config/db.php'); //подключаю базу

$router = new router();  
$router->run();  