
<div class="bot">
	<div class="botz">
		<div class="botz-a">
			<div class="botz-a1">
				<div class="botz-a1a">
					<p><font>个人求职</font></p>
					<p><span><i><img src="<?php echo SITE_THEME; ?>images/yxh.png"></i><!--个人求职--><?php echo block(8); ?><!--个人求职--></span></p>
				</div>
				<div class="botz-a1b">
					<div class="botz-a1b1">快速导航</div>
					<div class="botz-a1b2">
						<ul>
							<li><a href="<?php echo SITE_URL; ?>" title="">网站首页</a></li>
							<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) { ?>
							<li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>"><?php echo $t['catname']; ?></a></li>
							<?php }  } } ?>
							<li><a href="<?php echo $cats[42]['url']; ?>" title="网站地图">网站地图</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="botz-a2">
				<div class="botz-a2a">
					<p><font>加入我们</font></p>
					<p><span><i><img src="<?php echo SITE_THEME; ?>images/yxh.png"></i><!--加入我们--><?php echo block(9); ?><!--加入我们--></span></p>
				</div>
				<div class="botz-a2b">
					<div class="botz-a2b1">全国布局</div>
					<div class="botz-a2b2">
						<ul>
							<li><a  title="<?php echo $t['title']; ?>"><!--全国事业部--><?php echo block(11); ?><!--全国事业部--></a></li>
						</ul>
					</div>
				</div>
			</div>




			<div class="botz-a3">
				<div class="botz-a2a">
					<p><font>咨询热线</font></p>
					<p><span><i><img src="<?php echo SITE_THEME; ?>images/bfh.png"></i><!--咨询热线--><?php echo block(2); ?><!--咨询热线--></span></p>
				</div>
				<div class="botz-a3b">
					<div><img src="<?php echo block(5); ?>"></div>
					<p><span>关注我们</span></p>
				</div>
			</div>
		</div>
		<div class="botz-b">
			<div class="botz-b1"><span><!--公司名--><?php echo block(4); ?><!--公司名--></span><span><!--版权所有--><?php echo block(12); ?><!--版权所有--></span><span><!--备案号--><?php echo block(13); ?><!--备案号--></span><span><!--人才许可证--><?php echo block(14); ?><!--人才许可证--></span></div>
			<div class="botz-b2">
				<span>友情链接：</span>
				<?php $return = $this->_listdata("action=position id=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
				<a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a>
				<?php } } ?>
			</div>
		</div>
    </div>
</div>

<!--

<link rel="stylesheet" href="<?php echo SITE_THEME; ?>css/styleqq.css" media="screen">
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/kf.js"></script>
<div id="kfchat">
	<ul class="list">
		<li class="gotop"><a href="javascript:;" class="kfa" title="返回顶部">top</a></li>
		<li class="qq">
			<a href="javascript:;" class="kfa" title="QQ客服">qq</a>
			<div class="kfcontent" style="margin-top: -77px; display: none;">
				<ul id="QQkf">
				<?php $i=1;  $return = $this->_listdata("action=position id=4"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
					<li class="online"><a href="<?php echo $t['description']; ?>" class="qq<?php echo $i; ?>" target="_blank"></a><span><?php echo $t['title']; ?></span></li>
					<?php $i++;  } } ?>
				</ul>
				<div style="clear:both"></div>
				<span class="rotate"></span>
			</div>
		</li>
		<li class="kli_contact"><a href="javascript:;" class="kfa" title="联系我们">contact</a>
			<div class="kfcontent" style="margin-top: -107px; display: none;">
				<ul class="lianxi">
					<li title="电话"><strong>咨询热线：</strong>咨询热线<?php echo block(2); ?>咨询热线</li>
					<li title="手机"><strong>投诉热线：</strong>投诉热线<?php echo block(17); ?>投诉热线</li>
					<li title="邮箱" class="email"><strong>投诉邮箱：</strong>投诉邮箱<?php echo block(18); ?>投诉邮箱</li>
				</ul>
				<div style="clear:both"></div>
				<span class="rotate"></span>
			</div>
		</li>
		<li class="qr"><a href="javascript:;" class="kfa" title="二维码">qr</a>
			<div class="kfcontent" style="width: 155px; background: rgb(255, 255, 255); margin-top: -89px; display: none;">
				<img src="<?php echo block(5); ?>" width="155" height="156">
				<div class="clear"></div>
				<span class="rotate2"></span>
			</div>
		</li>
		<li class="gobottom"><a href="javascript:;" class="kfa" title="返回底部">bottom</a></li>
	</ul>
</div>
-->
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/QQ.js"></script>
<style>
/*右侧浮动悬浮*/
.float-right {
    background: #4A4A4A;
    position: fixed;
    _position: absolute;
    _bottom: auto;
    _top: expression(documentElement.scrollTop+250);
    right: 0px;
    height: 253px;
    margin-top: -125px;
    top: 75%;
    z-index: 210;
}
.float-right li {
    height: 50px;
    width: 50px;
    cursor: pointer;
    border-bottom: 1px solid #515151;
    position: relative;
    background: #4a4a4a;
	text-align: center;
}
.float-right li div{text-align: center;}

.float-right li.rgt-li06 {
    background: url(<?php echo SITE_THEME; ?>images/top.png) no-repeat center;
	background-size:60%;
}

.float-right li.rgt-li01 {
    background: url(<?php echo SITE_THEME; ?>images/qq.png) no-repeat center;
	background-size:60%;
}
.float-right li.rgt-li01:hover,s
.float-right li.rgt-li01.hover {
    background: url(<?php echo SITE_THEME; ?>images/qq.png) no-repeat center #FF0000;
	background-size:60%;
}

.float-right li.rgt-li02 {
    background: url(<?php echo SITE_THEME; ?>images/tel.gif) no-repeat center;
	background-size:60%;
}
.float-right li.rgt-li02:hover,
.float-right li.rgt-li02.hover {
    background: url(<?php echo SITE_THEME; ?>images/tel.gif) no-repeat center #FF0000;
	background-size:60%;
}
.float-right li.rgt-li02 .dv02 {
    height: 50px;
}
.float-right li.rgt-li02 .dv02 .spn01 {
    font-size: 12px;
    margin-top: 5px;
}
.float-right li.rgt-li02 .dv02 p {
    font-size: 14px;
    margin-top: 3px;
    margin-left: 8px;
	color:#fff;
}


.float-right li.rgt-li03 {
    background: url(<?php echo SITE_THEME; ?>images/mail.png) no-repeat center;
	background-size:60%;
}
.float-right li.rgt-li03:hover,
.float-right li.rgt-li03.hover {
    background: url(<?php echo SITE_THEME; ?>images/mail.png) no-repeat center #FF0000;
	background-size:60%;
}
.float-right li.rgt-li03 .dv03 {
    height: 50px;
}
.float-right li.rgt-li03 .dv03 .spn01 {
    font-size: 12px;
    margin-top: 5px;
	color:#fff;
}
.float-right li.rgt-li03 .dv03 p {
    font-size: 14px;
    margin-top: 3px;
    margin-left: 8px;
	color:#fff;
}



.float-right li.rgt-li05 {
    background: url(<?php echo SITE_THEME; ?>images/vchart.png) no-repeat center;
	background-size:60%;
}
.float-right li.rgt-li05:hover,
.float-right li.rgt-li05.hover {
    background: url(<?php echo SITE_THEME; ?>images/vchart.png) no-repeat center #FF0000;
	background-size:60%;
    border-bottom: 1px solid #FF0000;
}
.float-right li.rgt-li05 .dv05 {
    border: 1px solid #FF1B1B;
    height: 120px;
    background: #fff;
}
.float-right li div {
    position: absolute;
    top: 0;
    right: 50px;
    display: none;
}
.float-right li div.dv01,
.float-right li div.dv04 {
    line-height: 49px;
    height: 49px;
}
.float-right li div a {
    font-size: 18px;
	color:#fff;
}
.float-right li div a:hover {
    color: #fff;
}
.float-right li div.on {
    color: #fff;
    display: block;
    background: #FF0000;
}
</style>

<div class="float-right boter-line">
	<ul>
		
		
		
		<li class="rgt-li01 youshi c-p" onclick="swtClick(); return false" style="width: 50px;">
		   <div class="dv01 t-c-f" style="width: 50px;">
			<?php $return = $this->_listdata("action=position id=4 num=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
				<a href="<?php echo $t['description']; ?>" class="white" target="_blank">客服</a>
			<?php } } ?>
		   </div>
		</li>
		<li class="rgt-li02 youshi" style="width: 50px;">
			<div class="dv02 t-c-f" style="width: 50px;">
				<p class="c-blk spn01">全国热线</p>
				<p class="white b c-blk"><?php echo block(2); ?></p>
			</div>
		</li>
		<li class="rgt-li03 youshi" style="width: 50px;">
		   <div class="dv03 t-c-f" style="width: 50px;">
				<p class="c-blk spn01">投诉邮箱</p>
				<p class="white b c-blk"><?php echo block(18); ?></p>
		   </div>
		</li>
		<li class="rgt-li05 youshi" style="width: 50px;">
		   <div class="dv05 t-c-f" style="width: 50px;">
				<img src="<?php echo block(5); ?>" style="max-width:100%;">
		   </div>
		</li>
		<li class="rgt-li06 youshi c-p" style="width: 50px;" onclick="javascript:$('html,body').animate({scrollTop:0},500);">
		</li>
	</ul>
</div>
	



<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?79ab35463c1911c1ad2322e50d0efda1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</body>
</html>
