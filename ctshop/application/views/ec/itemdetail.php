<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="css/index.css" />
<link type="text/css" rel="stylesheet" href="css/goodInfo.css" />
</head>
<body>
	<div class="wrap">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td>
					<?php
						require_once("top.php");
					?>
					<div class="ct_location">
						当前位置：&nbsp;<a href="index.php">首页</a>&nbsp;&gt;&gt;&nbsp;<a href="goodsList.php">人生几何</a>&nbsp;&gt;&gt;&nbsp;HTC Touch HD
					</div>
					<!-- 中间开始 -->
					<div class="ct_middle">
					<div>
					<?php
						require_once("typeList.php");
					?>
					<div class="ct_middle_right">
						<div class="ct_good_img">
							<img src="images/goodInfo.gif"  width="350" height="350" />
						</div>
						<div class = "ct_good_info">
							<table border="0" cellpadding="10" cellspacing="0">
								<tr>
									<td>
										<font size="+2">HTC Touch HD</font>
									</td>
								</tr>
								<tr>
									<td>
										品牌：人生几何
									</td>
								</tr>
								<tr>
									<td>
										型号：Product 3
									</td>
								</tr>
								<tr>
									<td>
										市场价：<del>100 RMB</del></font>
									</td>
								</tr>
								<tr>
									<td>
										价格：<font color="#FF0000" size="+1">100 RMB</font>
									</td>
								</tr>
								<tr>
									<td>
										<div class="num_and_cart">
											购买数量：<input type="text" size="5" value="5">
											<div class = "add_to_cart_info"><a href = "shopCart.php">Add to Cart</a></div>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<div style="clear:both;"></div>
						<div class="ct_good_detail">
							<div class="good_detail_title">
								<div class="good_detail_tab">
									详细信息
								</div>
								<div class="good_alsolike_tab">
									详细信息
								</div>
							</div>
							<div class="ct_good_detail_body">
								
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<?php
						require_once("copy.php");
					?>
				</td>	
			</tr>
		</table>
	</div>
</body>
</html>
