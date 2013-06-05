<?php
/** 
 * 
 * 用户登录
 * 
 */
class Order extends CI_Controller {
	
	/**
	 * 初始化加载UserModel
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("uc/OrderModel");
	}
	/**
	 * 跳转到用户登录界面
	 */
	function index() {
		$this->load->view("uc/order");
	}
	
	/**
	 * 获得当前用户订单列表
	 */
	public function orderList($currPage = 1, $pageSize = 10, $orderId = ''){
		if(!empty($_SESSION['user'])){
			$this->load->view("uc/login");
			return;
		}
		$user = $this->session->userdata("user");
		$userID = $user['u_id'];
		
		$this->load->helper('form');
		$orderid_input = $this->input->post('orderId');
		$pageSize_input = $this->input->post('pageSize');
		$currPage_input = $this->input->post('currPage');
		
		if(!empty($orderid_input)){
			$orderId = $orderid_input;
		}
		
		if(!empty($pageSize_input)){
			$pageSize = $pageSize_input;
		}
		
		if(!empty($currPage_input)){
			$currPage = $currPage_input;
		}
		
		$data['page'] = "orderList";
		$data['orderId'] = $orderId;
		$data['order'] = $this->OrderModel->getUserOrderList($currPage, $pageSize, $orderId, $userID);
		$this->load->view('uc/order', $data);
	}
	
	/**
	 * 修改订单状态
	 *
	 * @param unknown_type $status 要修改的目标状态
	 */
	public function updOder($orderId, $resStatus){
		$res = FALSE;
	
		if(empty($orderId) || empty($orderId)){
			$res = FALSE;
		}else{
			$resCount = $this->OrderModel->updStatus($orderId, $resStatus);
				
			if($resCount > 0){
				$res = TRUE;
			}else{
				$res = FALSE;
			}
		}
	
		echo $res;
	}
	
	/**
	 * 根据订单编号获得订单详情
	 * @param unknown_type $orderId
	 */
	public function orderInfo($orderId){
		$res = FALSE;
	
		if(empty($orderId)){
			$res = FALSE;
		}else{
			$data['order'] = $this->OrderModel->getOrderById($orderId);
				
			if(!isset($data['order'])){
				$res = FALSE;
			}else{
				$res = TRUE;
			}
		}
	
		if($res){
			$data['page'] = "orderDetail";
			$data['titleName'] = "订单详情";
			$this->load->view('uc/orderDetail', $data);
		}else{
			echo 'bbbbbbbbbbbbbbbbb';
			$data['msg'] = "获取订单查询失败，正在返回...";
			$data['to_url'] = 'uc/order';
			$this->load->view('uc/result', $data);
		}
	}
}

?>