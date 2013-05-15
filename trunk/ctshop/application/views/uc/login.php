<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登录</title>
		<link href="css/css1.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<form action="login" method="post">
			<table width="400" border="0" align="center" cellpadding="10"
				cellspacing="0" class="table1">
				<tr>
					<td>
						<table width="70%" border="0" align="center" cellpadding="5"
							cellspacing="0">
							<tr>
								<td width="34%">
									<div align="right">
										用户名:
									</div>
								</td>
								<td width="66%">
									<input type="text" name="userName" id="userName" cssClass="input2" size="15" maxlength="20" />
								</td>
							</tr>
							<tr>
								<td>
									<div align="right">
										密码:
									</div>
								</td>
								<td>
									<input type="password" name="userPwd" id="userPwd" cssClass="input2" size="16" maxlength="20" />
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
									<div align="center">
										<input type="submit" value="提交" cssClass="button1" />
										<input type="reset" value="重置" cssClass="button1" />
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>
