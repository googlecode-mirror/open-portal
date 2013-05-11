<?php
//
//	
//

class Context {
	
	private $appRoot;
	private $appName;
	
	public function __construct($appName) {
		$this->appName = $appName;	
	}
	
	public function appName() {
		return $this->appName;
	}
	
	//
	public function appRoot() {
		if (!isset($appRoot)) {
			$this->appRoot = APP_ROOT;
		}
		return $this->appRoot;
	}
	
	public function request() {
	
	}
	
	public function session() {
	
	}
	
}