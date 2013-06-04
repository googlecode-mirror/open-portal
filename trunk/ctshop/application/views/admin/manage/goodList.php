<table class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th width = "120">商品编号</th>
			<th width = "220">商品中文名称</th>
			<th width = "150">商品类别</th>
			<th width = "150">添加时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(!empty($good) && !empty($good['data'])){
				foreach($good['data'] as $gd){
		?>
		<tr>
			<td><?=$gd['gd_id']?></td>
			<td><?=$gd['gd_zhname']?></td>
			<td><?=$gd['gt_name']?></td>
			<td><?=$gd['gd_adddate']?></td>
			<td>[修改]&nbsp;[删除]</td>
		</tr>
		<?php 
				}
			}else{
				echo <<<blank
				<tr>
					<th colspan = "6" style = "font-size:20px;height:100px;">
						没有符合条件的商品！					
					</th>
				</tr>
blank;
			}
		?>
		<tfoot>
			<tr style = "background-color:#D5DEE8;">
				<td colspan="6">
					<?php 
// 						$page_url = CTX_PATH."index.php/admin/Order/orderList/$titleId";
// 						$changePageMethod = "Order.changePage(this);";
// 						require_once APPPATH.'views/admin/page.php';
					?>
				</td>
			</tr>
		</tfoot>
	</tbody>
</table>