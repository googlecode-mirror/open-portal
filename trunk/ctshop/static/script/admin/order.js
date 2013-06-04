/**
 * 订单管理
 */
var Order = {
		
	/**
	 * 验证查询
	 */
	valiQuery : function(){
		var oderId = jQuery("#orderId").val();
		
		if(oderId != "" && !/^\d+$/.test(oderId)){
			alert("请输入正确的订单号!");
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
			jQuery("#order_query").submit();
		}
	},
	
	/**
	 * 修改订单状态
	 */
	updOrderStatus : function(url, status) {
		if(confirm("您确定要修改订单状态为" + status + "吗")){
			jQuery.ajax({
				url : url,
				async : false,
				success : function(res){
					if(res){
						alert("操作成功！");
						window.location.reload();
					}else{
						alert("操作失败！");
					}
				}
			});
		}
	}
};