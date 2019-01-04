<?php include $this->_include('header'); ?>


<div class="ban1">
	<div class="ban1z">
    	<div class="ban1z-a"><img src="<?php echo SITE_URL;  echo $cats[$aa]['image']; ?>" /></div>
    </div>
</div>




<div class="nf7">
	<div class="nf7z">
    	<div class="nf7z-a">
        	<p><span>快速咨询</span></p>
            <p><font>QUICK QUERY</font></p>
        </div>
        <div class="nf7z-b">
        <form action="<?php echo url('form/post', array('modelid'=>7)); ?>" method="post">
        	<input class="nf7z-b1" type="text" value="" placeholder="输入招聘岗位 " name="data[xingming]"/>
            <input class="nf7z-b2" type="text" value="" placeholder="输入手机号码" name="data[dianhua]"/>
            <input class="nf7z-b3" type="submit" value="免费获取人才简历" name="submit"/>
        </form>
        </div>
    </div>
</div>

<div class="nf8">
	<div class="nf8z">
    	<div class="nf8z-a"><img src="<?php echo SITE_URL;  echo $cats[35]['image']; ?>" /></div>
        <div class="nf8z-b">
        	<div class="nf8z-b1">
            	<p><span><?php echo $cats[35]['catname']; ?></span></p>
                <p><font><?php echo $cats[35]['setting']['descritext']; ?></font></p>
            </div>
            <div class="nf8z-b2">
            	<ul>
                <?php $i=1;  $return = $this->_listdata("catid=35 order=listorder_asc"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                	<li><span><?php echo $i; ?></span><font><?php echo $t['description']; ?></font></li>
                    <?php $i++;  } } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="nf9">
	<div class="nf9z">
    	<div class="nf7z-a">
        	<p><span><?php echo $cats[36]['catname']; ?></span></p>
            <p><font><?php echo $cats[36]['setting']['descritext']; ?></font></p>
        </div>
        <div class="nf9z-b">
        	<ul>
                <?php $return = $this->_listdata("catid=36 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            	<li>
                	<div class="nf9z-b1"><img src="<?php echo SITE_URL;  echo $t['thumb']; ?>" /></div>
                    <div class="nf9z-b2">
                    	<div class="nf9z-b2a">
                        	<p><span><?php echo $t['title']; ?></span></p>
                            <p><font><?php echo $t['description']; ?></font></p>
                        </div>
                        <div class="nf9z-b2b"><?php echo clearhtml($t['content']); ?></div>
                    </div>
                </li>
                <?php } } ?>

            </ul>
        </div>
        <div class="nf9z-c">
        	<div class="nf9z-c1">
            	<div class="nf9z-c1a"><a href="<?php echo block(16); ?>" title="" target="_blank">在线咨询</a></div>
                <div class="nf9z-c1b"><font>咨询电话：<?php echo block(2); ?></font></div>
            </div>
        </div>
    </div>
</div>


<div class="nfa1">
	<div class="nfa1z">
    	<div class="nf7z-a">
        	<p><span>服务产品</span></p>
            <p><font>SERVICE PRODUCTS</font></p>
        </div>
        <div class="nfa1z-b">
        	<div class="mr_frbox3">
                <img class="mr_frBtnL prev" src="<?php echo SITE_THEME; ?>images/lef3.png"  onmouseover="this.src='<?php echo SITE_THEME; ?>images/lef4.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/lef3.png';"/>
                <div class="mr_frUl3">
                    <ul>
                        <?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==5 && $t['ismenu']) { ?>
                        <li>
                        	<div class="mr_fra"><div><img src="<?php echo SITE_URL;  echo $t['image']; ?>" /></div></div>
                            <div class="mr_frb">
                            	<p><span><?php echo $t['catname']; ?></span></p>
                                <p><font><?php echo $t['setting']['descritext']; ?></font></p>
                            </div>
                            <div class="mr_frc">
                            	<div class="mr_frc1">
                                	<p><span><?php echo $t['catname']; ?></span></p>
                                    <p><font><?php echo $t['setting']['descritext']; ?></font></p>
                                    <div>
                                    	<?php echo $t['content']; ?>
									</div>
                                </div>
                            </div>
                        </li>
                        <?php }  } } ?>   
                    </ul>
                </div>
                <img class="mr_frBtnR next" src="<?php echo SITE_THEME; ?>images/rig3.png"  onmouseover="this.src='<?php echo SITE_THEME; ?>images/rig4.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/rig3.png';"/>
            </div>
        </div>
    </div>
</div>

<style>
	.nfa2 img{width:100%;}
</style>
<div class="nfa2" style="background:none;">
    	<?php echo $cats[37]['content']; ?>
</div>

<div class="nfa3">
	<div class="nfa3z">
    	<div class="nf7z-a">
        	<p><span><?php echo $cats[38]['catname']; ?></span></p>
            <p><font><?php echo $cats[38]['setting']['descritext']; ?></font></p>
        </div>
        <div class="nfa3z-b">
        	<ul>
                <?php $return = $this->_listdata("catid=38 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            	<li>
                	<div class="nfa3z-b1"><i><img src="<?php echo SITE_URL;  echo $t['thumb']; ?>" /></i></div>
                    <div class="nfa3z-b2">
                    	<p><span><?php echo $t['title']; ?></span></p>
                        <p><i></i></p>
                        <div><?php echo clearhtml($t['content']); ?></div>
                    </div>
                </li>
                <?php } } ?>
                
            </ul>
        </div>
    </div>
</div>


<div class="nfa4">
	<div class="nfa4z">
    	<div class="nf7z-a">
        	<p><span><?php echo $cats[39]['catname']; ?></span></p>
            <p><font><?php echo $cats[39]['setting']['descritext']; ?></font></p>
        </div>
        <div class="nfa4z-b">
			<ul>
                <?php $i=1;  $return = $this->_listdata("catid=39 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            	<li <?php if ($i%2==1) { ?>class="nfa4z-b1"<?php } else { ?>class="nfa4z-b2"<?php } ?>>
                	<div>0<?php echo $i; ?></div>
                    <p><span><?php echo $t['title']; ?> </span></p>
                    <p><font><?php echo html_entity_decode($t['description']); ?></font></p>
                </li>
                <?php $i++;  } } ?>
               
            </ul>
        </div>
        <div class="nf9z-c">
        	<div class="nf9z-c1">
            	<div class="nf9z-c1a"><a href="<?php echo block(16); ?>" title="" target="_blank">在线咨询</a></div>
                <div class="nf9z-c1b"><font>咨询电话：<?php echo block(2); ?></font></div>
            </div>
        </div>
    </div>
</div>

<div class="nfa5">
	<div class="nfa5z">
    	<div class="nf7z-a">
        	<p><span>岗位招聘费用诊断</span></p>
            <p><font>RECRUITMENT FEE</font></p>
        </div>
        <div class="nfa5z-b">
            <form action="<?php echo url('form/post', array('modelid'=>9)); ?>" method="post">
			<div class="nfa5z-b1">
            	<div class="nfa5z-b1a nleft"><span><font>*</font>招聘岗位：</span><input name="data[gangwei]" type="text" value=""  /></div>
                <div class="nfa5z-b1a nright"><span>岗位薪酬：</span><input type="text" value="" name="data[xinchou]"/></div>
            </div>
            <div class="nfa5z-b1">
            	<div class="nfa5z-b1a nleft"><span>招聘周期：</span><input type="text" value="" name="data[zhouqi]" /></div>
                <div class="nfa5z-b1a nright"><span><font>*</font>联系电话：</span><input type="text" value="" name="data[dianhua]" /></div>
            </div>
            <div class="nfa5z-b2">
            	<span>留言内容：</span>
                <textarea name="data[neirong]"></textarea>
            </div>
            <div class="nfa5z-b3"><input type="submit" value="一键诊断" name="submit" /></div>
            </form>
        </div>
    </div>
</div>























<script type="text/javascript">
$(".mr_frbox3").slide({titCell:"",mainCell:".mr_frUl3 ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});
</script>





<?php include $this->_include('footer'); ?>