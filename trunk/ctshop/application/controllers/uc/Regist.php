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
	}
	
	function index() {
		$this->load->view("uc/regist");
	}
	
	function regist() {
		$userName = $this->input->post('userName');
		$userPwd = $this->input->post('userPwd');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$telNo = $this->input->post('telNo');

		
		if ($userName == '111') {
			echo "$userName '==' $userPwd '==' $email '==' $country '==' $telNo";
		} else {
			echo 'Regis Faild!';
		}
		//$this->load->view("uc/regist");
	}
}

?>