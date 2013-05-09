<?php
//
//  Application类
//

class Application {
	
	/**
	 ** 配置类
	 ** @var  Array
	 **/
	private $config;
	
	// 应用名称
	// @var  String
	private $appName;
	
    // 类加载程序
	private $loader;
	
	public function __construct($appName, $config = array()) {
		$this->config = $config;
		
	}
	
	// 返回配置信息
	// @var  Array
	public function getConfig() {
		return $this->config;
	}
	
	// 初始化应用程序
	// @return  
	public function init() {
		$this->initEnv();
		$this->initDatabase();
		$this->initLogger();
		return $this;
	}
	
	public function run() {
		$module = $_GET["mod"];
		$action = $_GET["act"];
		
		// TODO: can do some filter here
		
		$dispatcher = new RequestDispatch($this, $module, $action);
		$dispatcher.dispatch();
	}
	
	//
	// private methods
	//
	
	// 初始化环境参数
	private function initEnv() {
		$this->loader = new classloader();
	}
	
	// 初始化数据库
	private function initDatabase() {
		if(isset($config["db"])){
			database::init($config["db"]);
		}else{
			database::init($db_config);
		}
	}
	
	// 初始化日志
	private function initLogger() {
		logger::init(array());
	}
}
