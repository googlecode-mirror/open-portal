<?php

/**
 * 只是一个测试页面, 项目中不会用到
 * @author Administrator
 *
 */
class Ko extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('ec/ko', array());
	}
	
	public function test() {
		$this->load->view("ec/kotest", array());
	}
	
}