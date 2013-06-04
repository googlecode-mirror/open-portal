<?php

	/**
	 * 商品业务逻辑类
	 * 
	 * @author Long.shangbo
	 *
	 */
	class GoodModel extends CI_Model {
		const GOOD_TABLE = "tbl_goodinfo";
		const GOOD_TYPE_TABLE = "tbl_goodtype";
		
		public function __construct()
		{
			$this->load->database();
		}
		
		/**
		 * 获得商品列表
		 */
		public function getGoodList($currPage = 1, $pageSize = 10){
			//获得总数据量
			$count_sql = "select count(*) sum from " . self::GOOD_TABLE . " where gd_del = 0";
			$count_result = $this->db->query($count_sql);
			$count = $count_result->row()->sum;
			//计算偏移量
			$page_count = ceil($count / $pageSize);
		
			if($currPage > $page_count) $currPage = $page_count;
			if($currPage < 1) $currPage = 1;
			$start = ($currPage - 1) * $pageSize;
			//查询数据
			$good_sql = "select gd.gd_id, gd.gd_zhname, gd.gd_adddate, gt.gt_name " . 
						 " from " . self::GOOD_TABLE . " gd " .
						 " inner join " . self::GOOD_TYPE_TABLE . " gt " .
						 " on gd.gt_id = gt.gt_id where gd_del = 0".
						 " limit ".$start.",".$pageSize;
		
			$data = $this->db->query($good_sql);
			$res['data'] = $data->result_array();
			$res['pageCount'] = $page_count;
			$res['count'] = $count;
			$res['currPage'] = $currPage;
			$res['pageSize'] = $pageSize;
			return $res;
		}
	}
?>