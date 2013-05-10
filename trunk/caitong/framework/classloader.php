<?php
//
//  用来加载类
//  必须先定义CLASS_PATH常量
//

//if (!defined('CLASS_PATH')) {
//	exit("CLASS_PATH not defined!");
//}

class classloader {
	protected $class_path;
	
	public function __construct($class_path = false) {
		/*
		if ($class_path) {
			$this->class_path = $class_path;
		} else {
			$this->class_path = CLASS_PATH;
		} */
		spl_autoload_register(array($this,'load_class'));
	}
	
	//根据类名加载指定的类
	public function load_class($class) {
		/*
		if ($class) {
			$class = strtolower($class);
			set_include_path($this->class_path);
			spl_autoload_extensions(".php");
			spl_autoload($class);
		} */
		
		//$class = strtolower($class);
		$dir = APP_ROOT . "/framework/";
		$class_file = $dir.$class.".php";
		//echo $class_file;
		// 先看看是否在framework目录下
		if (!file_exists($class_file)) {
			if (strpos($class, "_") !== false) {
				list($folder) = explode("_", $class);
				$class_file = $dir . $folder . "/" . $class . ".php";
				//echo "<br>".$class_file;
				if (!file_exists($class_file)) {
					$class_file = $this->locate_class($class, $dir);
				}
			} else {
				$class_file = $this->locate_class($class, $dir);
			}
		}
		
		if ($class_file) {
			try {
				include $class_file;
				return true;
			} catch (Exception $ex) {
				// TODO: ex handle here
				throw $ex;
			}
		}
	}
	
	private function locate_class($class, $path) {
		//$path = APP_ROOT . "/framework"
		$dir = opendir($path);
		while (($f = readdir($dir)) !== false) {
			if ("." === $f || ".." === $f) {
				continue;
			}
			if (is_dir($path."/".$f)) {
				$class_file = $path . "/" . $f . $class . ".php";
				if (file_exists($class_file)) {
					return $class_file;
				} else {
					return $this->locate_class($class, $path."/".$f);
				}
			}
		}
		return false;
	}
}


?>