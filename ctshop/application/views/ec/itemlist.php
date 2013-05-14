<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品列表</title>
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/index.css" />
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/goodsList.css" />
</head>
<body>
	<?php 
	$currency     = $viewModel->currency; 
	$pageIndex    = $viewModel->pageIndex;
	$totalPage    = $viewModel->totalPage;
	$typeId       = $viewModel->typeId;

	function make_link($viewModel, $page) {
		//$pageIndex    = $viewModel->pageIndex;
		//if ($pageIndex === $page) return "#";
		return "{$viewModel->pageUrl}{$viewModel->typeId}/{$viewModel->currency}/{$viewModel->orderBy}/{$viewModel->orderDirect}/{$viewModel->pageSize}/$page";
	}
	
	?>
	<div class="wrap">
		<!-- 顶部 -->
		<?php
			require(APPPATH . "views/ec/top.php");
		?>
		<div class="ct_location">
			当前位置：&nbsp;<a href="index.php">首页</a>&nbsp;&gt;&gt;&nbsp;迷你精品
		</div>
		<!-- 中间开始 -->
		<div class="ct_middle">
		<table cellpadding="0" cellspacing="0" border="0" >
			<tr>
				<td>
				<?php
					require(APPPATH . "views/ec/typelist.php");
				?>
			<div class="ct_middle_right">
			<!-- 商品展示开始 -->
				<div class = "ct_middle_goods_list">
					
					<table width="200" border="0" cellpadding="0" cellspacing="0">
					  <tr>
						<td>
							<div class = "ct_middle_goods_title" style="font-weight:normal;font-size:12px;">
								<div style = "float:left;"><img src = "<?php echo CTX_PATH ?>static/images/location_hot.gif" />&nbsp;<b>人生几何</b></div>
								<div style = "float:right;margin-right:10px;">
									排序方式：
									<select>
										<option>按名称A-Z</option>
										<option>按名称Z-A</option>
										<option>按价格升序</option>
										<option>按价格降序序</option>
										<option>按型号A-Z</option>
										<option>按型号Z-A</option>
									</select>
									
								</div>
							</div>
						</td>
						</tr>
						<tr>
							<td>
								<?php 
								foreach($viewModel->items as $k => $item): ?>
								<div class="ct_goods_info">
									 <ul>
										<li><a href = "goodInfo.php?goodId=<?php echo $item['gd_id'] ?>"><img src="<?php echo CTX_PATH ?>static/images/goods.gif" width="125" height="100" /></a></li>
										<li><font color = "#38B0E3"><?php echo $item["gd_zhName"]?></font></li>
										<li><?php echo $currency . " " . $item[$currency] ?> </li>
										<li class = "add_to_cart"><a href = "shopCart.php">Add to Cart</a></li>
									  </ul>
								</div>
								<?php endforeach; ?>
							</td>
						  </tr>
							<tr>
								<td>
									<div class="ct_type_pageInfo">
										<?php 
										
										?>
										查询结果：共<font color="red"><?php echo $viewModel->itemCount; ?></font>条记录&nbsp;
										共<font color="red"><?php echo $viewModel->totalPage ?></font>页&nbsp;
										<a href="<?php echo ($pageIndex == 1) ? '#' : make_link($viewModel, 1)  ?>">首页</a>&nbsp;
										<a href="<?php echo ($pageIndex == 1) ? '#' : make_link($viewModel, $pageIndex - 1)  ?>">上一页</a>&nbsp;
										<a href="<?php echo ($pageIndex == $totalPage) ? '#' : make_link($viewModel, $pageIndex  + 1)  ?>">下一页</a>&nbsp;
										<a href="<?php echo ($pageIndex == $totalPage) ? '#' : make_link($viewModel, $totalPage)  ?>">最后一页</a>
									</div>
								</td>
							</tr>
					 
					</table>
				</div>
				<!-- 商品展示结束 -->
			</div>
		
		</td>
		</tr>
		<tr>
			<td>
			<?php
				require(APPPATH . "views/ec/copy.php");
			?>
			</td>
		</tr>
		</table>
	</div>
	
	</div>
</body>
</html>
