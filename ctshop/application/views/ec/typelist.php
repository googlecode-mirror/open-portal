<div class="ct_middle_type">
	<div class = "ct_middle_type_title">
	<img src = "<?php echo CTX_PATH ?>static/images/location_hot.gif" />&nbsp;产品分类
	</div>
	<div class="ct_middle_type_list">
		<?php if(count($viewModel->typeTree) == 0) :?>
			<div> 没有定义商品类别</div>
		<?php else :?>
		<!-- 第一层目录 开始-->
		<?php foreach ($viewModel->typeTree as $k => $rootType): ?>
		<div class = "ct_middle_type_flow">
			<a href = "<?php echo CTX_PATH ?>index.php/ec/item/showlist/<?php echo $rootType["id"] ?>" style = "display:block;"><img src = "<?php echo CTX_PATH ?>static/images/ns-expand.gif" /> <?php echo $rootType["name"] ?> </a>
		</div>
			<!-- 第二层目录开始 -->
			<?php foreach ($rootType["children"] as $k2 => $type): ?>
			<div class = "ct_middle_type_sub_flow"><a href = "<?php echo CTX_PATH ?>index.php/ec/item/showlist/<?php echo $type["id"] ?>" style = "display:block;"><img src = "<?php echo CTX_PATH ?>static/images/expand.gif" /> <?php echo $type["name"] ?></a></div>
			<?php endforeach;?>
			<!-- 第二层目录结束 -->
		<?php endforeach; ?>
		<!-- 第一层目录结束 -->
		<?php endif; ?>
	</div>
</div>