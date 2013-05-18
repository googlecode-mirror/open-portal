<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/admin/order.js"></script>
<?php 
	/**
	 * 获得订单状态
	 * @param unknown_type $statusId
	 */
	function getOderState($statusId = 0){
		
		switch($statusId){
			case 0 : 
				$status = "待确认";
				break;
			case 1 :
				$status = "备货中";
				break;
			case 2 : 
				$status = "发货中";
				break;
			case 3 :
				$status = "已收货";
				break;
			case 4:
				$status = "已作废";
				break;
		}
		
		return $status;
	}
?>
<?php echo form_open('admin/Order/orderList', array('id' => 'order_query')) ?>
<table height = "60">
  <tr>
  	<th>按订单号查询：</th>
    <th>
    	<input name = "orderId" id = "orderId" type = "text" value="<?=$orderId ?>" />
    	<input type="hidden" value = "$titleId" name = "titleId"/>
    </th>
    <th><input type = "button" value = "查询" onclick="Order.sumbitQuery();" /></th>
  </tr>
</table>
</form>
<table class  = "manage_tb" cellspacing = "0" cellpadding = "0">
	<thead>
		<tr>
			<th width = "120">订单编号</th>
			<th width = "120">订单总价</th>
			<th width = "150">收货人</th>
			<th width = "150">下单时间</th>
			<th width = "80">状态</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(!empty($order) && !empty($order['data'])){
				foreach($order['data'] as $or){
				if($or['or_status'] == 0){
					echo "<tr style = \"background-color:#FFFFCE;\">";
				}else{
					echo "<tr>";
				}
		?>
			<td><?=$or['or_id']?></td>
			<td><?=$or['or_sumprice']?></td>
			<td><?=$or['or_realname']?></td>
			<td><?=$or['or_date']?></td>
			<td><?=getOderState($or['or_status']) ?></td>
			<td>[查看详细]&nbsp;&nbsp;[确认订单]</td>
		</tr>
		<?php 
				}
			}
		?>
		<tfoot>
			<tr style = "background-color:#D5DEE8;">
				<td colspan="6">
					<?php 
						$currPage = $order["currPage"];
						$pageSize = $order["pageSize"];
						$pageCount = $order["pageCount"];
						$count = $order["count"];
						$page_url = CTX_PATH."index.php/admin/Order/orderList/$titleId";
						require_once APPPATH.'views/admin/page.php';
					?>
				</td>
			</tr>
		</tfoot>
	</tbody>
</table>