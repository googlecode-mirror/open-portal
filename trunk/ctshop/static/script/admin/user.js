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
	}
};