<?php

require "classloader.php";

/**
 * 容器类， 用来提供整个请求中运行环境， 所需要的信息等等
 * @author TimL
 *
 */
class Container {
	// 应用程序
	private static $app;
	// 上下文对象
	private static $ctx;
	
	private static $loader;
	
	/**
	 * 启动Application，初始化并出来请求
	 * @param unknown $appName  当前应用名称
	 * @param unknown $config  配置信息
	 * @return Application  
	 */
	public static function startApp($appName, $config) {
		
		self::$loader = new classloader();
		
		self::$ctx = new Context($appName);
		
		self::$app = new Application($config);
		self::$app->init();
		self::$app->setContext(self::$ctx);
		return self::$app;
	}
	
	/**
	 * 返回当前Application
	 * @throws Exception
	 * @return Application
	 */
	public static function app() {
		if (!isset(self::$app)) {
			throw new Exception("App not start yet!");
		}
		return self::$app;
	}
	
	/**
	 * 当前上下文
	 * @throws Exception
	 * @return Context
	 */
	public static function ctx() {
		if (!isset(self::$ctx)) {
			throw new Exception("ctx not not found!");
		}
		return self::$ctx;
	}
	
	/**
	 * 返回表名
	 * @param unknown $name
	 * @return number
	 */
	public static function tableName($name) {
		$cfg = self::app()->getConfig();
		$tablePrefix = $cfg["table_prefix"];
		return $tablePrefix . '_' . $cfg["tables"][$name];
	}
	 
}

// shortcut class
class C extends Container {}