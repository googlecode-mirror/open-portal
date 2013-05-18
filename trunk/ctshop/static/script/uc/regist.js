var user_is_exist = false;//全局变量,用户是否存在 
/**
 * 检查用户是否被注册
 */
function checkUserExist() {
	//Ajax请求，检查用户名是否被注册了
	var userName = jQuery("#userName").val();
	    
    //验证1,必需有 
    if (!userName || jQuery.trim(userName) == "") {
    	return;
    }
    //验证2,在数据库中尚未注册过的 
    jQuery.ajax({
	    type: "post",
	    url: checkUserExistUrl,
	    //url: "uc/regist/checkUserExist",
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

/**
 * 验证注册信息
 * @returns {Boolean}
 */
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
		//jQuery("#registForm").submit();
		
		var userName = jQuery("#userName").val();
		var userPwd = jQuery("#userPwd").val();
		var email = jQuery("#email").val();
		var country = jQuery("#country").val();
		var telNo = jQuery("#telNo").val();
		
		 jQuery.ajax({
			    type: "post",
			    url: registUrl,
			    //url: "uc/regist/regist",
			    data: {"userName":userName, 
				    	"userPwd":userPwd,
				    	"email":email,
				    	"country":country,
				    	"telNo":telNo
			    	},
			    success: function(msg) {
			    	alert(msg);
			    	if (msg == '1') {
			    		//注册成功跳转到首页
						//$this->load->view("uc/regist");
			    		window.location.href = indexUrl; 
			    	} else if (msg == '0') {
			    		//注册失败，用户被占用
				        jQuery("#userName" + "Info").text("用户名已经被占用!");
						jQuery("#userName").focus();
			        } else {
			        	jQuery("#regist" + "Info").text("注册失败!");
			        	jQuery("#registErrorInfo").show();
			        }
			    }//, 
		    //async: false //同步也没用 
		    });
	}
}