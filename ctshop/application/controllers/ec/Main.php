<?php

/** 
 * 商城首页
 * @author timL
 * 
 */
class Main extends CI_Controller  {
	
	/**
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("ec/ItemModel");
	}
	
	function index($typeId = 0, $currency = "RMB", $orderBy = "name", $orderDirect = "asc"
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
		
		$this->load->view("ec/index", array("viewModel" => $this->po));
	}
}

?>