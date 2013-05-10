<?php
//
// 实体类, 
//

class BaseModel {
	protected $data = array();
	
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}
	
	public function __get($name) {
		return $this->data[$name];
	}
	
	public function __isset($name) {
		isset($this->data[$name]);
	}
	
	public function __unset($name) {
		unset($this->data[$name]);
	}
}
