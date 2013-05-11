<?php
//
//  请求分发
//

class RequestDispatcher {
        
        private $app;
		
		private $appName;
        
        private $module;
        
        private $method;
        
        public function __construct($app, $module, $method) {
            $this->app = $app;
			$this->appName = $app->getName();
            $this->module = $module;
            $this->method = $method ;
        }
        
		//分发请求, 1. 查找Aciton 类 2. 调用方法 3. 调用view 生成结果
        public function dispatch() {
			$moduleObj = $this->loadModule($this->module);
			
			if ($moduleObj) {
				$result = $this->executeAction($moduleObj, $this->method);
			}
			if ($result) {
				$this->renderView($result);
			}
        }
        
		// 加载Action类
        private function loadModule($module) {
			$loader = new ModuleLoader();
			
			if (!$loader->isModuleExists($module)) {
					throw new Exception("$module not found");
			}
			
			return $loader->loadModule($module);
        }
        
		// 调用Action里的方法
        private function executeAction($obj, $method) {
			
			if (!method_exists($obj, $method)) {
				throw new Exception("$method not found");
			}
			//return call_user_method($obj, $method);
            return $obj->$method();
        }
		
		// 
		private function renderView($data) {
			if (!isset($data["view"])) {
				$data["view"] = "index";
			}
			$theme     = "default";
			$view_name = $data["view"] . ".phtml";
			$view_page = APP_ROOT . "/theme/$theme/" . $this->appName . "/" . $this->module . "/" . $view_name;
			$viewModel = ViewModel::fromArray($data);
			if (file_exists($view_page)) {
				logger::info("render page: $view_page");
				require $view_page;
			} else {
				throw new Exception("$view_page  > not found!");
			}
		}
        
}