<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车信息</title>
<link type="text/css" rel="stylesheet" href="css/index.css" />
<link type="text/css" rel="stylesheet" href="css/shopCart.css" />
</head>

<body>
	<div class="wrap">
		<!-- 顶部 -->
		<?php
			require_once("top.php");
		?>
		<div class="ct_location">
			当前位置：&nbsp;<a href="index.php">首页</a>&nbsp;&gt;&gt;&nbsp;购物车
		</div>
		<!-- 中间开始 -->
		<div class="ct_middle">
			<?php
					require_once("typeList.php");
				?>
			<div class="ct_middle_right">
				<table cellpadding="0" cellspacing="0" class="ct_shop_cart">
				  <tr class="ct_shop_cart_title">
				  	<td width="100">商品预览</td>
					<td width="240">商品名称</td>
					<td width="100">购买数量</td>
					<td width="80">商品单价</td>
					<td width="80">商品总价</td>
					<td width="100">操作</td>
				  </tr>
				  <tr class="ct_shop_cart_row">
					<td><img src="images/goods.gif" width="90" height="90" /></td>
					<td>BM66B - Box & feeding bottles set</td>
					<td><input type="text" size = "5" value = "5" /></td>
					<td>￥100.00</td>
					<td>￥500.00</td>
					<td>[<a href="#">删除</a>]</td>
				  </tr>
				  <tr class="ct_shop_cart_row" style="background-color:#FFFFCC;">
					<td><img src="images/goods.gif" width="90" height="90" /></td>
					<td>BM66B - Box & feeding bottles set</td>
					<td><input type="text" size = "5" value = "5" /></td>
					<td>￥100.00</td>
					<td>￥500.00</td>
					<td>[<a href="#">删除</a>]</td>
				  </tr>
				  <tr class="ct_shop_cart_row">
					<td><img src="images/goods.gif" width="90" height="90" /></td>
					<td>BM66B - Box & feeding bottles set</td>
					<td><input type="text" size = "5" value = "5" /></td>
					<td>￥100.00</td>
					<td>￥500.00</td>
					<td>[<a href="#">删除</a>]</td>
				  </tr>
				</table>
				<div class="ct_sum_price_info">
					<div class = "ct_continue_shop">
						<div class = "add_to_cart_info"><a href = "index.php">继续购物</a></div>
					</div>
					<div class = "ct_sum_pay_info">
						总价：￥10000.00<p></p>
						运费：￥50.00<p></p>
						<div class = "add_to_cart_info" style="float:right;"><a href = "#">继续购物</a></div>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
			<?php
				require_once("copy.php");
			?>
		</div>
	</div>
</body>
</html>
