<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/login.css" />
<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    var user_is_exist = false;//全局变量,用户是否存在 

	function checkUserExist() {
		//Ajax请求，检查用户名是否被注册了
		var userName = jQuery("#userName").val();
		    
	    //验证1,必需有 
	    if (!userName || jQuery.trim(userName) == "") {
	    	return;
	    }
		//alert(userName);
	    //验证2,在数据库中尚未注册过的 
	    jQuery.ajax({
		    type: "post",
		    url: "../regist/checkUserExist",
		    data: {"userName":userName},
		    success: function(msg) {
		        if (msg == '1') {
		        	user_is_exist = true;
			        jQuery("#userName" + "Info").text("用户名已经被占用!");
					jQuery("#userName").focus();
		        } else  {
		        	user_is_exist = false;
		        	jQuery("#userName" + "Info").text("");
		        }

		    }//, 
	    //async: false //同步也没用 
	    });
				
	}
	function validForm() {
		jQuery(".errInfo").text(""); //清空错误信息
		var userName = jQuery("#userName").val();
		var userPwd = jQuery("#userPwd").val();
		var userPwd2 = jQuery("#userPwd2").val();
		var email = jQuery("#email").val();
		var country = jQuery("#country").val();
		var telNo = jQuery("#telNo").val();

	    var errorFlag = false;
		if (!userName || jQuery.trim(userName) == "") {
			//alert("用户名不能为空!");
			jQuery("#userName" + "Info").text("用户名不能为空!");
			jQuery("#userName").focus();
			errorFlag = true;
		} 
		 if (!userPwd || jQuery.trim(userPwd) == "") {
			//alert("密码不能为空!");
			jQuery("#userPwd" + "Info").text("密码不能为空!");
			jQuery("#userPwd").focus();
			errorFlag = true;
		} 
		 if (userPwd != userPwd2){
			//alert("两次输入的密码不相同!");
			jQuery("#userPwd2" + "Info").text("两次输入的密码不相同!");
			jQuery("#userPwd2").focus();
			errorFlag = true;
		}
		 if (!email || jQuery.trim(email) == ""){
			//alert("邮箱地址不能为空!");
			jQuery("#email" + "Info").text("邮箱地址不能为空!");
			jQuery("#email").focus();
			errorFlag = true;
		}
		 if (/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email) == false){
			//alert("邮箱地址格式错误!");
			jQuery("#email" + "Info").text("邮箱地址格式错误!");
			jQuery("#email").focus();
			errorFlag = true;
		}
		 if (!country || jQuery.trim(country) == ""){
			//alert("国家不能为空!");
			jQuery("#country" + "Info").text("国家不能为空!");
			jQuery("#country").focus();
			errorFlag = true;
		}
		 if (!telNo || jQuery.trim(telNo) == ""){
			//alert("手机号码不能为空!");
			jQuery("#telNo" + "Info").text("手机号码不能为空!");
			jQuery("#telNo").focus();
			errorFlag = true;
		} 
		 if (isNaN(jQuery("#telNo").val())){
			//alert("手机号码只能是数字!");
			jQuery("#telNo" + "Info").text("手机号码只能是数字!");
			jQuery("#telNo").focus();
			errorFlag = true;
		}
		if (errorFlag == true || user_is_exist) {
			return false;
		}
		return true;
	}
	function submitForm() {
		if (validForm()) {
			jQuery("#registForm").submit();
		}
	}
</script>
</head>

<body>
	<div class="dataform">
		<font color="red"></font>
		<form id="registForm" action="regist" method="post">
			<table width="400" border="0" align="center" cellpadding="10"
				cellspacing="0" class="table1">
				<tr>
					<td>
						<table width="90%" border="0" align="center" cellpadding="5"
							cellspacing="0">
							<tr>
								<td width="25%">
									<div align="right">用户名:</div>
								</td>
								<td width="75%">
									<input type="text" name="userName" id="userName" cssClass="input2" size="15" maxlength="20" onchange="checkUserExist()"/><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="userNameInfo"></span></font>
								</td>
							</tr>
							<tr>
								<td>
									<div align="right">密码:</div>
								</td>
								<td>
									<input type="password" name="userPwd" id="userPwd" cssClass="input2" size="16" maxlength="20" /><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="userPwdInfo"></span></font>
								</td>
							</tr>
							<tr>
								<td>
									<div align="right">重复密码:</div>
								</td>
								<td>
									<input type="password" name="userPwd2" id="userPwd2" cssClass="input2" size="16" maxlength="20" /><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="userPwd2Info"></span></font>
								</td>
							</tr>
							<tr>
								<td>
									<div align="right">邮箱:</div>
								</td>
								<td>
									<input type="text" name="email" id="email" cssClass="input2" size="16" maxlength="20" /><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="emailInfo"></span></font>
								</td>
							</tr>
							<tr>
								<td>
									<div align="right">国家:</div>
								</td>
								<td>
									<input type="text" name="country" id="country" cssClass="input2" size="16" maxlength="20" /><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="countryInfo"></span></font>
								</td>
							</tr>
							<tr>
								<td>
									<div align="right">手机号码:</div>
								</td>
								<td>
									<input type="text" name="telNo" id="telNo" cssClass="input2" size="16" maxlength="20" /><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="telNoInfo"></span></font>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<div align="center">
										<input type="button" onclick="submitForm()" value="提交" cssClass="button1" />
										<input type="reset" value="重置" cssClass="button1" />
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>