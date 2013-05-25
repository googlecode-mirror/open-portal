<?php
	
?>
<table class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th width = "110">用户编号</th>
			<th width = "150">用户名</th>
			<th width = "150">用户国家</th>
			<th width = "170">注册时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(!empty($user) && !empty($user['data'])){
				foreach($user['data'] as $us){
		?>
		<tr>
			<td widtd = "120"><?=$us['u_id'] ?></td>
			<td widtd = "120"><?=$us['u_name'] ?></td>
			<td widtd = "150"><?=$us['u_country'] ?></td>
			<td widtd = "80"><?=$us['u_regdate'] ?></td>
			<td>[详细]&nbsp;[锁定]&nbsp;[删除]&nbsp;[设为管理员]</td>
		</tr>
		<?php 
			}
		}
		?>
	</tbody>
</table>