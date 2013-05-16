<?php

/** 
 * 商品列表,商品详情
 * @author timL
 * 
 */
class Item extends CI_Controller {
	
	private $typeTree;
	
	/**
	 * 构造函数,加载模块
	 */
	function __construct() {
		parent::__construct();
		
		$this->load->model("ec/ItemModel");
		// load the good types
		$this->typeTree = $this->ItemModel->getItemTypeTree();
	}
	
	function detail($itemId) {
		$item = $this->ItemModel->getItemDetail($itemId);
		
		$this->load->library("PropertyObject", NULL, 'po');
		
		$this->po->putArray(array(
				"typeTree" => $this->typeTree,
				"pageUrl" => $this->_pageUrl("detail"),
				"item" => $item
				));
		//var_dump($item);
		$this->load->view("ec/itemdetail", array("viewModel" => $this->po));
	}
	
	/**
	 * 显示商品列表
	 */
	function showlist($typeId = 0, $currency = "RMB", $orderBy = "name", $orderDirect = "asc"
			, $page_size = 12, $page_index = 1) {
		
		$pageInfo    = array("page_index" => $page_index, "page_size" => $page_size);
		$param = array(
				"typeId"      => $typeId,
				"orderBy"     => $orderBy,
				"orderDirect" => $orderDirect,
				"pageInfo"    => $pageInfo
		);
		
		// load the items
		$items = $this->ItemModel->getItemList($param);
		
		$itemCount = $items["count"];
		$totalPage = intval($itemCount / $page_size) + 1;
		
		$this->load->library("PropertyObject", NULL, 'po');
		
		$this->po->putArray(array(
				"totalPage" => $totalPage,
				"itemCount" => $items["count"],
				"pageIndex" => $page_index,
				"pageSize"  => $page_size,
				"items"    => $items["data"],
				"typeTree" => $this->typeTree,
				"currency" => $currency,
				"typeId"   => $typeId,
				"orderBy"  => $orderBy,
				"orderDirect" => $orderDirect,
				"pageUrl" => $this->_pageUrl("showlist")
		));
		
		//$this->dump();
		
		$this->load->view("ec/itemlist", array("viewModel" => $this->po));
		//var_dump($items);
	}
	
	/**
	 * 返回当前页面地址, 除去参数外的地址
	 * @param unknown $method
	 * @return string
	 */
	private function _pageUrl($method) {
		
		return substr($_SERVER["REQUEST_URI"], 0 , strpos($_SERVER["REQUEST_URI"], $method ) + strlen($method) + 1);
	}
	
	/**
	 * 测试页面
	 */
	function index($name="luo",$age = 30,$dd=1) {
		$data = array();
		$data["title"] = "ctshop home page";
		$data["name"]  = $name;
		$data["age"] = $age;
		$data["dd"] = $dd;
		$this->load->view('ec/item/index', $data);
	}
	
	function dump () {
		echo  ' <br> <h1> GETS: </h1> <br>';
		var_dump($_GET);
		
		echo  ' <br> <h1> POSTS: </h1> <br>';
		var_dump($_POST);
		
		echo  ' <br> <h1> REQUEST: </h1> <br>';
		var_dump($_REQUEST);
		
		echo  ' <br> <h1> SERVER: </h1> <br>';
		var_dump($_SERVER);
		
		echo  ' <br> <h1> ENV: </h1> <br>';
		var_dump($_ENV);
	}
}

?>