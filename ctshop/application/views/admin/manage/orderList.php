<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/admin/order.js"></script>
<?php 
	/**
	 * 获得操作方式
	 */
	function getOrderOpra($status = 0){
		switch ($status){
			case 0 : 
				$opra['text'] = "确认订单";
				$opra['status'] = 1;
				break;
			case 1:
				$opra['text'] = "发货";
				$opra['status'] = 2;
				break;
			case 2:
				$opra['text'] = "确认收货";
				$opra['status'] = 3;
				break;
			case 3:
				$opra['text'] = "作废";
				$opra['status'] = 4;
			case 4:  //没意义，为了防止报错
				$opra['text'] = "作废";
				$opra['status'] = 4;
		}
		return $opra;
	}
	
	$currPage = $order["currPage"];
	$pageSize = $order["pageSize"];
	$pageCount = $order["pageCount"];
	$count = $order["count"];
?>
<?php echo form_open('admin/Order/orderList', array('id' => 'order_query')) ?>
<table height = "60">
  <tr>
  	<td>按订单号查询：</td>
    <td>
    	<input name = "orderId" id = "orderId" type = "text" value="<?=$orderId ?>" />
    	<input type="hidden" value = "<?=$titleId ?>" name = "titleId"/>
    	<input type = "hidden" id = "page_size" name = "pageSize" value = "<?=$pageSize ?>" />
    </td>
    <td><input type = "button" value = "查询" onclick="Order.sumbitQuery();" /></td>
    <td>
    	<div style = "margin-left:30px;">支持模糊查找，如输入20130516可以查询出2013年5月16号的所有订单</div>
    </td>
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
					$res_status = getOrderOpra($or['or_status']);
		?>
		<tr>
			<td><?=$or['or_id']?></td>
			<td><?=$or['or_sumprice']?></td>
			<td><?=$or['or_realname']?></td>
			<td><?=$or['or_date']?></td>
			<td><?=getOderState($or['or_status']) ?></td>
			<?php 
				if($or['or_status'] == 3){
			?>
			<td>[<a href = "<?=CTX_PATH."index.php/admin/Order/orderInfo/".$or['or_id'] ?>" >详细</a>]&nbsp;&nbsp;[<a href = "javascript:void(0);" onclick = "Order.updOrderStatus('<?=CTX_PATH."index.php/admin/Order/updOder/".$or['or_id']."/4" ?>', '作废');">作废</a>]</td>
			<?php 
				}else if($or['or_status'] == 4){
			?>
			<td>[<a href = "<?=CTX_PATH."index.php/admin/Order/orderInfo/".$or['or_id'] ?>">详细</a>]</td>
			<?php 
				}else{
			?>
			<td>[<a href = "<?=CTX_PATH."index.php/admin/Order/orderInfo/".$or['or_id'] ?>">详细</a>]&nbsp;&nbsp;[<a href = "javascript:void(0);" onclick = "Order.updOrderStatus('<?=CTX_PATH."index.php/admin/Order/updOder/".$or['or_id']."/".$res_status['status'] ?>', '<?=$res_status['text']; ?>');"><?=$res_status['text']; ?></a>]&nbsp;&nbsp;[<a href = "javascript:void(0);" onclick = "Order.updOrderStatus('<?=CTX_PATH."index.php/admin/Order/updOder/".$or['or_id']."/4" ?>', '作废');">作废</a>]</td>
			<?php 
				}
			?>
		</tr>
		<?php 
				}
			}else{
				echo <<<blank
				<tr>
					<th colspan = "6" style = "font-size:20px;height:100px;">
						没有符合条件的订单！					
					</th>
				</tr>
blank;
			}
		?>
		<tfoot>
			<tr style = "background-color:#D5DEE8;">
				<td colspan="6">
					<?php 
						$page_url = CTX_PATH."index.php/admin/Order/orderList/$titleId";
						$changePageMethod = "Order.changePage(this);";
						require_once APPPATH.'views/admin/page.php';
					?>
				</td>
			</tr>
		</tfoot>
	</tbody>
</table>