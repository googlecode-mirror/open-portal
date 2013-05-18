<?php

/** 
 * 
 * 用户中心首页
 * 
 */
class Logout extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
		//$this->load->model("uc/UserModel");
	}
	
	function index() {
		//清除session中德用户信息，跳转到首页
		$this->session->unset_userdata("user");//放入session
		redirect("/uc/Main/Index");
	}
}

?>