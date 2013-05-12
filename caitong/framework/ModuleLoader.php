<?php
//
// cloass to load a module
//

class ModuleLoader {
        
		private $appName;
		
        public function __construct() {
			$this->appName = C::ctx()->appName();
        }
        
        // 
        // @var boolean
        public function isModuleExists($moduleName) {
			$moduleName .=  "Action";
            $class_file  = $this->getLocation($moduleName);
			//echo $class_file . "<br />";
			if (file_exists($class_file)) {
				return true;
			}
			return false;
        }
        
        // 
        // @var misc
        public function loadModule($moduleName) {
			$moduleName .=  "Action";
			$class_file = $this->getLocation($moduleName);
			try {
				require_once $class_file;
			} catch (Exception $ex) {
				logger::error("can not load module" . $class_file, $ex, "ModuleLoader");
			}
			
			$mod_obj = new $moduleName;
			return $mod_obj;
        }
		
		private function getLocation($moduleName) {
			return C::ctx()->appRoot() . "/application/" . $this->appName . "/action/" . $moduleName . ".php";
		}
        
}