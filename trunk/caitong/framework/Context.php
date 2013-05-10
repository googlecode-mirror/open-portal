<?php
//
//	
//

class Context {
	
	private $appRoot;
	
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