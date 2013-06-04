<?php

/** 
 * 商品管理控制器
 */
class Good extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("admin/GoodModel");
	}
	
	/**
	 * 获得商品列表
	 * @param unknown_type $currPage 当前页
	 * @param unknown_type $pageSize 每页显示条数
	 */
	public function goodList($currPage = 1, $pageSize = 10){
		if(!empty($_SESSION['adminUser'])){
			$this->load->view("admin/login");
			return;
		}
		
		$data['titleName'] = "商品列表";
		$data['page'] = "goodList";
		$data['good'] = $this->GoodModel->getGoodList($currPage, $pageSize);
		$this->load->view('admin/index', $data);
	}
}
?>