<?php 
	//初始化，这个只在主页做
	include_once '../framework/Application.php';
	
	$app = new Application("示例");
	
	include_once 'action/GoodTypeAction.php';
	
	$typeAction = new GoodTypeAction();
	
	$typeList = $typeAction->getTypeList();
	
	print_r($typeList);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>商品类型列表</title>
</head>
<body>
	<table width="100%" border="1">
		<thead>
			<tr>
				<td>gt_id</td>
				<td>gt_parentId</td>
				<td>gt_name</td>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</body>