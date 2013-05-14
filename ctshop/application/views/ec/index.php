<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>彩通</title>
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/index.css" />
</head>
<body>
	<div class="wrap">
		<!-- 顶部 -->
		<?php
			require(APPPATH . "views/ec/top.php");
		?>
		<div class="ct_location">
			当前位置：&nbsp;<a href="index.php">首页</a>
		</div>
		<!-- 中间开始 -->
		<div class="ct_middle">
			<?php
				require(APPPATH . "views/ec/typelist.php");
			?>
			<div class="ct_middle_right">
				<div class = "ct_middle_scrollImg">
					 <script type="text/javascript" src="<?php echo CTX_PATH ?>static/script/flash_img.js"></script>
				</div>
				<div class = "ct_middle_goods_list">
					<div class = "ct_middle_goods_title">
						<div style = "float:left;"><img src = "<?php echo CTX_PATH ?>static/images/location_hot.gif" />&nbsp;产品展示</div>
						<div style = "float:right;margin-right:10px;">&gt;&gt;更多</div>
					</div>

					<?php 
					foreach($viewModel->items as $k => $item): ?>
					<div class="ct_goods_info">
						 <ul>
							<li><a href = "goodInfo.php?goodId=<?php echo $item['gd_id'] ?>"><img src="<?php echo CTX_PATH ?>static/images/goods.gif" width="125" height="100" /></a></li>
							<li><font color = "#38B0E3"><?php echo $item["gd_zhName"]?></font></li>
							<li><?php echo $viewModel->currency . " " . $item[$viewModel->currency] ?> </li>
							<li class = "add_to_cart"><a href = "shopCart.php">Add to Cart</a></li>
						  </ul>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- 中间结束 -->
		<div style = "clear:both;"></div>
		<?php
			require(APPPATH . "views/ec/copy.php");
		?>
	</div>
</body>
</html>