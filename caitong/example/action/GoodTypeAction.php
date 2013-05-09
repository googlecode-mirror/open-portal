<?php
	require_once '../service/GoodTypeService.php';
	
	class GoodTypeAction{
		private $goodTypeService;
		
		public function __construct(){
			$this->goodTypeService = new GoodTypeService();
		}
		
		/**
		 * 获得所有商品类型集合
		 */
		public function getTypeList(){
			return $this->goodTypeService->getAllType();
		}
	}
?>