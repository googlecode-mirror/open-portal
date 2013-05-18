<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>模拟用户首页</title>
</head>
<body>
<?php 
$user = $this->session->userdata("user");//获取session中的用户

if ($user != null) {
	if ($user["u_lock"] == 1) {
		echo 'user locked!';
	} else if ($user["u_del"] == 1) {
		echo 'user deleted!';
	} else {
		echo '欢迎'.$user["u_name"];
	}
} else {
	require_once APPPATH.'views/uc/login.php';
}
echo '&nbsp;&nbsp;&nbsp;<a href="'.CTX_PATH.'index.php/uc/Regist/index">用户注册</a>&nbsp;&nbsp;&nbsp;<a href="'.CTX_PATH.'index.php/uc/Logout/index">用户退出</a><br/>'
?>
</body>

