<?php include $this->_include('header'); ?>
        <div class="bottom">
        
			<?php include $this->_include('column'); ?>

            <!--m-focus-->
			     
            <div class="nfb8">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb8-b">
                	<div class="nfb8-b1">招聘电话：<!--招聘电话--><?php echo block(22); ?><!--招聘电话--></div>
                    <div class="nfb8-b2">
                    	<img src="<?php echo block(21); ?>" />
                    </div>
                    <div class="nfb8-b3">
                    	<ul>
							<?php $return = $this->_listdata("catid=$catid order=liatorder_desc,updatetime_desc more=1 page=$page"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                        	<li class="box" >
                            	<span class="nfb8-b3c" onclick="showbox(<?php echo $t['id']; ?>)">+</span>
                            	<div class="nfb8-b3a">
                                	<p><span><?php echo $t['title']; ?></span></p>
                                    <p><font>（<?php echo $t['renshu']; ?>）</font></p>
                                </div>
                                <div class="nfb8-b3b" id="show<?php echo $t['id']; ?>">
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
                
                <div class="nfb7-d">
                	<div>
                        <?php echo $pagelist; ?>
                    </div>
                </div>

            </div>








<style>
.nfb8-b3 ul li .hauto{ height:auto;}
.nfb8-b3 ul li .hauto div{height:auto;}
 </style>
<script type="text/javascript">
// 收缩展开效果
function showbox(id){
   var claval=$("#show"+id).attr('class');
   if(claval=="nfb8-b3b"){
		$(".box .nfb8-b3b").removeClass('hauto');
		$("#show"+id).addClass('hauto');
   }else{
		$("#show"+id).removeClass('hauto');;
   };
  
};


</script>






<?php include $this->_include('footer'); ?>
