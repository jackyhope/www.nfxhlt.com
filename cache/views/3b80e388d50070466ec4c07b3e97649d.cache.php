<?php include $this->_include('header'); ?>
        <div class="bottom">
        
			<?php include $this->_include('column'); ?>

            <!--m-focus-->
			     
            <div class="nfb7">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb7-c">
                	<ul>
						<?php $return = $this->_listdata("catid=$catid order=listorder_desc,updatetime_desc page=$page"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li>
                        	<div><a><img src="<?php echo $t['thumb']; ?>" /></a></div>
                            <p><a><?php echo $t['title']; ?></a></p>
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