<?php

/** 
 * 
 * 用户中心首页
 * path: http://localhost/ctshop/index.php/uc/main/index/world
 * 
 */
class Login extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->view("uc/login");
	}
	
	function login() {
		$userName = $this->input->post('userName');
		$userPwd = $this->input->post('userPwd');

		if ($userName == '111' && $userPwd == '222') {
			echo 'Login Success!';	
		} else {
			echo 'Login Faild!';
		}
		
		//$this->load->view("uc/login");
	}
}

?>