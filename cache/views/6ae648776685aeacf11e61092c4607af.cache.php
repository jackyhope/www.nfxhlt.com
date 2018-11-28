<?php include $this->_include('header'); ?>
        <div class="bottom">
        
			<?php include $this->_include('column'); ?>

            <!--m-focus-->
			     
            <div class="nfb8">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb8-d">
                	<ul>
						<?php $return = $this->_listdata("catid=$catid order=listorder_desc,updatetime_desc page=$page"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li>
                        	<div class="nfb8-d1"><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                            <div class="nfb8-d2">
                            	<p><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a></p>
                                <p><span><?php echo date('Y-m-d',$t['updatetime']); ?></span></p>
                                <div><?php echo $t['description']; ?></div>
                            </div>
                        </li>
						<?php } } ?>
                       
                    </ul>
                </div>
                
				<div class="nfb7-d">
                	<div>
                        <?php echo $pagelist; ?>
                    </div>
                </div>
                

            </div>





















<?php include $this->_include('footer'); ?>