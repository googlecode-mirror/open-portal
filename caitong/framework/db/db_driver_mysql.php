<?php
/**
 ** mysql 数据库访问驱动， 原始的mysql_connect方式
 ** 
 **/

 class db_driver_mysql 
 {
	var $link;
	var $config;
	
	var $query_num = 0;
	var $query_info = array();
	
	//
	// public methods
	//
	
	// 初始化配置信息
	public function init($config) {
		$this->config = & $config;
	}
	
	// 连接数据库
	public function connect() {
		if (empty($this->config) || empty($this->config["dbhost"])) {
			$this->on_error("db config not found");
		}
		$this->link = $this->do_connect(
			$this->config["dbhost"],
			$this->config["dbuser"],
			$this->config["dbpwd"],
			$this->config["dbname"],
			$this->config["dbcharset"],
			$this->config["pconnect"]
		);
	}
	
	/**
	 ** 执行更新的sql语句, 返回影响的行数
	 ** 参数:
	 ** $sql   执行的sql语句
	 ** 返回:
	 ** 受影响的行数
	 */
	public function execute($sql) {
		$query = $this->do_query($sql);
		if (!$query) {
			$this->on_error("execute sql failed: ".$this->error_info().$sql, $this->errno(), $sql);
		}
		$ret = 0;
		$cmd = trim(strtoupper(substr($sql, 0, strpos($sql, ' '))));
		if ($cmd == "INSERT") {
			$ret = $this->inserted_id();
		} elseif ($cmd == "UPDATE" || $cmd == "DELETE") {
			$ret = $this->affected_rows();
		}
		return $ret;
	}
	
	/** 
	 ** 查询数据库， 返回所有行数据
	 ** 参数：
	 ** $sql	执行的sql语句
	 ** 返回：
	 ** 所有数据行，用数组表示，行数据也是用数组，key为列名
	 */
	public function fetch_all($sql) {
		$query = $this->do_query($sql);
		if (!$query) {
			$this->on_error("query sql failed: ".$this->error_info().$sql, $this->errno(), $sql);
		}
		$datas = array();
		while (true == ($row = $this->fetch_array($query))) {
			$datas[] = $row;
		}
		$this->free_result($query);
		return $datas;
	}
	
	/** 
	 ** 查询数据库， 返回一行数据
	 ** 参数：
	 ** $sql	执行的sql语句
	 ** 返回：
	 ** 一行数据，用数组表示，key为列名
	 */
	public function fetch_one($sql) {
		$query = $this->do_query($sql);
		if (!$query) {
			$this->on_error("query sql failed: ".$this->error_info().$sql, $this->errno(), $sql);
		}
		$row = $this->fetch_array($query);
		$this->free_result($query);
		return $row;
	}
	
	// 事务开始
	public function begin_tx() {
		mysql_query("START TRANSACTION", $this->link);
	}
	
	// 提交事务
	public function commit() {
		mysql_query("COMMIT", $this->link);
	}
	
	// 回滚事务
	public function rollback() {
		mysql_query("ROLLBACK", $this->link);
	}
	
	// 更新语句影响的行数
	public function affected_rows() {
		return mysql_affected_rows($this->link);
	}
	
	// 错误信息
	public function error_info() {
		return (($this->link) ? mysql_error($this->link) : mysql_error());
	}
	
	// 返回错误代码
	public function errno() {
		return (($this->link) ? mysql_errno($this->link) : mysql_errno());
	}
	
	function inserted_id() {
		return ($id = mysql_insert_id($this->link)) >= 0 ? $id : $this->result($this->do_query("SELECT last_insert_id()"), 0);
	}
	
	//
	// private methods
	//
	
	private function result($query, $row = 0) {
		$query = @mysql_result($query, $row);
		return $query;
	}
	
	// 释放查询结果空间
	private function free_result($query) {
		return mysql_free_result($query);
	}
	
	// 取下一行数据
	private function fetch_array($query, $result_type = MYSQL_BOTH) {
		return mysql_fetch_array($query, $result_type);
	}
	
	// 查询数据库
	private function do_query($sql) {
		$start_time = microtime(true);
		$query = mysql_query($sql, $this->link);
		$this->query_info[] = array($sql, microtime(true) - $start_time);
		$this->query_num++;
		return $query;
	}
	
	// 创建数据库连接
	private function do_connect($dbhost, $dbuser, $dbpwd, $dbname, $dbcharset, $pconnect) {
		if (@pconnect) {
			$link = @mysql_pconnect($dbhost, $dbuser, $dbpwd, MYSQL_CLIENT_COMPRESS);
		} else {
			$link = @mysql_connect($dbhost, $dbuser, $dbpwd, 1, MYSQL_CLIENT_COMPRESS);
		}
		
		if (!$link) {
			$this->on_error("can not connect to the database: ".mysql_error());
		} else {
			$dbcharset && mysql_query("SET $dbcharset", $link);
			$dbname && @mysql_select_db($dbname, $link);
		}
		return $link;
	}
	
	// error handle, just throw the exception to the caller
	private function on_error($msg = '', $code=0, $sql='') {
		throw new DbException($msg, $code, $sql);
	}
 
 }

?>