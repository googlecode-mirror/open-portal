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
	public function getOrderList($currPage = 1, $pageSize = 10, $titleId = 0, $orderId = ''){
		$other_condition = " where or_status ='".$titleId."' ";
		
		if(!empty($orderId)){
			$other_condition .= " and or_id = '".$orderId."' ";
		}
		
		//获得总数据量
		$count_sql = "select count(*) as sum from ".self::ORDER_TABLE . $other_condition;
		$count_result = $this->db->query($count_sql);
		$count = $count_result->row()->sum;
		//计算偏移量
		$page_count = ceil($count / $pageSize);
		
		if($currPage > $page_count) $currPage = $page_count;
		if($currPage < 1) $currPage = 1;
		$start = ($currPage - 1) * $pageSize;
		//查询数据	
		$order_sql = "select or_id, or_sumprice, or_realname, or_date,".
		 	"or_status from ".self::ORDER_TABLE . $other_condition .
		 	" order by or_status asc ".
		 	" limit ".$start.",".$pageSize;
		
		$data = $this->db->query($order_sql);
		$res['data'] = $data->result_array();
		$res['pageCount'] = $page_count;
		$res['count'] = $count;
		$res['currPage'] = $currPage;
		$res['pageSize'] = $pageSize;
		return $res;
	}
}
?>