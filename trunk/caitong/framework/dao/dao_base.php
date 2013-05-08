<?php
//
// 数据访问基类
//

class dao_base {
	
	protected $pk;
	protected $table;
	
	public function __construct($pk, $table) {
		$this->pk = $pk;
		$this->table = $table;
	}
	
	//
	// public methods
	//
	
	public function delete($id) {
		$where = $this->get_pk_condition($id);
		return $this->delete_where($where);
	}
	
	public function delete_batch($ids) {
		if (!is_array($ids)) {
			return delete($ids);
		}
		
		$where = '';
		if (is_array($this->pk)) {
			// TODO:
			return 0;
		} else {
			$pureids = array();
			foreach ($ids as $id) {
				$pureids[] = database::quote(is_array($id) ? $id[$this->pk] : $id);
			}
			$where = $this->pk . " IN (" . implode(",", $pureids) . ")";
		}
		return $this->delete_where($where);
	}
	
	public function delete_where($where) {
		$sql = "DELETE FROM ". $this->table . " WHERE ". $where;
		return database::execute($sql);
	}
	
	public function fetch_all($where = "", $order = "") {
		if ($where !== '') {
			$where = " WHERE $where";
		}
		if ($order !== '') {
			$order = " ORDER BY $order";
		}
		$table = $this->table;
		return database::fetch_all("SELECT * FROM $table $where $order");
	}
	
	public function fetch_page($where, $page_index, $page_size, $order="") {
		$sql = "SELECT * FROM " . $this->table;
		if ($where !== '') {
			$sql .= " WHERE $where";
		}
		if ($order !== '') {
			$sql .= " ORDER BY $order";
		}
		return database::fetch_all($sql . database::paging($page_index, $page_size));
	}
	
	public function fetch_one($id) {
		$sql = "SELECT * FROM " . $this->table;
		$sql .= (" WHERE " . $this->get_pk_condition($id));
		return database::fetch_one($sql);
	}
	
	public function add($obj) {
		$sql = "INSERT INTO " . $this->table . " SET " . $this->implode($obj);
		return database::execute($sql);
	}
	 
	public function save($obj) {
		$where = $this->get_pk_condition($obj);
		$obj = $this->remove_pk($obj);
		$setsql = $this->implode($obj);
		//$sql = "UPDATE " . $this->table . " SET " . $setsql . " WHERE " . $where;
		$table = $this->table;
		$sql = "UPDATE $table SET $setsql WHERE $where;";
		return database::execute($sql);
	}
	
	public function implode($array, $split = ",") {
		$str = '';
		$split = ' ' . trim($split) . ' ';
		foreach ($array as $k => $v) {
			if ($str != '') {
				$str .= $split;
			}
			$str .= $k . ' = ' . database::quote($v);
			
		}
		return $str;
	}
	
	public function get_pk_condition($obj) {
		$where = '';
		if (is_array($this->pk)) {
			// 主键是多列
			foreach ($this->pk as $field) {
				if ('' !== $where) {
					$where .= ' AND ';
				} 
				$where .= $field . ' = ' . database::quote($obj[$field]);
			}
		} else {
			$where = $this->pk . ' = ' . database::quote(is_array($obj) ? $obj[$this->pk] : $obj);
		}
		return $where;
	}
	
	public function remove_pk($obj) {
		foreach ($obj as $k => $v) {
			if (is_array($this->pk)) {
				if (in_array($k, $this->pk)) {
					unset($obj[$k]);
				}
			} else {
				if ($k == $this->pk) {
					unset($obj[$k]);
					return $obj;
				}
			}
		}
		return $obj;
	}
	
}

?>














