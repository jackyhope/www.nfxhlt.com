<div class="nfa8z-b">
        	<div class="nfa8z-b1">
            	<div class="nfa8z-b1a">推荐热文</div>
                <div class="nfa8z-b1b">
                    <?php $return = $this->_listdata("action=position id=3 num=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                	<div><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /><p><span><?php echo $t['title']; ?></span></p></a></div>
                    <?php } } ?>
                    <ul>
						<?php $i=1;  $return = $this->_listdata("action=position id=3"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) {  if ($i>1) { ?>
                    	<li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a><span><?php echo date('Y-m-d',$t['updatetime']); ?></span></li>
						<?php }  $i++;  } } ?>
                        
                    </ul>
                </div>
            </div>
            <div class="nfa8z-b1">
            	<div class="nfa8z-b1a">最新资讯</div>
                <div class="nfa8z-b1b">
                    <?php $return = $this->_listdata("catid=1 order=updatetime_desc num=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                	<div><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /><p><span><?php echo $t['title']; ?></span></p></a></div>
                    <?php } } ?>
                    <ul>
                        <?php $return = $this->_listdata("catid=1 order=updatetime_desc num=1,5"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a><span><?php echo date('Y-m-d',$t['updatetime']); ?></span></li>
                        <?php } } ?>
                        
                    </ul>
                </div>
            </div>
            
            
        </div>