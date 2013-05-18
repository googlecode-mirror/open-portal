<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>彩通</title>
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/index.css" />
<script type = "text/javascript">
	window.onload = function(){
		setTimeout(function(){
			var params = [];
			params.push('width=',screen.availWidth);
			params.push(', height=',screen.availHeight);
			params.push(', top=0, left=0, status=1,resizable=1');
			var newwin = window.open('<?=CTX_PATH ?>index.php/<?=$to_url ?>', "", params.join(","));
			if (window.focus) {newwin.focus()}
			window.open('', '_parent', '');
			window.close();
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