<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车信息</title>
<link type="text/css" rel="stylesheet" href="css/index.css" />
<style type="text/css">
	.add_info td{
		padding: 5px;
	}
</style>
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
			<table class = "add_info">
				<thead>
					<tr>
						<td colspan="2" height="50"><div style="font-weight: bold;font-size:16px;">收货信息</div></td>
					</tr>
				</thead>	
				<tbody>
					<tr>
						<td width="60">真实姓名：</td>
						<td><input type="text" size="40"/></td>
					</tr>
					<tr>
						<td width="60">Email：</td>
						<td><input type="text" size="40"/></td>
					</tr>
					<tr>
						<td width="60">手机号码：</td>
						<td><input type="text" size="40"/></td>
					</tr>
					<tr>
						<td width="60">邮编：</td>
						<td><input type="text" size="40"/></td>
					</tr>
					<tr>
						<td width="60">国家：</td>
						<td>
							<select style="width:235px;">
								<option>--请选择国家--</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="60">详细地址：</td>
						<td><input type="text" size="60"/></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td><input type="button" value="继续购物" /></td>
					</tr>
				</tfoot>
			</table>
			<div style="clear:both;margin-top:10px;"></div>
			<?php
				require_once("copy.php");
			?>
		</div>
	</div>
</body>
</html>
	