<?php
//
//  Application
//


define('APP_ROOT', substr(__DIR__, 0, -10));

require APP_ROOT . "/framework/classloader.php";

class Application {
        
        /**
         ** 
         ** @var  Array
         **/
        private $config;
        
        // 
        // @var  String
        private $appName;
		
		// 
		// $var Context
		private $ctx;
        
    // 
        private $loader;
        
        public function __construct($appName, $config) {
                $this->config = $config;
                $this->appName = $appName;
        }
        
        // 
        // @var  Array
        public function getConfig() {
                return $this->config;
        }
		
		public function getName() {
			return $this->appName;
		}
        
        // 
        // @return  
        public function init() {
                $this->initEnv();
                $this->initDatabase();
                $this->initLogger();
                return $this;
        }
        
        public function run() {
                $module = $_GET["act"];
                $action = $_GET["method"];
                
                // TODO: can do some filter here
                
                $dispatcher = new RequestDispatcher($this, $module, $action);
                $dispatcher->dispatch();
        }
        
		public function setContext($ctx) {
			$this->ctx = $ctx;
		}
		
        //
        // private methods
        //
        
        // 
        private function initEnv() {
			// define constants
			error_reporting(E_ALL);
			ini_set('display_errors', true);
			ini_set('html_errors', false);
			date_default_timezone_set($this->getConfig()["time_zone"]);
            $this->loader = new classloader();
        }
        
        // 
        private function initDatabase() {
                database::init($this->config["db"]);
        }
        
        // 
        private function initLogger() {
                logger::init(array());
        }
}