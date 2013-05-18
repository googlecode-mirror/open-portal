<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>彩通</title>
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/index.css" />
<script type = "text/javascript">
	window.onload = function(){
		setTimeout(function(){
			document.location = '<?=CTX_PATH ?>index.php/<?=$to_url ?>';
		}, 1000);
	};
</script>
</head>
<body>
	<center>
		[<?=$msg ?>]<p></p>
		[<a href = "<?=CTX_PATH ?>index.php/<?=$to_url ?>">页面正在跳转，如果你的浏览器不支持跳转，请点击这里</a>]
	</center>
</body>
</html>