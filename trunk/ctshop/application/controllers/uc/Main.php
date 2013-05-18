<?php

/** 
 * 
 * 用户中心首页
 * path: http://localhost/ctshop/index.php/uc/main/index/world
 * 
 */
class Main extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->view("uc/main/index");
	}
}

?>