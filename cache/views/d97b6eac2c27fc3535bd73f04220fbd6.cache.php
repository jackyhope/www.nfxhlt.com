<div class="djxl">
	<div class="djxl-a"><span><?php echo $cats[$aa]['catname']; ?></span></div>
	<div class="djxl-b">
		<ul>
			<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==$aa && $t['ismenu']) { ?>
			<li <?php if ($t['catid']==$catid) { ?>class="om"<?php } ?>><a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>"><?php echo $t['catname']; ?></a></li>
			<?php }  } } ?>
		</ul>
	</div>
</div>