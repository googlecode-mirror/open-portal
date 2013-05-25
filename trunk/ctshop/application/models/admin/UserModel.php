<?php

class UserModel extends CI_Model {
  const USER_TABLE = 'tbl_user';

  public function __construct()
  {
    $this->load->database();
  }
  
  /**
   * 用户登录
   * @param unknown_type $userName
   * @param unknown_type $userPwd
   */
  public function login($userName, $userPwd){
  	//如果不符合格式，则直接返回false，防止sql注入
  	if(!$this->validateInput($userName) || !$this->validateInput($userPwd)){
  		return FALSE;
  	}
  	
  	$login_sql = "select count(*) as res FROM tbl_user " 
	 . "where u_name = ? and u_password = ? " 
  	 . " and u_type = 1 and u_lock = 0 and u_del = 0";
  	
  	$query = $this->db->query($login_sql, array($userName, md5($userPwd)));
  	
  	if($query->row()->res == 1){
  		return TRUE;
  	}
  	
  	return FALSE;
  }
  
  /**
   * 获得用户列表
   */
  public function getUserList($currPage = 1, $pageSize = 10){
  	//获得总数据量
  	$count_sql = "select count(*) as sum from ".self::USER_TABLE;
  	$count_result = $this->db->query($count_sql);
  	$count = $count_result->row()->sum;
  	//计算偏移量
  	$page_count = ceil($count / $pageSize);
  	
  	if($currPage > $page_count) $currPage = $page_count;
  	if($currPage < 1) $currPage = 1;
  	$start = ($currPage - 1) * $pageSize;
  	//查询数据
  	$user_sql = "select * from ".self::USER_TABLE . ' order by u_regdate desc '.
  			'limit ' . $start . ',' . $pageSize;
  	
  	$data = $this->db->query($user_sql);
  	$res['data'] = $data->result_array();
  	$res['pageCount'] = $page_count;
  	$res['count'] = $count;
  	$res['currPage'] = $currPage;
  	$res['pageSize'] = $pageSize;
  	return $res;
  }
  	
  /**
   * 验证用户名或者密码输入是否符合要求，防止sql注入
   */
  private function validateInput($str){
  	 if(!preg_match('/^\w+$/', $str)){
  	 	return FALSE;
  	 }
  	 
  	 return TRUE;
  }
}
?>