/**
 * 登录
 */
var Login = {
	loginForm : null,
	valReg : /^\w+$/,
	
	/**
	 * 初始化
	 */
	__init__ : function(){
		this.loginForm = $("#login_form");
		this.resetVal();
	},
	
	/**
	 * 登录
	 */
	login : function(){
		if(!this.validateVal()){
			alert("请输入正确的用户名或密码!");
			this.resetVal();
			return false;
		}
		
		this.loginForm.submit();
	},
	
	/**
	 * 重置
	 */
	resetVal : function(){
		this.loginForm.find("#userName").val("");
		this.loginForm.find("#userPwd").val("");
	},
	
	/**
	 * 验证输入
	 */
	validateVal : function(){
		var userName = $("#userName").val();
		var userPwd = $("#userPwd").val();
		
		if(!this.valReg.test(userName) || !this.valReg.test(userPwd)){
			return false;
		}
		
		return true;
	}
};

$(document).ready(function(){
	Login.__init__();
});