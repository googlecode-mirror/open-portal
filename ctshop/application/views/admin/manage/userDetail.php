<?php 
	/**
	 * 获得用户状态
	 */
	function getUserStatus($statusId = 0){
		switch ($statusId){
			case 0 : 
				$status = "正常";
				break;
			case 1 :
				$status = "已锁定";
				break;
			case 2 : 
				$status = "已删除";
				break;
		}
		return $status;
	}
?>
<table class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th width = "120" colspan="2" style = "text-align:left;padding-left:10px;">用户信息</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width = "90" >用户编号</td>
			<td style = "text-align:left;padding-left:10px;"><b><?=$userInfo['u_id'] ?></b></td>
		</tr>
		<tr>
			<td width = "90" >用户名</td>
			<td style = "text-align:left;padding-left:10px;"><?=$userInfo['u_name'] ?></td>
		</tr>
		<tr>
			<td width = "90" >用户国家</td>
			<td style = "text-align:left;padding-left:10px;"><?=$userInfo['u_country'] ?></td>
		</tr>
		<tr>
			<td width = "90" >联系号码</td>
			<td style = "text-align:left;padding-left:10px;"><?=$userInfo['u_telephone'] ?></td>
		</tr>
		<tr>
			<td width = "90" >用户邮箱</td>
			<td style = "text-align:left;padding-left:10px;"><?=$userInfo['u_email'] ?></td>
		</tr>
		<tr>
			<td width = "90" >注册时间</td>
			<td style = "text-align:left;padding-left:10px;"><?=$userInfo['u_regdate'] ?></td>
		</tr>
		<tr>
			<td width = "90" >用户类型</td>
			<td style = "text-align:left;padding-left:10px;"><?=$userInfo['u_type'] == 0 ? "普通用户" : "管理员" ?></td>
		</tr>
		<tr>
			<td width = "90" >用户状态</td>
			<td style = "text-align:left;padding-left:10px;color:red;"><b><?=getUserStatus($userInfo['u_status']) ?></b></td>
		</tr>
	</tbody>
</table>