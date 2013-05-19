<table style = "font-size:16px;text-align:left;" cellpadding = "0" cellspacing = "35">
	<tbody>
		<tr>
			<td>订单号：<b><?=$order['order']['or_id'] ?></b></td>
			<td>
			状态：<font color = "red"><?=getOderState($order['order']['or_status']); ?></font></td>
			<td>下单时间：<?=$order['order']['or_date'] ?></td>
		</tr>
	</tbody>
</table>

<table style = "margin-left:35px;width:90%;" class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th width = "120" colspan="2" style = "text-align:left;padding-left:10px;">收货信息</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width = "70" >收货人</td>
			<td style = "text-align:left;padding-left:10px;"><?=$order['order']['or_realname'] ?></td>
		</tr>
		<tr>
			<td>下单用户</td>
			<td style = "text-align:left;padding-left:10px;"><?=$order['order']['or_username'] ?></td>
		</tr>
		<tr>
			<td>电话/手机</td>
			<td style = "text-align:left;padding-left:10px;"><?=$order['order']['or_telephone'] ?></td>
		</tr>
		<tr>
			<td>电子邮件</td>
			<td style = "text-align:left;padding-left:10px;"><?=$order['order']['or_email'] ?></td>
		</tr>
		<tr>
			<td>邮编</td>
			<td style = "text-align:left;padding-left:10px;"><?=$order['order']['or_postcode'] ?></td>
		</tr>
		<tr>
			<td>送货地址</td>
			<td style = "text-align:left;padding-left:10px;"><?=$order['order']['or_address'] ?></td>
		</tr>
	</tbody>
</table>
<table style = "margin-left:35px;width:90%;margin-top:20px;" class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th width = "180">商品预览图</th>
			<th>商品名</th>
			<th width = "100">商品数量</th>
			<th width = "150">总价</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($order['orderDetail'] as $od){
		?>
		<tr>
			<td style = "padding:5px;"><img src="<?=CTX_PATH.'static/upload/'.$od['gd_littleImg'] ?>" width="90" height="60" /></td>
			<td><?=$od['od_goodName'] ?></td>
			<td><?=$od['od_count'] ?></td>
			<td><?=$od['od_sumprice'] ?></td>
		</tr>
		<?php 
			}
		?>
		<tr>
			<td colspan="4" style = "text-align:right;padding-right:10px;font-size:16px;height:40px;">总价：<font color = "red"><?=$order['order']['or_sumprice'] ?></td>
		</tr>
	</tbody>
</table>