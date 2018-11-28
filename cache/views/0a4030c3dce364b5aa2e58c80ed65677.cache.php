<?php include $this->_include('header');  if ($catid==$aa) {  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==$aa && $t['ismenu']) {  $catid=$t['catid'];break;  }  } }  } ?>
<div class="ban1">
	<div class="ban1z">
    	<div class="ban1z-a"><img src="<?php echo $cats[$aa]['image']; ?>" /></div>
    </div>
</div>





<div class="nfa6">
	<div class="nfa6z">
		<div class="nfa6z-a">
        	<div class="nfa6z-a1">
            	<p><span><?php echo $cats[$aa]['catname']; ?></span></p>
                <p><font><?php echo $cats[$aa]['catdir']; ?></font></p>
            </div>
            <div class="nfa6z-a2">
            	<ul>
                    <?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==$aa && $t['ismenu']) { ?>
                	<li <?php if ($t['catid']==$catid) { ?>class="pon"<?php } ?>><a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>" ><?php echo $t['catname']; ?></a></li>
                    <?php }  } } ?>
                    
                </ul>
            </div>
        </div>
        <div class="nfa6z-b">
        	<div class="nfa6z-b1"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
            <div class="nfa6z-b2">
            	<?php echo $cats[$catid]['content']; ?>
				
            </div>
        </div>
    </div>
</div>


















<?php include $this->_include('footer'); ?>
