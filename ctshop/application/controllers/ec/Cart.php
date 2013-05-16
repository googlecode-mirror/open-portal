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
	
	public function index() {
		$this->load->view('ec/cart', array());
	}
}

?>