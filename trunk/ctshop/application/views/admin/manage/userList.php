<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/admin/user.js"></script>
<?php
	$currPage = $user["currPage"];
	$pageSize = $user["pageSize"];
	$pageCount = $user["pageCount"];
	$count = $user["count"];
?>
<?php echo form_open('admin/User/userList', array('id' => 'user_query')) ?>
<table height = "60">
  <tr>
  	<td>按用户名查询：</td>
    <td>
    	<input name = "userName" id = "userName" type = "text" value="<?=$userName ?>" />
    	<input type = "hidden" id = "page_size" name = "pageSize" value = "<?=$pageSize ?>" />
    	<input type = "hidden" name = "type" value = "<?=$type ?>" />
    </td>
    <td><input type = "button" value = "查询" onclick="User.sumbitQuery();" /></td>
    <td>
    	<div style = "margin-left:30px;">支持模糊查找</div>
    </td>
  </tr>
</table>
</form>
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
	<tfoot>
		<tr style = "background-color:#D5DEE8;">
			<td colspan="6">
				<?php 
					$page_url = CTX_PATH."index.php/admin/User/userList/".$type."/".$status;
					$changePageMethod = "User.changePage(this);";
					require_once APPPATH.'views/admin/page.php';
				?>
			</td>
		</tr>
	</tfoot>
</table>