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
            <div class="nfa6z-b7">
            	<div class="nfa6z-b7a">
                	<div><img src="<?php echo block(19); ?>" /></div>
                </div>
				
                <div class="nfa6z-b7b">
                	<ul>
						<?php $return = $this->_listdata("catid=$catid order=liatorder_desc,updatetime_desc more=1 page=$page"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li class="box">
                    		<span class="nfa6z-b7b3" onclick="showbox(<?php echo $t['id']; ?>)">+</span>
                        	<div class="nfa6z-b7b1">
                            	<p><span><?php echo $t['title']; ?></span></p>
                                <p><font>（<?php echo $t['renshu']; ?>）</font></p>
                            </div>
                            <div class="nfa6z-b7b2" id="show<?php echo $t['id']; ?>">
                            	<p><span>岗位职责：</span></p>
                                <div>
                                	<?php echo html_entity_decode($t['content']); ?>
									
								</div>
                            </div>
                            
                        </li>
						<?php } } ?>
                        
                    </ul>
                </div>
            </div>
            
            <div  class="nfa6z-b4">
                <div>
                    <?php echo $pagelist; ?>
                </div>
            </div>
        
        </div>
    </div>
</div>

 <style>
.nfa6z-b7b ul li .nfa6z-b7b2.add{ height:auto;}
.nfa6z-b7b ul li .nfa6z-b7b2.add div{height:auto;}
 </style>
<script type="text/javascript">
// 收缩展开效果
function showbox(id){
   var claval=$("#show"+id).attr('class');
   if(claval=="nfa6z-b7b2"){
		$(".box .nfa6z-b7b2").removeClass('add');
		$("#show"+id).addClass('add');
   }else{
		$("#show"+id).removeClass('add');;
   };
  
};


</script>
















<?php include $this->_include('footer'); ?>
