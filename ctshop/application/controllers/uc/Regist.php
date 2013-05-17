<?php

/** 
 * 
 * 用户中心首页
 * path: http://localhost/ctshop/index.php/uc/main/index/world
 * 
 */
class Regist extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("uc/UserModel");
	}
	
	function index() {
		$this->load->view("uc/regist");
	}
	
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
	
	function regist() {
		$param = array(
				"userName"      => $this->input->post('userName'),
				"userPwd"     => $this->input->post('userPwd'),
				"email" => $this->input->post('email'),
				"country"    => $this->input->post('country'),
				"telNo"    => $this->input->post('telNo')
		);
		//$userName = $this->input->post('userName');
		//$userPwd = $this->input->post('userPwd');
		//$email = $this->input->post('email');
		//$country = $this->input->post('country');
		//$telNo = $this->input->post('telNo');
		
		$isExist = $this->UserModel->checkUserExist($param);
		if ($isExist) {
			echo 'user is exist! can not regist!';
		} else {
			$result = $this->UserModel->registUserInfo($param);
			if ($result > 0) {
				echo 'regist success!';
			} else {
				echo 'regist faild!';
			}
		}
		//$this->load->view("uc/regist");
	}
}

?>