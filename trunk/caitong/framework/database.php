<?php


// 数据库访问接口， 上层都是通过这个类来访问数据库


class database {
	public static $db;
	public static $driver;
	
	public static function init($config, $driver = "db_driver_mysql") {
		self::$driver = $driver;
		self::$db = new $driver;
		self::$db->init($config);
		self::$db->connect();
	}
	
	public static function execute($sql) {
		return self::$db->execute($sql);
	}
	
	public static function fetch_all($sql) {
		return self::$db->fetch_all($sql);
	}
	
	public static function fetch_one($sql) {
		return self::$db->fetch_one($sql);
	}
	
	public static function begin_tx() {
		self::$db->begin_tx();
	}
	
	public static function commit() {
		self::$db->commit();
	}
	
	public static function rollback() {
		self::$db->rollback();
	}
	
	public static function error_info() {
		return self::$db->error_info();
	}
	
	public static function errno() {
		return self::$db->errno();
	}
	
	//
	//  util method
	//
	
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
	
	public static function paging($page_index, $page_size) {
		$start = ($page_index - 1) * $page_size;
		return " LIMIT $start , $page_size ";
	}
	
}





?>