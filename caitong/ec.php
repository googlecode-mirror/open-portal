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

$uri = $_SERVER["REQUEST_URI"];
logger::info("uri: " . $uri);
$ctx_path = substr($uri, 0, strrpos($uri, "/"));
logger::info("ctx_path: " . $ctx_path);

define("CTX_PATH", $ctx_path);
logger::info("CTX_PATH: " . CTX_PATH);

$app->run();
