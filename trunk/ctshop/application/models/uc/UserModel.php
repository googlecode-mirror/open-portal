<?php
/**
 * @author jianzc
 */
class UserModel extends CI_Model {
	function __construct() {
		parent::__construct ();
		// 连接数据库
		$this->load->database ();
	}
	
	/**
	 * 检查用户是否存在
	 * @param unknown $param
	 * @return boolean
	 */
	public function checkUserExist($param) {
		$data = array (
			'u_name' => $param["userName"]
		);
		$query = $this->db->get_where('user', $data);
	
		if ($query->num_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/**
	 * 用户注册
	 * @param unknown $param
	 * @return multitype:number unknown |NULL
	 */
	public function registUserInfo($param) {
		$maxId = 1000;
		
		$this->db->select_max('u_id');
		$query = $this->db->get('user');
		if ($query->num_rows() > 0){
			$row = $query->row();
			$maxId = $row->u_id + 1;
		}

		$data = array (
				'u_id' => $maxId,
				'u_name' => $param["userName"],
				'u_password' => md5($param["userPwd"]), 
				'u_email' => $param["email"],
				'u_country' => $param["country"],
				'u_telephone' => $param["telNo"], 
				'u_type' => 0,
				'u_lock' => 0,
				'u_del' => 0
		);
		
		$this->db->insert ( 'user', $data );
		if ($this->db->affected_rows() > 0) {
			return $data;
		} else {
			return NULL;
		}
	}
	
	/**
	 * 用户登录
	 * @param unknown $param
	 * @return NULL
	 */
	public function login($param) {
		$data = array (
				'u_name' => $param["userName"],
				'u_password' => md5($param["userPwd"]),
		);
	
		$query = $this->db->get_where('user', $data);
		if ($query->num_rows() > 0){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
}