<?php

/** 
 * 商品服务类, 提供商品相关的操作
 * @author timL
 * 
 */
class GoodsService {
	
	/**
	 * DAO类
	 * @var GoodsDao
	 */
	private $dao;
	
	/**
	 */
	function __construct() {
		$this->dao = new GoodsDao();
	}
	
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
	public function getGoodsList($param) {
		$typeId      = intval($param["typeId"]);
		$orderBy     = $param["orderBy"];
		$orderDirect = $param["orderDirect"];
		$pageInfo    = $param["pageInfo"];
		
		// 查询子商品类别
		if ($typeId > 0) {
			$typeList = $this->dao->fetchChildrenTypes($typeId);
			$typeIds = array();
			$typeIds[] = $typeId;
			foreach ($typeList as $key => $value) {
				$typeIds[] = $value["id"]; 
			}
			$typeId = $typeIds;
		} 
		
		// 查询总数
		$goodsCount = $this->dao->queryGoodsCount($typeId);
		
		// 分页查询商品列表
		$goodsList  = $this->dao->fetchGoodsList($typeId, $orderBy, $orderDirect, $pageInfo);
		
		return array(
			"count" => $goodsCount,
			"data"  => $goodsList,
		);
	}
	
	/**
	 * 查询指定ID的商品详细信息
	 * @param unknown $goodId  商品ID
	 * @return array
	 */
	public function getGoodDetail($goodId) {
		return $this->dao->fetchGoodDetail($goodId);
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
	public function getGoodsTypeTree() {
		$typeTree = array();
		$types = $this->dao->fetchAllTypes();
		
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
	
}

?>