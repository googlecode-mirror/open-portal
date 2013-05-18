<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link type="text/css" rel="stylesheet" href="<?php echo CTX_PATH ?>static/css/login.css" />
<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/jquery-1.9.1.min.js"></script>
<script type = "text/javascript" src = "<?=CTX_PATH ?>static/script/uc/regist.js"></script>
<script type="text/javascript">
	var checkUserExistUrl = "<?php echo site_url('uc/regist/checkUserExist') ?>";
	var registUrl = "<?php echo site_url('uc/regist/userRegist') ?>";
	var indexUrl = "<?php echo site_url('uc/main/index') ?>";
</script>
</head>

<body>
	<div class="dataform">
		<font color="red"></font>
		<form id="registForm" action="regist" method="post">
			<table width="400" border="0" align="center" cellpadding="10" cellspacing="0" class="table1">
				<tr id="registErrorInfo" style="display:none">
					<td><font color="red">*&nbsp;&nbsp;<span class="errInfo" id="registInfo"></span></font></td>
				</tr>
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