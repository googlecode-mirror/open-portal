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
		$this->load->model("uc/UserModel");
	}
	
	function index() {
		$this->load->view("uc/login");
	}
	
	function login() {
		//$userName = $this->input->post('userName');
		//$userPwd = $this->input->post('userPwd');

		$param = array(
				"userName"      => $this->input->post('userName'),
				"userPwd"     => $this->input->post('userPwd')
		);
		
		$result = $this->UserModel->login($param);
		if ($result == NULL) {
			echo 'regist error!';
		} else {
			//$result->u_name;//放入session
			$result->u_lock;
			$result->u_del;
			if ($result->u_lock == 1) {
				echo 'user locked!';
			} else if ($result->u_del == 1) {
				echo 'user deleted!';
			} else {
				echo 'login success!';
			}
		}
		//$this->load->view("uc/login");
	}
}

?>