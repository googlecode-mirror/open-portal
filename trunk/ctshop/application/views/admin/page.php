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
</div>