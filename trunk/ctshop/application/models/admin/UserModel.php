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
  	 . " and u_type = 1 and u_status = 0";
  	
  	$query = $this->db->query($login_sql, array($userName, md5($userPwd)));
  	
  	if($query->row()->res == 1){
  		return TRUE;
  	}
  	
  	return FALSE;
  }
  
  /**
   * 获得用户列表
   */
  public function getUserList($currPage = 1, $pageSize = 10, $userName = NULL, $type, $status = 0){
  	$condition = ' where u_status = '.$status;
  	
  	if($type != NULL){
  		$condition.=" and u_type =".$type;
  	}
  	
  	if(!empty($userName)){
  		$condition .= ' and u_name like \'%'.$userName.'%\'';
  	}
  	//获得总数据量
  	$count_sql = "select count(*) as sum from ".self::USER_TABLE.$condition;
  	$count_result = $this->db->query($count_sql);
  	$count = $count_result->row()->sum;
  	//计算偏移量
  	$page_count = ceil($count / $pageSize);
  	
  	if($currPage > $page_count) $currPage = $page_count;
  	if($currPage < 1) $currPage = 1;
  	$start = ($currPage - 1) * $pageSize;
  	//查询数据
  	$user_sql = "select * from ".self::USER_TABLE.$condition. ' order by u_regdate desc '.
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
   * 修改用户状态
   * @param unknown_type $userId 用户编号
   * @param unknown_type $status 用户状态
   */
  public function updUserStatus($userId, $status){
  	 $upd_sql = "update ".self::USER_TABLE." set u_status= ? where u_id = ?";
  	 $this->db->query($upd_sql, array($status, $userId));
  	 return $this->db->affected_rows();
  }
  
  /**
   * 设置用户为管理员
   * @param unknown_type $userId用户编号
   */
  public function setAdmin($userId){
  	 if(empty($userId)) return 0;
  	 
  	 $set_sql = "update ".self::USER_TABLE." set u_type = 1 where u_id = ?";
  	 $this->db->query($set_sql, array($userId));
  	 return $this->db->affected_rows();
  }
  /**
   * 获得用户信息
   * @param $userId 用户编号
   */
  public function getUserInfo($userId){
  	  $query_sql = "select * from ".self::USER_TABLE. " where u_id = ?";
  	  $user_res = $this->db->query($query_sql, array($userId));
  	  return $user_res->row_array();
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