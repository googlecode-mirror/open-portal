<script src="<?=CTX_PATH ?>static/script/admin/prototype.lite.js" type="text/javascript"></script>
<script src="<?=CTX_PATH ?>static/script/admin/moo.fx.js" type="text/javascript"></script>
<script src="<?=CTX_PATH ?>static/script/admin/moo.fx.pack.js" type="text/javascript"></script>
<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	background-image: url(<?=CTX_PATH ?>static/images/menu_bgS.gif);
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?=CTX_PATH ?>static/images/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?=CTX_PATH ?>static/images/menu_bg1.gif);
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?=CTX_PATH ?>static/images/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-image: url(<?=CTX_PATH ?>static/images/menu_bg2.gif);
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
</style>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td style = "width:182px;" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">订单管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=CTX_PATH ?>static/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=CTX_PATH ?>index.php/admin/Order/orderList/0">待确认订单</a></li>
          <li><a href="<?=CTX_PATH ?>index.php/admin/Order/orderList/1">备货中订单</a></li>
          <li><a href="<?=CTX_PATH ?>index.php/admin/Order/orderList/2">发货中订单</a></li>
          <li><a href="<?=CTX_PATH ?>index.php/admin/Order/orderList/3">已收货订单</a></li>
          <li><a href="<?=CTX_PATH ?>index.php/admin/Order/orderList/4">作废订单</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">商品管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=CTX_PATH ?>static/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=CTX_PATH ?>index.php/admin/Good/goodList">商品列表</a></li>
          <li><a href="#" target="main">分类列表</a></li>
          <li><a href="#" target="main">新增商品</a></li>
          <li><a href="#" target="main">新增分类</a></li>
          <li><a href="#" target="main">商品评论</a></li>
         </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">用户管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=CTX_PATH ?>static/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="<?=CTX_PATH ?>index.php/admin/User/userList/0/0">普通用户</a></li>
		  <li><a href="<?=CTX_PATH ?>index.php/admin/User/userList/0/1">管理员</a></li>
		  <li><a href="<?=CTX_PATH ?>index.php/admin/User/userList/1">已锁定用户</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">系统管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=CTX_PATH ?>static/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="#" target="main">会员管理</a></li>
          <li><a href="#" target="main">留言管理</a></li>
          <li><a href="#" target="main">回复管理</a></li>
          <li><a href="#" target="main">订单管理</a></li>
          <li><a href="#" target="main">举报管理</a></li>
          <li><a href="#" target="main">评论管理</a></li>
        </ul>
      </div>
    </div>
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>