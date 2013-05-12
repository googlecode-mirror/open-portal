<?php

/** 
 * 商品信息表
 * @author timL
 * create table tbl_goodInfo
(
   gd_id                varchar(20) not null,
   gt_id                int,
   gd_zhName            varchar(200) not null,
   gd_enName            varchar(100) not null,
   gd_model             varchar(100) not null,
   gd_littleImg         varchar(150) not null,
   gd_adddate           date,
   gd_remark            text not null,
   gd_adder             varbinary(100),
   gd_del               bit,
   primary key (gd_id)
);
create table tbl_goodPrice
(
   gp_id                int not null,
   gd_id                varchar(20),
   gp_rmb               float(8,4),
   gp_euro              float(8,4),
   gp_dollar            float(8,4),
   gp_pound             float(8,4),
   primary key (gp_id)
);
create table tbl_goodType
(
   gt_id                int not null,
   gt_parentId          int,
   gt_name              varchar(150),
   primary key (gt_id)
);
 * 
 */
class GoodsDao {
	
	/**
	 */
	public function __construct() {

	}
	
	/**
	 * 查询某个类别产品个数
	 * @param number|array $typeId, 商品类型ID, 如果是多个ID必须用数组
	 */
	public function queryGoodsCount($typeId = 0) {
		$table = C::tableName("goodInfo");
		$sql = "SELECT COUNT(*) FROM $table WHERE 1 ";
		
		if (!is_array($typeId)) {
			$typeId = intval($typeId);
		}
		if ($typeId) {
			$sql .= " AND " . database::field("gt_id", $typeId);
		}
		$result = database::fetch_one($sql);
		if ($result) {
			return intval($result[0]);
		}
		return 0;
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
	public function fetchGoodsList($typeId, $orderBy, $orderDirect, $pageInfo = array()) {
		
		// get table ame
		$tableGoodInfo = C::tableName("goodInfo");
		$tableGoodType = C::tableName("goodType");
		$tableGoodPrice = C::tableName("goodPrice");
		
		// get the where condition
		$where = "  1 ";
		if ($typeId) {
			$where .= " AND " . database::field('t.gt_id', $typeId); 
		}
		
		// get order by colum
		$orderCol = "";
		switch ($orderBy) {
			case "price":
				$orderCol = "price";
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
		logger::info($sql);
		// add paging info
		if (!empty($pageInfo)) {
			$sql .= database::paging($pageInfo["page_index"], $pageInfo["page_size"]);
		}
		
		return database::fetch_all($sql);
		
	}
	
	/**
	 * 返回指定商品类型的子类型
	 * @param number $typeId
	 * @return multitype:
	 */
	public function fetchChildrenTypes($typeId = 0) {
		$typeId = intval($typeId);
		if ($typeId < 0) {
			$typeId = 0;
		}
	
		if ($typeId == 0) {
			return $this->fetchAllTypes();
		} else {
			// 暂时只支持两层结构
			$table = C::tableName("goodType");
			$sql = "SELECT gt_id id, gt_parentId parentId, gt_name name FROM $table ";
			$sql .= " WHERE " . database::field("gt_parentId", $typeId);
			return database::fetch_all($sql);
		}
	
	}
	
	/**
	 * 返回所有的商品类别
	 * @return array
	 */
	public function fetchAllTypes() {
		$table = C::tableName("goodType");
		$sql = "SELECT gt_id id, gt_parentId parentId, gt_name name FROM $table ";
		return database::fetch_all($sql);
	}
	
	/**
	 * 查询指定ID商品详细信息
	 * @param unknown $goodId
	 */
	public function fetchGoodDetail($goodId) {
		
		// get table ame
		$tableGoodInfo = C::tableName("goodInfo");
		$tableGoodType = C::tableName("goodType");
		$tableGoodPrice = C::tableName("goodPrice");
		
		// build the sql
		$sql = <<<SQL
SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate, t.gd_remark
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM $tableGoodInfo t
		INNER JOIN $tableGoodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN $tableGoodPrice t3 on t.gd_id = t3.gd_id
		WHERE 1 
SQL;
		$sql .= " AND " . database::field("gd_id", $goodId);
		
		return database::fetch_one($sql);
		
	}
}

?>