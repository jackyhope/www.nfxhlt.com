<?php include $this->_include('header'); ?>
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
            <div class="nfa6z-b8">
            	<div class="nfa6z-b8a">
                	<ul>
                    	<li><span>投诉热线：</span><font><!--投诉热线--><?php echo block(17); ?><!--投诉热线--></font></li>
                        <li><span>投诉邮箱：</span><font><!--投诉邮箱--><?php echo block(18); ?><!--投诉邮箱--></font></li>
                    </ul>
                </div>
                <div class="nfa6z-b8b">
                	<p><span>留言建议</span></p>
                    <p><font><?php echo clearhtml($cats[$catid]['content']); ?></font></p>
                </div>
                <div class="nfa6z-b8c">
                    <form action="<?php echo url('form/post', array('modelid'=>10)); ?>" method="post">
                	<ul>
                    	<li>
                            <span><font>*</font>请选择类型：</span>
                            <select name="data[leixing]">
                            	<option>请选择</option>
                                <option value="投诉建议">投诉建议</option>
                                <option value="企业招聘">企业招聘</option>
                            </select>
                        </li>
                    	<li><span>请输入姓名：</span><input class="nfa6z-b8c2" type="text" value="" name="data[xingming]" /></li>
                        <li><span><font>*</font>请输入联系电话：</span><input class="nfa6z-b8c2" type="text" value="" name="data[dianhua]" /></li>
                        <li><span>请输入公司名称：</span><input class="nfa6z-b8c2" type="text" value="" name="data[gongsi]" /></li>
                        <li><span>请输入邮箱：</span><input class="nfa6z-b8c2" type="text" value="" name="data[youxiang]" /></li>
                        <li><span><font>*</font>请输入验证码：</span><input class="nfa6z-b8c3" type="text" value="" name="code"  /><div><img src="<?php echo url('api/captcha', array('width'=>120,'height'=>46)); ?>" id="code" onclick="document.getElementById('code').src='<?php echo url("api/captcha", array("width"=>120,"height"=>46)); ?>&r='+Math.random();" /></div></li>
                        <li><span>请输入内容：</span><textarea name="data[neirong]"></textarea></li>
                        <li><input class="nfa6z-b8c4" type="submit" value="提 交" name="submit" /></li>

                    </ul>
                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>





















<?php include $this->_include('footer'); ?>
