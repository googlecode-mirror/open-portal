<?php

/** 
 * 订单管理控制器
 */
class Order extends CI_Controller {
	/**
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("admin/OrderModel");
	}
	
	/**
	 * 获得订单列表
	 */
	public function orderList($titleId = 0, $currPage = 1, $pageSize = 10, $orderId = ''){
		if(!empty($_SESSION['adminUser'])){
			$this->load->view("admin/login");
			return;
		}
		
		$this->load->helper('form');
		
		$orderid_input = $this->input->post('orderId');
		$titleId_input = $this->input->post('titleId');
		$pageSize_input = $this->input->post('pageSize');
		
		if(!empty($orderid_input)){
			$orderId = $orderid_input;
		}
		
		if(!empty($titleId_input)){
			$titleId = $titleId_input;
		}
		
		if(!empty($pageSize_input)){
			$pageSize = $pageSize_input;
		}
		
		$data['page'] = "orderList";
		$data['titleName'] = $this->getTitle($titleId);
		$data['titleId'] = $titleId;
		$data['orderId'] = $orderId;
		$data['order'] = $this->OrderModel->getOrderList($currPage, $pageSize, $titleId, $orderId);
		$this->load->view('admin/index', $data);
	}
	
	/**
	 * 修改订单状态
	 * 
	 * @param unknown_type $status 要修改的目标状态
	 */
	public function updOder($orderId, $srcStatus = 0, $resStatus = 0){
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
		
		if($res){
			$data['msg'] = "订单状态修改成功,正在返回订单列表";
			$data['to_url'] = 'admin/Order/orderList/'.$resStatus;
		}else{
			$data['msg'] = "修改订单状态失败，正在返回订单列表";
			$data['to_url'] = 'admin/Order/orderList/'.$srcStatus;
		}
		
		$this->load->view('admin/result', $data);
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
			$this->load->view('admin/index', $data);
		}else{
			$data['msg'] = "获取订单查询失败，正在返回...";
			$data['to_url'] = 'admin/index';
			$this->load->view('admin/result', $data);
		}
	}
	
	/**
	 * 获得订单标题
	 */
	private function getTitle($titleId){
		if(empty($titleId)) return "待确认订单";
		
		switch($titleId){
			case 0:
				$title = "待确认订单";
				break;
			case 1:
				$title = "备货中订单";
				break;
			case 2:
				$title = "发货中订单";
				break;
			case 3:
				$title = "已收货订单";
				break;
			case 4:
				$title = "已作废订单";
				break;
		}
		return $title;
	}
}