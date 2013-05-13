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
	
	function index($name = "world") {
		// 加载model类
		//  $this->load->model('admin/Main_model');
		$data["name"] = $name;
		$this->load->view("uc/main/index", $data);
	}
}

?>