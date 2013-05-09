<?php

	include_once '../../framework/dao/dao_base.php';

	/**
	 * 商品数据库访问类
	 * @author Administrator
	 *
	 */
	class GoodTypeDao extends dao_base{
		
		const TABLE_NAME = "tbl_goodtype";
		
		public function __construct($pk){
			parent::__construct($pk, self::TABLE_NAME);
		}
		
		/**
		 * 获得商品类型集合
		 */
		public function getTypeList(){
			$tableName = "tbl_goodtype";
			return parent::fetch_all();
		}
	}
?>