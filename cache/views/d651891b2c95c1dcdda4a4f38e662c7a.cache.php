<?php include $this->_include('header'); ?>
<script src="<?php echo SITE_THEME; ?>js/swipe.js"></script> 


        <div class="bottom">
			<?php $return = $this->_listdata("action=position id=6 num=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
			<div class="banz"><img src="<?php echo $t['thumb']; ?>" /></div>
			<?php } } ?>

            <!--m-focus-->
			<div class="nf7">
            	<div class="nf7-a">
                	<p><span>快速咨询</span></p>
                    <p><font>QUICK QUERY</font></p>
                </div>
                <div class="nf7-b">
					<form action="<?php echo url('form/post', array('modelid'=>7)); ?>" method="post">
                	<ul>
                    	<li><i><img src="<?php echo SITE_THEME; ?>images/bg1.png" /></i><input type="text" name="data[xingming]" value="" placeholder="输入招聘岗位" /></li>
                        <li><i><img src="<?php echo SITE_THEME; ?>images/bg2.png" /></i><input type="text" name="data[dianhua]" value="" placeholder="输入手机号码" /></li>
                    </ul>
                    <div><input type="submit" name="submit" value="免费获取人才简历" /></div>
					</form>
                </div>
            </div>

			<div class="nf8">
            	<div class="nf7-a">
                	<p><span><?php echo $cats[35]['catname']; ?></span></p>
                    <p><font><?php echo $cats[35]['setting']['descritext']; ?></font></p>
                </div>
                <div class="nf8-b">
                	<div class="nf8-b1"><img src="<?php echo SITE_THEME; ?>images/re.png" /></div>
                	<div class="nf8-b2">
                        <ul>
							<?php $i=1;  $return = $this->_listdata("catid=35 order=listorder_asc"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                            <li><span><?php echo $i; ?></span><font><?php echo $t['description']; ?></font></li>
							<?php $i++;  } } ?>
                        </ul>
                    </div>
                </div>
            </div>
            

            <div class="nfb2">
            	<div class="nf7-a">
                	<p><span><?php echo $cats[36]['catname']; ?></span></p>
                    <p><font><?php echo $cats[36]['setting']['descritext']; ?></font></p>
                </div>
            	<div class="nfb2-b">
                	<div id="slider1" class="swipe" style="visibility:visible;">  
                            <div class="swipe-wrap"> 
								<?php $return = $this->_listdata("catid=36 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                            	<figure>
                                    <div class="face faceInner"> 
                                         <ul>
                                         	<li><a>
                                            	<div class="face-a"><img src="<?php echo $t['thumb']; ?>" /></div>
                                                <div class="face-b">
                                                	<div class="face-b1">
                                                        <p><span><?php echo $t['title']; ?></span></p>
														<p><font><?php echo $t['description']; ?></font></p>
                                                    </div>
                                                    <div class="face-b2"><?php echo clearhtml($t['content']); ?></div>
                                                </div>
                                            </a></li>
                                         </ul>
                                    </div>
                                 </figure>
								 <?php } } ?>
                                   
                            </div>  
                        </div>  
                              
                        <nav>  
                            <ul id="position1">  
							<?php $i=1;  $return = $this->_listdata("catid=36 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                              <li <?php if ($i==1) { ?>class="on"<?php } ?>></li> 
							  <?php $i++;  } } ?>			 
                            </ul>  
                        </nav>
                </div>
            </div>
            
            <div class="nfb3">
            	<div class="nf7-a">
                	<p><span>服务产品</span></p>
                    <p><font>SERVICE PRODUCTS</font></p>
                </div>
            	<div class="nfb3-b">
                	<div id="slider2" class="swipe" style="visibility:visible;">  
                            <div class="swipe-wrap"> 
								<?php $return = $this->_listdata("catid=45 order=listorder_asc"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) {  $imags[]=$t['thumb'];  } }  $i=0;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==5 && $t['ismenu']) { ?>
                            	<figure>
                                    <div class="face faceInner"> 
                                         <ul>
                                         	<li><a>
                                            	<div class="face-a"><img src="<?php echo $imags[$i]; ?>" /></div>
                                                <div class="face-b">
                                                	<div class="face-b1">
                                                        <p><span><?php echo $t['catname']; ?></span></p>
														<p><font><?php echo $t['setting']['descritext']; ?></font></p>
                                                    </div>
                                                    <div class="face-b2">
                                                    	<?php echo $t['content']; ?>
                                                    </div>
                                                </div>
                                            </a></li>
                                         </ul>
                                    </div>
                                 </figure>
								 <?php $i++;  }  } } ?>
                                  
                            </div>  
                        </div>  
                              
                        <nav>  
                            <ul id="position2">  
                              <li class="on"></li>  
                              <li class=""></li> 
                              <li class=""></li> 
                              <li class=""></li>
                              <li class=""></li>  
                            </ul>  
                        </nav>
                </div>
            </div>
            
            <div class="nfb4" style="background:none;">
            	<div class="nfb4-a">
                	<?php echo $cats[46]['content']; ?>
                </div>
            </div>

            <div class="nfb5">
            	<div class="nf7-a">
                	<p><span><?php echo $cats[38]['catname']; ?></span></p>
					<p><font><?php echo $cats[38]['setting']['descritext']; ?></font></p>
                </div>
            	<div class="nfb5-b">
                	<ul>
						<?php $i=1;  $return = $this->_listdata("catid=38 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li>
                        	<div class="nfb5-b1"><div><img src="<?php echo SITE_THEME; ?>images/gh<?php echo $i; ?>.png" /></div></div>
                            <div class="nfb5-b2">
                            	<p><span><?php echo $t['title']; ?></span></p>
                                <p><i></i></p>
                                <div><?php echo clearhtml($t['content']); ?></div>
                            </div>
                        </li>
						<?php $i++;  } } ?>
                        
                    </ul>
                </div>
            </div>
            

            <div class="nfb6">
            	<div class="nf7-a">
                	<p><span>专业猎头顾问诊断岗位招聘费用</span></p>
                    <p><font>CONSULTANT DIAGNOSIS JOB RECRUITMENT FEE</font></p>
                </div>
				<form action="<?php echo url('form/post', array('modelid'=>9)); ?>" method="post">
            	<div class="nfb6-b">
                	<ul>
                        <li><span><font>*</font>招聘岗位：</span><input name="data[gangwei]" type="text" value="" /></li>
                        <li><span>岗位薪酬：</span><input name="data[xinchou]" type="text" value="" /></li>
                        <li><span>招聘周期：</span><input name="data[zhouqi]"  type="text" value="" /></li>
                        <li><span><font>*</font>联系电话：</span><input name="data[dianhua]" type="text" value="" /></li>
                        <li><span>留言内容：</span><textarea name="data[neirong]"></textarea></li>
                    </ul>
					
                </div>
                <div class="nfb6-c"><input type="submit" name="submit" value="一键诊断" /></div>
				</form>
            </div>      
             
            

<script type="text/javascript">         

var slider =  
  Swipe(document.getElementById('slider1'), {  
    auto: 3000,  
    continuous: true,  
    callback: function(pos) {  
        var i = bullets.length;  
        while(i--){  
            bullets[i].className = ' ';  
        }  
        bullets[pos].className = 'on';  
    }  
  });  
var bullets = document.getElementById('position1').getElementsByTagName('li');  

</script>
<script type="text/javascript">         

var slider =  
  Swipe(document.getElementById('slider2'), {  
    auto: 3000,  
    continuous: true,  
    callback: function(pos) {  
        var i = bulleta.length;  
        while(i--){  
            bulleta[i].className = ' ';  
        }  
        bulleta[pos].className = 'on';  
    }  
  });  
var bulleta = document.getElementById('position2').getElementsByTagName('li');  

</script>




<?php include $this->_include('footer'); ?>