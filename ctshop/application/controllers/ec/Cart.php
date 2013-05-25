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
		$this->load->library("cart");
		$this->load->library("FormSerial");
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
		
		
		$this->cart->insert($cartItem);
		$cartLines = $this->_getCartLines();
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
		$order = array();
		$order["address"]   = "" . $_POST["address"];
		$order["telephone"] = "" . $_POST["telephone"];
		$order["postcode"]  = "" . $_POST["postcode"];
		$order["realname"]  = "" . $_POST["realname"];
		$order["email"]     = "" . $_POST["email"];
		
		if (!$this->_validateOrder($order)) {
			// 不应该走到这里, 前台JS会验证输入合法性
			echo 'order info is not valid';
			// TODO: 提示用户重新输入
		}
		
		$cartLines = $this->_getCartLines();
		if (empty($cartLines)) {
			throw new Exception('there is no items in shopping cart');
		}
		
		// 生成订单ID
		$orderId = $this->FormSerial->nextId("order");
		
		if ($this->_createOrder($orderId, $order, $cartLines)) {
			// 成功创建订单
			$this->load->view('ec/orderCreateSuccess', array(
					"orderId" => $orderId
			));
		} else {
			// 创建订单失败
			echo "Fail to create the order !";
		}
		
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
	
	//
	// private methods:
	//
	
	private function _validateOrder(array $order) {
		//TODO: validate the order
		return true;
	}
	
	private function _getCartLines() {
		$cartLines = array(); // $this->cart->contents();
		foreach ($this->cart->contents() as $key => $value) {
			$cartLines[] = $value;
		}
		return $cartLines;
	}
	
	private function _createOrder($orderId, $order, $orderDetail) {
		
	}
	
 }

?>