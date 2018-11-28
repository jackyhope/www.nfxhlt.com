<?php include $this->_include('header');  if ($catid==$aa) {  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==$aa && $t['ismenu']) {  $catid=$t['catid'];break;  }  } }  } ?>

        <div class="bottom">
        
			<?php include $this->_include('column'); ?>

            <!--m-focus-->
			     
            <div class="nfb7">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb7-b">
                	<?php echo $cats[$catid]['content']; ?>
                </div>
            </div>













<?php include $this->_include('footer'); ?>