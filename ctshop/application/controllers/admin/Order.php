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
	public function orderList($currPage = 1, $pageSize = 10){
		if(!empty($_SESSION['adminUser'])){
			$this->load->view("admin/login");
			return;
		}
		
		$data['page'] = "orderList";
		$data['titleName'] = "订单管理";
		$data['order'] = $this->OrderModel->getOrderList($currPage, $pageSize);
		$this->load->view('admin/index', $data);
	}
}