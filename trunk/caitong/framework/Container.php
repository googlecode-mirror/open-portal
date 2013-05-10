<?php
//
// Container
//



class Container {
	
	private static $app;
	private static $ctx;
	
	public static function startApp($appName, $config) {
		self::$app = new Application($appName, $config);
		self::$app->init();
		self::$ctx = new Context();
		self::$app->setContext(self::$ctx);
		return self::$app;
	}
	
	public static function app() {
		if (!isset(self::$app)) {
			throw new Exception("App not start yet!");
		}
		return self::$app;
	}
	
	public static function ctx() {
		if (!isset(self::$ctx)) {
			throw new Exception("ctx not not found!");
		}
		return self::$ctx;
	}
	
}

// shortcut class
class C extends Container {}