/**
 * 订单管理
 */
var Order = {
		
	/**
	 * 验证查询
	 */
	valiQuery : function(){
		var oderId = jQuery("#orderId").val();
		
		if(!/^\d+$/.test(oderId)){
			alert("请输入正确的订单号!");
			return false;
		}
		
		return true;
	}, 
	
	/**
	 * 提交查询
	 */
	sumbitQuery : function(){
		if(this.valiQuery()){
			jQuery("#order_query").submit();
		}
	}
}