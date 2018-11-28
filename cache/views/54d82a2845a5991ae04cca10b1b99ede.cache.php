<?php include $this->_include('header'); ?>


<div class="ban1">
	<div class="ban1z">
    	<div class="ban1z-a"><img src="<?php echo $cats[$aa]['image']; ?>" /></div>
    </div>
</div>




<div class="nfa9">
	<div class="nfa9z">
		<span><?php echo $cats[$aa]['catname']; ?></span><font><?php echo $cats[$aa]['catdir']; ?></font>
    </div>
</div>


<div class="nfb1">
	<div class="nfb1z">
		<div class="nfb1z-a">
        	<ul>
                <?php $return = $this->_listdata("catid=$catid order=listoredr_desc,updatetime_desc page=$page more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            	<li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>">
                	<div>
                    	<p><?php echo $t['title']; ?></p>
                        <!--<p><font>实时捷报</font></p>-->
                    </div>
					<p class="other1">行业：<?php echo $t['xingye']; ?></p>
					<p class="other">地区：<?php echo $t['diqu']; ?></p>
                    <span>年薪：<?php echo $t['nianxin']; ?></span>
                </a></li>
                <?php } } ?>
               
            </ul>
        </div>
        
        <div class="nfb1z-b">
            <div>
                <?php echo $pagelist; ?>
            </div>
        </div>
        
    </div>
</div>





<?php include $this->_include('footer'); ?>