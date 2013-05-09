<?php
	include_once '../dao/GoodTypeDao.php';
	
	/**
	 * 商品类型业务逻辑类
	 * @author Administrator
	 *
	 */
	class GoodTypeService{
		private $goodTypeDao;
		
		public function __construct(){
			$this->$goodTypeDao = new GoodTypeDao();
		}
		
		/**
		 * 获得所有商品类型集合
		 */
		public function getAllType(){
			return $this->$goodTypeDao->getTypeList();
		}
	}
?>