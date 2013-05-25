<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车信息</title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('static/css/index.css') ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('static/css/shopCart.css') ?>" />
<script type="text/javascript" src="<?php echo base_url('static/script/jquery-1.9.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/script/knockout-2.2.1.js') ?>"></script>
</head>

<body>
	<div class="wrap">
		<!-- 顶部 -->
		<?php
			require(APPPATH . "views/ec/top.php");
		?>
		<div class="ct_location">
			当前位置：&nbsp;<a href="index.php">首页</a>&nbsp;&gt;&gt;&nbsp;购物车
		</div>
		<!-- 中间开始 -->
		<div class="ct_middle">
			<?php
					//require(APPPATH . "views/ec/typelist.php");
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
				  <!-- ko foreach: lines -->
				  <tr class="ct_shop_cart_row">
					<td><img src="<?php echo CTX_PATH ?>static/images/goods.gif" width="90" height="90" /></td>
					<td><a href="#" data-bind="text: name" ></a></td>
					<td><input type="text" size="5" data-bind="value: qty, valueUpdate: 'keyup'" /></td>
					<td data-bind="text: price"></td>
					<td data-bind="text: subTotal"></td>
					<td>[<a href="#" data-bind="click: $root.removeLine">删除</a>]</td>
				  </tr>
				  <!-- /ko -->
				</table>
				<div class="ct_sum_price_info">
					<div class = "ct_continue_shop">
						<div class = "add_to_cart_info"><a href = "index.php">继续购物</a></div>
					</div>
					<div class = "ct_sum_pay_info">
						总价：<span data-bind="text: grandTotal">&nbsp;</span><p></p>
						<div class = "add_to_cart_info" style="float:right;"><a href = "#">去结算</a></div>
					</div>
				</div>
				
				<script type="text/javascript">
					function CartLine(item) {
						var self = this;
						self.id = item.id;
						self.name = item.name;
						self.image = item.image;
						self.qty = ko.observable(item.qty);
						self.price = item.price;
						self.subTotal = ko.computed(function() {
							return self.price * parseInt("0" + self.qty());
						});
					}

					function Cart(lines) {
						var self = this;

						self.lines = ko.observableArray(lines || []);
						self.grandTotal = ko.computed(function() {
							var total = 0;
							$.each(self.lines(), function() {total += this.subTotal();});
							return total;
						});

						self.removeLine = function() {
							self.lines.remove(this);
						};

					}

					/*var items = [{id:1, name:"iphone 4s", image:"goods.gif", qty:2, price: 100},
					             {id:3, name:"iphone 5", image:"goods.gif", qty:1, price: 600},
					             {id:4, name:"iphone 5s", image:"goods.gif", qty:1, price: 900}];
		             */
		             var items = <?php echo json_encode($cartLines)?>;
					var lines = [];
					$.each(items, function() {lines.push(new CartLine(this));});

					ko.applyBindings(new Cart(lines));
					
				</script>
				
			</div>
			<div style="clear:both;"></div>
			<?php
				require(APPPATH . "views/ec/copy.php");
			?>
		</div>
	</div>
</body>
</html>
