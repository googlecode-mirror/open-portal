<?php 
/**
 * 订单管理
 * 
 * @author Long.shangbo
 *
 */
class OrderModel extends CI_Model {
	const ORDER_TABLE = "tbl_order";

	public function __construct()
	{
		$this->load->database();
	}
	
	/**
	 * 获得订单列表
	 */
	public function getOrderList($currPage = 1, $pageSize = 10){
		//获得总数据量
		$count_sql = "select count(*) as sum from ".self::ORDER_TABLE;
		$count_result = $this->db->query($count_sql);
		$count = $count_result->row()->sum;
		
		//计算偏移量
		$page_count = $count % $pageSize == 0 ? $count % $pageSize : $count % $pageSize + 1;
		
		if($currPage > $page_count) $currPage = $page_count;
		if($currPage < 1) $currPage = 1;
		$start = ($currPage - 1) * $pageSize;
		//查询数据	
		$order_sql = "select * from ".self::ORDER_TABLE." limit ".$start.",".$pageSize;
		$data = $this->db->query($order_sql);
		$res['data'] = $data->result_array();
		$res['pageCount'] = $page_count;
		$res['count'] = $count;
		$res['$currPage'] = $currPage;
		$res['pageSize'] = $pageSize;
		return $res;
	}
}
?>