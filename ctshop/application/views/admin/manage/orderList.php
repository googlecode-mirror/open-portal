<table class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th>订单编号</th>
			<th>订单总价</th>
			<th>订单用户</th>
			<th>用户号码</th>
			<th>下单时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(!empty($order) && !empty($order['data'])){
				foreach($order['data'] as $or){
		?>
		<tr>
			<td><?=$or['or_id']?></td>
			<td><?=$or['or_sumprice']?></td>
			<td><?=$or['or_username']?></td>
			<td><?=$or['or_telephone']?></td>
			<td><?=$or['or_date']?></td>
			<td>[查看详细]</td>
		</tr>
		<?php 
				}
			}
		?>
	</tbody>
</table>