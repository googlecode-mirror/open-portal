<?php

/**
 * 数据库访问接口， 上层都是通过这个类来访问数据库
 * @author timL
 *
 */
class database {
	public static $db;     // 实际访问数据库类
	public static $driver;  // 驱动名称，也就数据库访问类的名称
	
	/**
	 * 初始化并连接数据库
	 * @param unknown $config
	 * @param string $driver
	 */
	public static function init($config, $driver = "db_driver_mysql") {
		self::$driver = $driver;
		self::$db = new $driver;
		self::$db->init($config);
		self::$db->connect();
	}
	
	/**
	 * 执行增删改sql语句
	 * update, delete 语句返回影响的行数
	 * insert 语句返回刚插入的自增字段ID， 如果没有自增字段，返回值不确定
	 * @param unknown $sql  执行的sql语句
	 */
	public static function execute($sql) {
		return self::$db->execute($sql);
	}
	
	/**
	 * 执行select SQL语句， 并返回所有行数据
	 * 用数组表示每一行数据局， key是字段名， value是字段值
	 * @param unknown $sql
	 * @return array
	 */
	public static function fetch_all($sql) {
		return self::$db->fetch_all($sql);
	}
	
	/**
	 * 执行select SQL语句， 只返回一行数据
	 * @param unknown $sql
	 * @retun array
	 */
	public static function fetch_one($sql) {
		return self::$db->fetch_one($sql);
	}
	
	/**
	 * 开始事务
	 */
	public static function begin_tx() {
		self::$db->begin_tx();
	}
	
	/**
	 * 提交事务
	 */
	public static function commit() {
		self::$db->commit();
	}
	
	/**
	 * 回滚事务
	 */
	public static function rollback() {
		self::$db->rollback();
	}
	
	/**
	 * 返回最后的执行错误信息
	 */
	public static function error_info() {
		return self::$db->error_info();
	}
	
	/**
	 * 返回最后的执行错误代码
	 */
	public static function errno() {
		return self::$db->errno();
	}
	
	//
	//  util method
	//
	
	/**
	 * 给 sql值加上单引号, 如果值里有单引号,单引号前加上反斜杠
	 * @param unknown $str
	 * @return string|unknown
	 */
	public static function quote($str) {
		if (is_string($str)) {
			return '\'' . addcslashes($str, "\n\r\\'\"\032") . '\'';
		}
		
		if (is_int($str) || is_float($str)) {
			return '\'' . $str . '\'';
		}
		
		if (is_array($str)) {
			foreach ($str as &$v) {
				$v = self::quote($v);
			}
			return $str;
		}
		
		if (is_bool($str)) {
			return $str ? '1' : '0';
		}
		
		return '\'\'';
	}
	
	/**
	 * 根据字段名和值生产过滤语句
	 * 返回如下的过滤语句:
	 * name = 'a'
	 * id > '10'
	 * id IN (1,2,3,4)
	 * @param unknown $field  字段名
	 * @param unknown $value  值, 可以是数组
	 * @param string $op 操作符, 默认是=, 如果值是数组,那么默认为IN
	 * @return string
	 */
	public static function field($field, $value, $op="") {
		
		if (is_array($value)) {
			$value = implode(",", self::quote($value));
			if (!$op) $op = "IN";
		} else {
			$value = self::quote($value);
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
	public static function paging($page_index, $page_size) {
		$start = ($page_index - 1) * $page_size;
		return " LIMIT $start , $page_size ";
	}
	
}




?>