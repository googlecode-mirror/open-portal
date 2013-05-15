<?php

/** 
 * 
 * 后台管理首页
 * path: http://localhost/ctshop/index.php/admin/Main/login/
 */
class Main extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
	}
	
	function login() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('userName', 'userName', 'required');
		$this->form_validation->set_rules('userPwd', 'userPwd', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view("admin/login", null);
		}
		else
		{
			$this->load->view('admin/index');
		}
	}
}

?>