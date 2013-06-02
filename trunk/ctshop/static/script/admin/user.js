/**
 * 用户管理
 */
var User = {
		
	/**
	 * 验证查询
	 */
	valiQuery : function(){
		var userName = jQuery("#userName").val();
		
		if(userName != "" && !/^\w+$/.test(userName)){
			alert("请输入正确的用户名!");
			return false;
		}
		
		return true;
	}, 
	
	/** 修改每页显示条数 */
	changePage : function(e){
		var pageSize = jQuery(e).val();
		jQuery("#page_size").val(pageSize);
		this.sumbitQuery();
	},
	
	/**
	 * 提交查询
	 */
	sumbitQuery : function(){
		if(this.valiQuery()){
			jQuery("#user_query").submit();
		}
	}, 

	/**
	 * 锁定用户
	 */
	updStatus : function(url, srcStatus){
		var notMsg = "";
		
		if(srcStatus == 0){
			notMsg = "您确定要解锁该用户吗？";
		}else if(srcStatus == 1){
			notMsg = "您确定要锁定该用户吗？";
		}else if(srcStatus == 2){
			notMsg = "您确定要删除该用户吗？";
		}
		
		if(confirm(notMsg)){
			document.location = url; 
		}
	},
	
	/**
	 * 设置管理员
	 */
	setAdmin : function(url, userName){
		if(confirm("您确定要设置" + userName + "为管理员吗？")){
			document.location = url;
		}
	}
};