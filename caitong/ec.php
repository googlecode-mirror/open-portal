<?php

define("PHPBIZ", true);

if (!isset($_GET["act"])) {
	$_GET["act"] = "Index";
}

if (!isset($_GET["method"])) {
	$_GET["method"] = "execute";
}

$appName = "shop";

$config = array();
require './config/config.php';
//var_dump($config);
require './framework/Application.php';
require './framework/Container.php';

$app = C::startApp($appName, $config);

$app->run();
