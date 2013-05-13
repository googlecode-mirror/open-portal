<?php

/** 
 * @author Grace
 * 
 */
class Item extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
	}
	
	function index($name="luo",$age = 30,$dd=1) {
		$data = array();
		$data["title"] = "ctshop home page";
		$data["name"]  = $name;
		$data["age"] = $age;
		$data["dd"] = $dd;
		$this->load->view('ec/item/index', $data);
	}
}

?>