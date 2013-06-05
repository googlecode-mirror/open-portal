<?php
/**
 * @author jianzc
 */
class OrderModel extends CI_Model {
	const ORDER_TABLE = "tbl_order";
	
	function __construct() {
		parent::__construct ();
		// 连接数据库
		$this->load->database ();
	}
	
		/**
	 * 获得用户订单列表
	 */
	public function getUserOrderList($currPage = 1, $pageSize = 10, $orderId = '',$userId = 0){
		$other_condition = " where u_id =".$userId." ";
	
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
				" order by or_date desc ".
				" limit ".$start.",".$pageSize;
	
		$data = $this->db->query($order_sql);
		$res['data'] = $data->result_array();
		$res['pageCount'] = $page_count;
		$res['count'] = $count;
		$res['currPage'] = $currPage;
		$res['pageSize'] = $pageSize;
		
		//查询订单下的商品列表
		$goodinfo_sql = "select t3.or_id,t1.* from tbl_goodinfo t1 ".
				"join tbl_orderdetail t2 on t1.gd_id = t2.gd_id ".
				" join (select * from tbl_order ". $other_condition ." order by or_date desc limit ".
		        $start.",".$pageSize.")t3 on t2.or_id = t3.or_id order by t3.or_id,t1.gd_id";
		
		$goodinfodata = $this->db->query($goodinfo_sql);
		
		$res['goodInfoData'] = $goodinfodata->result_array();
		
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
		//$order_detail_sql = "select * from tbl_orderdetail  where or_id = ?";
		$order_detail_sql =<<<SQL
		 	select t1.gd_littleImg,t1.od_goodName,t1.od_count,t1.od_sumprice,t2.gd_remark,t2.gd_zhName,t3.gt_name 
				from tbl_orderdetail t1 
				join tbl_goodinfo t2 on t1.gd_id = t2.gd_id 
				join tbl_goodtype t3 on t3.gt_id = t2.gd_model  
				where or_id = ?;
SQL;
				
		$order_detail_res = $this->db->query($order_detail_sql, array($orderId));
		$orderInfo['orderDetail'] = $order_detail_res->result_array();
		return $orderInfo;
	}
}