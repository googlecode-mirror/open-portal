<?php

/**
 * 
 * @author timL
 *
 */
class ItemModel extends CI_Model {
	
	//var $db;
	
	function __construct() {
		parent::__construct();
		
		// 连接数据库
		$this->load->database();
		
		//$this->db = new CI_DB_driver();
	}
	
	//
	// service methods
	//
	
	/**
	 * 分页查询商品列表
	 * 返回:
	 * array(
	 *     count      => $count,
	 *     data       => $goodList
	 * )
	 * @param array $param  参数数组: key有typeId orderBy orderDirect pageInfo
	 * @return array
	 */
	public function getItemList($param) {
		$typeId      = intval($param["typeId"]);
		$orderBy     = $param["orderBy"];
		$orderDirect = $param["orderDirect"];
		$pageInfo    = $param["pageInfo"];
	
		// 查询子商品类别
		if ($typeId > 0) {
			$typeList = $this->querySubTypes($typeId);
			$typeIds = array();
			$typeIds[] = $typeId;
			foreach ($typeList as $key => $value) {
				$typeIds[] = $value["id"];
			}
			$typeId = $typeIds;
		}
	
		// 查询总数
		$itemCount = $this->queryItemCount($typeId);
	
		// 分页查询商品列表
		$itemList  = $this->queryItemList($typeId, $orderBy, $orderDirect, $pageInfo);
	
		return array(
				"count" => $itemCount,
				"data"  => $itemList,
		);
	}
	
	/**
	 * 查询指定ID的商品详细信息
	 * @param unknown $goodId  商品ID
	 * @return array
	 */
	public function getItemDetail($itemId) {
		$item = $this->queryItemDetail($itemId);
		return $item;
	}
	
	/**
	 * 查询商品类型, 按照层次返回结果, 目前只支持两层
	 * 返回格式为:
	 * array(
	 *   0 => array (
	 *       "id" => 1,
	 *       "name" => "aaa",
	 *       "parentId" => 0,
	 *       "children" => array(
	 *       	0 => array(
	 *       	"id" => 1,
	 *          "name" => "aaa",
	 *          "parentId" => 0,
	 *         )
	 *       )
	 *   )
	 * )
	 * @param integer $typeId 父类型ID, 0表示返回所有
	 */
	public function getItemTypeTree() {
		$typeTree = array();
		$types = $this->queryAllTypes();
	
		// get the root type first
		foreach ($types as $k => $type) {
			if ($type["parentId"] <=0) {
				$typeTree[] = $type;
				unset($types[$k]);
			}
		}
	
		// fill the child types
		foreach ($typeTree as $k => & $root) {
			$children = array();
			foreach ($types as $k2 => $type) {
				if ($root["id"] === $type["parentId"]) {
					$children[] = $type;
				}
			}
			$root["children"] = $children;
		}
	
		return $typeTree;
	}
	
	
	//
	//  dao methods
	//
	
	/**
	 * 查询某个类别产品个数
	 * @param number|array $typeId, 商品类型ID, 如果是多个ID必须用数组
	 */
	public function queryItemCount($typeId = 0) {
		$table = $this->db->dbprefix("goodInfo"); //C::tableName("goodInfo");
		$sql = "SELECT COUNT(*) count FROM $table WHERE 1 ";
	
		if (!is_array($typeId)) {
			$typeId = intval($typeId);
		}
		if ($typeId) {
			$sql .= " AND " . $this->field("gt_id", $typeId) ;
		}
		$row = $this->query_one($sql);
		return (empty($row)) ? 0 : $row["count"];
	}
	
	/**
	 * 查询商品列表
	 * @param int $typeId  商品类型ID
	 * @param string $currency 货币
	 * @param string $orderCol  排序的列
	 * @param string $orderDirect 排序方向：ASC  DSC
	 * @param array $pageInfo  分页信息
	 * @return multitype:
	 */
	public function queryItemList($typeId, $orderBy, $orderDirect, $pageInfo = array()) {
	
		// get table ame
		$tableGoodInfo = $this->db->dbprefix("goodInfo");
		$tableGoodType = $this->db->dbprefix("goodType");
		$tableGoodPrice = $this->db->dbprefix("goodPrice");
	
		// get the where condition
		$where = "  1 ";
		if ($typeId) {
			$where .= " AND " . $this->field('t.gt_id', $typeId);
		}
	
		// get order by colum
		$orderCol = "";
		switch ($orderBy) {
			case "price":
				$orderCol = "RMB";
				break;
			case "name":
				$orderCol = "gd_zhName";
				break;
		}
	
		// order
		$orderDirect = strtoupper($orderDirect);
		if (!$orderDirect || "ASC" == $orderDirect) {
			$orderDirect = " ASC ";
		} else {
			$orderDirect = " DESC ";
		}
	
		// build the sql
		$sql = <<<SQL
SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM $tableGoodInfo t
		INNER JOIN $tableGoodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN $tableGoodPrice t3 on t.gd_id = t3.gd_id
		WHERE $where
		AND gd_del = 0
		ORDER BY $orderCol $orderDirect
SQL;
		// add paging info
		if (!empty($pageInfo)) {
			$sql .= $this->paging($pageInfo["page_index"], $pageInfo["page_size"]);
		}
	
		return $this->query_all($sql);
	
	}
	
	/**
	 * 返回指定商品类型的子类型
	 * @param number $typeId
	 * @return multitype:
	 */
	public function querySubTypes($typeId = 0) {
		$typeId = intval($typeId);
		if ($typeId < 0) {
			$typeId = 0;
		}
	
		if ($typeId == 0) {
			return $this->queryAllTypes();
		} else {
			// 暂时只支持两层结构
			$table = $this->db->dbprefix("goodType");
			$sql  = "SELECT gt_id id, gt_parentId parentId, gt_name name FROM $table ";
			$sql .= " WHERE " . $this->field("gt_parentId", $typeId);
			return $this->query_all($sql);
		}
	
	}
	
	/**
	 * 返回所有的商品类别
	 * @return array
	 */
	public function queryAllTypes() {
		$table = $this->db->dbprefix("goodType");
		$sql = "SELECT gt_id id, gt_parentId parentId, gt_name name FROM $table ";
		return  $this->query_all($sql);
	}
	
	/**
	 * 查询指定ID商品详细信息
	 * @param unknown $goodId
	 */
	public function queryItemDetail($itemId) {
		// get table ame
		$tableGoodInfo = $this->db->dbprefix("goodInfo");
		$tableGoodType = $this->db->dbprefix("goodType");
		$tableGoodPrice = $this->db->dbprefix("goodPrice");
		
		$sql = <<<SQL
SELECT t.gd_id itemId, t.gd_zhName zhName, t.gd_enName enName, t.gd_model model, t.gd_littleImg littleImg, t.gd_addDate addDate, t.gd_remark remark
		,t2.gt_id typeId, t2.gt_name typeName
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM $tableGoodInfo t
		INNER JOIN $tableGoodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN $tableGoodPrice t3 on t.gd_id = t3.gd_id
		WHERE 1
SQL;
		
		$sql .= " AND " . $this->field("t.gd_id", $itemId);
		
		return $this->query_one($sql);
	}
	
	//
	// private methods
	//
	
	private function query_all($sql) {
		log_message("info", $sql);
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array();
		}
	}
	
	private function query_one($sql) {
		log_message("info", $sql);
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return array();
		}
	}
	
	private function field($field, $value, $op="") {
	
		if (is_array($value)) {
			$value = implode(",", $this->db->escape_str($value));
			if (!$op) $op = "IN";
		} else {
			$value = $this->db->escape($value);
			if (!$op) $op = "=";
		}
	
		$sql = "";
		$op = strtoupper($op);
		$op = " " . trim($op) . " ";
		//$value = " " . $value . " ";
	
		switch ($op) {
			case " > ":
			case " >= ":
			case " = ":
			case " <= ":
			case " < ":
			case " LIKE ":
			case " NOT LIKE ":
				$sql = $field . $op . $value;
				break;
			case " IN ":
			case " NOT IN ":
				$sql = $field . $op . " (" . $value . ")";
				break;
		}
		return $sql;
	}
	
	/**
	 * 返回分页查询的sql语句
	 * @param int $page_index  第几页
	 * @param int $page_size   每页行数
	 * @return string
	 */
	private function paging($page_index, $page_size) {
		$start = ($page_index - 1) * $page_size;
		return " LIMIT $start , $page_size ";
	}
	
}