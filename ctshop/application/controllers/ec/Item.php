<?php

/** 
 * 商品列表,商品详情
 * @author timL
 * 
 */
class Item extends CI_Controller {
	
	/**
	 * 构造函数,加载模块
	 */
	function __construct() {
		parent::__construct();
		
		$this->load->model("ec/ItemModel");
	}
	
	/**
	 * 显示商品列表
	 */
	function showlist($typeId = 0, $currency = "RMB", $orderBy = "name", $orderDirect = "asc"
			, $page_size = 12, $page_index = 1) {
		
		$pageUrl = substr($_SERVER["REQUEST_URI"], 0 , strpos($_SERVER["REQUEST_URI"],"showlist" ) + strlen("showlist") + 1);
		// load the good types
		$typeTree = $this->ItemModel->getItemTypeTree();
		
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
				"typeTree" => $typeTree,
				"currency" => $currency,
				"typeId"   => $typeId,
				"orderBy"  => $orderBy,
				"orderDirect" => $orderDirect,
				"pageUrl" => $pageUrl
		));
		
		//$this->dump();
		
		$this->load->view("ec/itemlist", array("viewModel" => $this->po));
		//var_dump($items);
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