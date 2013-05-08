<?php
//
//  请求分发器
//

class RequestDispatcher {
	
	private $app;
	
	private $module;
	
	private $action;
	
	public function __construct($app, $module, $action) {
		$this->app = $app;
		$this->module = $module;
		$this->action = $action;
	}
	
	public function dispatch() {
		$moduleObj = loadModule($this->module);
		
		if (@moduleObj) {
			executeAction($moduleObj, $this->action);
		}
	}
	
	private function loadModule($module) {
		$loader = new ModuleLoader();
		
		if (!$loader.isModuleExists($module)) {
			throw new Exception("$module not found");
		}
		
		return $loader.loadModule($module);
	}
	
	private function executeAction($obj, $action) {
		return $obj->$action();
	}
	
}