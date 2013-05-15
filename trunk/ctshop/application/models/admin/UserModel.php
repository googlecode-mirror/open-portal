<?php

class UserModel extends CI_Model {

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