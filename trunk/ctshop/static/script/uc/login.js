/**
 * 用户登录
 */
function submitForm() {
	var userName = jQuery("#userName").val();
	var userPwd = jQuery("#userPwd").val();

	if (!userName || jQuery.trim(userName) == "") {
		alert("用户名不能为空！");
		jQuery("#userName").focus();
	} else if (!userPwd || jQuery.trim(userPwd) == "") {
		alert("密码不能为空！");
		jQuery("#userPwd").focus();
	} else {
		jQuery("#loginForm").submit();
	}
}
