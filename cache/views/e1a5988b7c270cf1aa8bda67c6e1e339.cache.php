<?php include $this->_include('header'); ?>
        <div class="bottom">


            <!--m-focus-->
			<?php $return = $this->_listdata("action=position id=7"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            <div class="banz"><img src="<?php echo $t['thumb']; ?>" /></div>
            <?php } } ?>
            
            <div class="nfb9">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb9-b">
                	<ul>
						<?php $return = $this->_listdata("catid=$catid order=listoredr_desc,updatetime_desc page=$page more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>">
                        	<div class="nfb9-b1">
                            	<p><span><?php echo $t['title']; ?></span></p>
                                <p><span>行业：<?php echo $t['xingye']; ?></span></p>
                                <p><span>地区：<?php echo $t['diqu']; ?></span></p>
                            </div>
                            <div class="nfb9-b2">年薪：<?php echo $t['nianxin']; ?></div>
                        </a></li>
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
