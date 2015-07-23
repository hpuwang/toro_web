<?php
define("ROOT_PATH", __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define("ENVIRONMENT", isset($_SERVER['APP_ENV']) ? $_SERVER['APP_ENV'] : "developer");
require_once ROOT_PATH . '/vendor/autoload.php';
require_once ROOT_PATH . "/lib/tr/init.php";
tr_init::getInstance()->create();
require_once ROOT_PATH . "/task.php";
tr_hook::fire("task");
