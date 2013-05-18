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
		
		if(!empty($orderid_input)){
			$orderId = $orderid_input; 
		}
		
		$data['page'] = "orderList";
		$data['titleName'] = $this->getTitle($titleId);
		$data['titleId'] = $titleId;
		$data['orderId'] = $orderId;
		$data['order'] = $this->OrderModel->getOrderList($currPage, $pageSize, $titleId, $orderId);
		$this->load->view('admin/index', $data);
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