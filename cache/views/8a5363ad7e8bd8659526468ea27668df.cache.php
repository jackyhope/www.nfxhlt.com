<?php include $this->_include('header'); ?>
        <div class="bottom">
        
			<?php include $this->_include('column'); ?>

            <!--m-focus-->
			     
            <div class="nfb7">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb7-e">
                	<ul>
						<?php $return = $this->_listdata("catid=$catid order=listorder_desc,updatetime_desc page=$page more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li>
                        	<div class="nfb7-e1">
                            	<div><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['tupian']; ?>" /></a></div>
                                <p><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo strcut($t['title'],45); ?></a></p>
                            </div>
                            <div class="nfb7-e2"><a  href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                            <div class="nfb7-e3"><?php echo strcut($t['description'],100); ?></div>
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

