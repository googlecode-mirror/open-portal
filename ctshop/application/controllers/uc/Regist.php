<?php

/** 
 * 
 * 用户注册
 * 
 */
class Regist extends CI_Controller {
	
	/**
	 * 初始化加载UserModel
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("uc/UserModel");
	}
	
	/**
	 * 跳转到用户注册界面
	 */
	function index() {
		$this->load->view("uc/regist");
	}
	
	/**
	 * Ajax 请求注册的用户是否已在数据库存在
	 */
	function checkUserExist() {
		$param = array(
				"userName" => $this->input->post('userName')
		);
		
		$isExist = $this->UserModel->checkUserExist($param);
		if ($isExist) {
			echo '1';
		} else {
			echo '0';
		}
	}
	
	/**
	 * 用户注册
	 * return: -1注册失败，-2注册用户存在，1注册成功
	 */
	function userRegist() {
		$param = array(
				"userName"      => $this->input->post('userName'),
				"userPwd"     => $this->input->post('userPwd'),
				"email" => $this->input->post('email'),
				"country"    => $this->input->post('country'),
				"telNo"    => $this->input->post('telNo')
		);
		$isExist = $this->UserModel->checkUserExist($param);
		if ($isExist) {
			echo '0'; 
		} else {
			$result = $this->UserModel->registUserInfo($param);
			if ($result != NULL) { //注册成功 ，把用户信息保存到session中，直接跳转到主页，不想要登录
				$this->session->set_userdata("user", $result);//放入session
				echo '1';
			} else {
				echo '-1';
			}
		}
		
	}
}

?>