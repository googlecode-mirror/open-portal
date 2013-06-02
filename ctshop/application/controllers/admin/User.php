<?php

/** 
 * 用户管理控制器
 */
class User extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("admin/UserModel");
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
			$this->load->helper('url');
			$userName = $this->input->post('userName');
			$userPwd = $this->input->post('userPwd');
			$loginRes = $this->UserModel->login($userName, $userPwd);
			
			if($loginRes){
				session_start();
				$_SESSION['adminUser'] = $userName;
				$data['msg'] = "登录成功，正在跳转到后台管理页面";
				$data['to_url'] = 'admin/index';
				$data['openType'] = 1;
			}else{
				$data['msg'] = "用户名或密码错误，返回登录页面";
				$data['to_url'] = 'admin/login';
			}
			$this->load->view('admin/result', $data);
		}
	}
	
	/**
	 * 首页显示订单列表
	 */
	public function index(){
		if(!empty($_SESSION['adminUser'])){
			$this->load->view("admin/login");
			return;
		}
		
		$data['page'] = "welcome";
		$data['titleName'] = "欢迎登录";
		$this->load->view('admin/index', $data);
	}
	
	/**
	 * 获得用户列表
	 * @param unknown_type $type 0 普通用户 1 管理员
	 * @param unknown_type $status 0 正常 1:锁定 2:删除
	 * @param unknown_type $currPage 当前页
	 * @param unknown_type $pageSize 每页显示条数
	 * @param unknown_type $userName 用户名
	 */
	public function userList($status = 0, $type = 0, $currPage = 1, $pageSize = 10, $userName = ""){
		$this->load->helper('form');
		$userName_input = $this->input->post('userName');
		$type_input = $this->input->post('type');
		$pageSize_input = $this->input->post('pageSize');
		
		if(!empty($userName_input)){
			$userName = $userName_input;
		}
		
		if(!empty($type_input)){
			$type = $type_input;
		}
		
		if(!empty($pageSize_input)){
			$pageSize = $pageSize_input;
		}
		
		$data['user'] = $this->UserModel->getUserList($currPage, $pageSize, $userName, $type, $status);
		$data['page'] = 'userList';
		$data['titleName'] = '用户列表';
		$data['userName'] = $userName;
		$data['type'] = $type;
		$data['status'] = $status;
		$this->load->view('admin/index', $data);
	}
}

?>