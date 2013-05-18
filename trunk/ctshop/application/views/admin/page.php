<div style = "float: left;height:30px;line-height:30px;margin-left:5px;">
	共<?=$count ?>条记录 共<?=$pageCount ?>页 每页显示<?=$pageSize ?>条 当前第<?=$currPage ?>页
</div>
<div style = "float: right;height:30px;line-height:30px;margin-right:5px;">
<?php 
	if($currPage != 1){
?>
<a href = "<?=$page_url.'/1/'.$pageSize ?>">首页</a>&nbsp;
<?php 
	}else{
?>
<a>首页</a>&nbsp;
<?php 
	}
?>

<?php 
	if($currPage > 1){
?>
<a href = "<?=$page_url.'/'.($currPage - 1).'/'.$pageSize ?>">上一页</a>&nbsp;
<?php 
	}else{
?>
<a>上一页</a>	&nbsp;
<?php 
	}
?>
<?php 
	if($currPage < $pageCount){
?>
<a href = "<?=$page_url.'/'.($currPage + 1).'/'.$pageSize ?>">下一页</a>&nbsp;
<?php 
	}else{
?>
<a>下一页</a>&nbsp;
<?php 
	}
?>
<?php 
	if($currPage != $pageCount){
?>
<a href = "<?=$page_url.'/'.$pageCount.'/'.$pageSize ?>">最后一页</a>&nbsp;
<?php 
	}else{
?>
<a>最后一页</a>&nbsp;
<?php 
	}
?>
<select id = "page_size_list" style = "margin-top:5px;" onchange = "Order.changePage(this);">
	<?php 
		if($pageSize == 5){
	?>
	<option value="5" selected="selected">5</option>
	<?php }else{?>
	<option value="5">5</option>
	<?php }?>
	
	<?php 
		if($pageSize == 10){
	?>
	<option value="10" selected="selected">10</option>
	<?php }else{?>
	<option value="10">10</option>
	<?php }?>
	
	<?php 
		if($pageSize == 15){
	?>
	<option value="15" selected="selected">15</option>
	<?php }else{?>
	<option value="15">15</option>
	<?php }?>
</select>
</div>