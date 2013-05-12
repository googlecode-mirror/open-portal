<?php

/** 
 * 商品列表Action
 * @author TimL
 * 
 */

require_once APP_ROOT . '/application/shop/dao/GoodsDao.php';
require_once APP_ROOT . '/application/shop/service/GoodsService.php';

class GoodsListAction {
	
	/**
	 * 商品列表页面
	 */
	public function execute() {
		$service = new GoodsService();
		 
		// load the good types
		$typeTree = $service->getGoodsTypeTree();
		
		// load the items
		$typeId      = isset($_REQUEST["typeId"]) ? $_REQUEST["typeId"] : 0;
		
		$orderBy     = isset($_REQUEST["order_by"]) ? $_REQUEST["order_by"] : "name";
		$orderDirect = isset($_REQUEST["order_direct"]) ? $_REQUEST["order_direct"] : "ASC";
		
		$page_index  = isset($_REQUEST["page_index"]) ? $_REQUEST["page_index"] : 1;
		$page_size   = isset($_REQUEST["page_size"]) ? $_REQUEST["page_size"] : 12;
		$pageInfo    = array("page_index" => $page_index, "page_size" => $page_size);
		
		$currency    = isset($_REQUEST["currency"]) ? $_REQUEST["currency"] : "RMB";
		
		$param = array(
				"typeId"      => $typeId,
				"orderBy"     => $orderBy,
				"orderDirect" => $orderDirect,
				"pageInfo"    => $pageInfo
		);
		$items = $service->getGoodsList($param);
		
		$itemCount = $items["count"];
		$totalPage = intval($itemCount / $page_size) + 1;
		
		//var_dump($items);
		return array(
				"view"     => "goodsList",
				"totalPage" => $totalPage,
				"itemCount" => $items["count"],
				"pageIndex" => $page_index,
				"pageSize"  => $page_size,
				"items"    => $items["data"],
				"typeTree" => $typeTree,
				"currency" => $currency,
				"typeId"   => $typeId,
				"orderBy"  => $orderBy,
				"orderDirect" => $orderDirect
		);
	}
}

?>