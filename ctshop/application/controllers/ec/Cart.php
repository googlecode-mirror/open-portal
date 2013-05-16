<?php

/** 
 * 购物车页面
 * @author timL
 * 
 */
class Cart extends CI_Controller {
	
	/**
	 */
	function __construct() {
		parent::__construct();
	}
	
	/**
	 * 现实购物车内容
	 */
	public function index() {
		$this->load->view('ec/cart', array());
	}
	
	/**
	 * 添加物品到购物车
	 * @param unknown $itemId  物品ID
	 * @param unknown $qty   数量
	 */
	public function addItem($itemId, $qty) {
		$this->load->model("ec/ItemModel");
		$item = $this->ItemModel->getItemDetail($itemId);
		
		$cartItem = array(
				"id"    => $item["itemId"],
				"name"  => $item["zhName"],
				"price" => $item["RMB"],
				"image" => $item["littleImg"],
				"qty"   => $qty
		);
		
		$this->load->library("cart");
		$this->cart->insert($cartItem);
		$cartLines = array(); // $this->cart->contents();
		foreach ($this->cart->contents() as $key => $value) {
			$cartLines[] = $value;
		}
		//echo json_encode($cartLines);
		$this->load->view('ec/cart', array(
				"cartLines" => $cartLines
		));
	}
	
	/**
	 * 购物车结算
	 */
	public function checkout() {
		
	}
	
	/**
	 * 提交订单
	 */
	public function submit() {
		
	}
	
	/**
	 * 查询购物车概况
	 */
	public function summary() {
		
	}
	
	/**
	 * 更新数量
	 */
	public function updateQty() {
		
	}
 }

?>