<?php include $this->_include('header'); ?>

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
            <div class="nfa6z-b3">
            	<ul id="box-container">
                    <?php $return = $this->_listdata("catid=$catid order=listorder_desc,updatetime_desc page=$page"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                	<li class="box">
                    	<div><a title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                        <p><span><?php echo $t['title']; ?></span></p>
                    </li>
                    <?php } } ?>
                    
                </ul>
            </div>
            
            <div  class="nfa6z-b4">
                <div>
                    <?php echo $pagelist; ?>
                </div>
            </div>
        
        </div>
    </div>
</div>



<script src="<?php echo SITE_THEME; ?>js/ios-orientationchange-fix.js"></script>
<script src="<?php echo SITE_THEME; ?>js/jquery.swipebox.js"></script>
<script type="text/javascript">
$( document ).ready(function() {

		/* Basic Gallery */
		$( '.swipebox' ).swipebox();
		
		/* Video */
		$( '.swipebox-video' ).swipebox();

		

  });
</script>






















<?php include $this->_include('footer'); ?>