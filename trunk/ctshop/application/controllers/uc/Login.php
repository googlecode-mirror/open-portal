<?php
/** 
 * 
 * 用户登录
 * 
 */
class Login extends CI_Controller {
	
	/**
	 * 初始化加载UserModel
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("uc/UserModel");
	}
	/**
	 * 跳转到用户登录界面
	 */
	function index() {
		$this->load->view("uc/login");
	}
	
	/**
	 * 用户登录操作
	 */
	function userLogin() {
		$param = array(
				"userName"      => $this->input->post('userName'),
				"userPwd"     => $this->input->post('userPwd')
		);
		
		$result = $this->UserModel->login($param);
		$this->session->set_userdata("user", $result);//放入session
		//$this->load->view(CTX_PATH."index.php/uc/Main");//跳转到首页
		redirect("uc/Main/Index");
	}
}

?>