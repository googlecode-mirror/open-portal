<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心</title>
<meta http-equiv=Content-Type content=text/html;charset=UTF-8 />
<link type="text/css" rel="stylesheet" href="<?=CTX_PATH ?>static/css/manage_pub.css" />
<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var doc_height = jQuery(document).height();
		var doc_width = jQuery(document).width();
		jQuery("#admin_tb").css("height", doc_height + "px");
		jQuery("#admin_body").css("height", (doc_height - 70) + "px");
		jQuery("#right_body").css("height", (doc_height - 118) + "px");
		jQuery("#right_content").css("width", (doc_width - 188) + "px");
	});	
</script>
</head>
<body>
<div class="xxx"></div>
	<table id = "admin_tb" border = "1" width = "100%" height = "100%" cellspacing = "0" cellpadding = "0">
		<tr>
			<td colspan="2" height = "64">
				<?php require_once APPPATH.'views/admin/admin_top.php'; ?>
			</td>
		</tr>
		<tr>
			<td style = "width:182px;"  valign="top">
				<?php require_once APPPATH.'views/admin/left.php'; ?>
			</td>
			<td valign="top" style="text-align:right;">
			<div style = "height:500px;overflow: auto;" id = "admin_body">
				<?php require_once APPPATH.'views/admin/right.php'; ?>
			</div>
			</td>
		</tr>
	</table>
</body>
</html>
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