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
			<th width = "90">用户编号</th>
			<th width = "150">用户名</th>
			<th width = "140">用户类型</th>
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
			<td widtd = "150"><?=$us['u_type'] == 0 ? "普通用户" : "管理员" ?></td>
			<td widtd = "80"><?=$us['u_regdate'] ?></td>
			<td>
			
				[<a href = "<?=CTX_PATH ?>index.php/admin/User/getUserDetail/<?=$us['u_id'] ?>">详细</a>]
				
				&nbsp;
				<?php 
					if($us['u_name'] != $_SESSION['adminUser']){
						if($us['u_status'] == 0){
				?>
				[<a href = "javascript:void(0);" onclick = "User.updStatus('<?=CTX_PATH."index.php/admin/User/updStatus/".$us['u_id']."/1" ?>', 1);">锁定</a>]
				<?php 
						}else{
				?>
				[<a href = "javascript:void(0);" onclick = "User.updStatus('<?=CTX_PATH."index.php/admin/User/updStatus/".$us['u_id']."/0" ?>', 0);">解除锁定</a>]
				<?php }}?>
				&nbsp;
			
				<?php 
					if($us['u_name'] != $_SESSION['adminUser']){
				?>
				[<a href = "javascript:void(0);" onclick = "User.updStatus('<?=CTX_PATH."index.php/admin/User/updStatus/".$us['u_id']."/2" ?>', 2);">删除</a>]
				<?php 
					}
				?>
				&nbsp;
				<?php 
					if($us['u_type'] == 0 && $us['u_status'] == 0){
				?>
				[<a href = "javascript:void(0);" onclick = "User.setAdmin('<?=CTX_PATH."index.php/admin/User/setAdmin/".$us['u_id'] ?>', '<?=$us['u_name'] ?>');">设为管理员</a>]
				<?php 
					}
				?>
			</td>
		</tr>
		<?php 
			}
		}else{
				echo <<<blank
				<tr>
					<th colspan = "6" style = "font-size:20px;height:100px;">
						没有符合条件的用户！					
					</th>
				</tr>
blank;
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