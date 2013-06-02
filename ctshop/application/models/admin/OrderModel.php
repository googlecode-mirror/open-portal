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
			$other_condition .= " and or_id like '%".$orderId."%' ";
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
		 	" order by or_id desc ".
		 	" limit ".$start.",".$pageSize;
		
		$data = $this->db->query($order_sql);
		$res['data'] = $data->result_array();
		$res['pageCount'] = $page_count;
		$res['count'] = $count;
		$res['currPage'] = $currPage;
		$res['pageSize'] = $pageSize;
		return $res;
	}
	
	/**
	 * 修改订单状态
	 * @param unknown_type $status 要修改的目标状态
	 */
	public function updStatus($orderId, $status){
		if(empty($orderId) || empty($status)) return 0;
		
		$upd_sql = "update " . self::ORDER_TABLE . " set or_status = ? where or_id = ?";
		$this->db->query($upd_sql, array($status, $orderId));
		return $this->db->affected_rows();
	}
	
	/**
	 * 根据订单编号获得订单详情
	 * @param unknown_type $orderId
	 */
	public function getOrderById($orderId){
		//查询订单
		$order_sql = "select * from tbl_order where or_id = ?";
		$order_res = $this->db->query($order_sql, array($orderId));
		$orderInfo['order'] = $order_res->row_array();
		
		//查询详单
		$order_detail_sql = "select * from tbl_orderdetail where or_id = ?";
		$order_detail_res = $this->db->query($order_detail_sql, array($orderId));
		$orderInfo['orderDetail'] = $order_detail_res->result_array();
		return $orderInfo;
	}
}
?>