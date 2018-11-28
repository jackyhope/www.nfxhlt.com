<script type="text/javascript">
    $(function(){
        $('.djxl-a').click(function(){
    		if($('.djxl-b').is(':hidden')){
    		$('.djxl-b').show();
			$('body').addClass('add');
    		}else{
    		$('.djxl-b').hide();
			$('body').removeClass('add');
    		}
        })
    })
</script>
        <div class="bq">
        	<div class="bq-a">
			<?php $i=1;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) {  if ($i>1) { ?><span>丨</span><?php } ?>
				<a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>"><?php echo $t['catname']; ?></a>
				<?php $i++;  }  } } ?>
				</div>
            <div class="bq-b">
            	<p><i><img src="<?php echo SITE_THEME; ?>images/ddh.png" /></i><a href="tel:<?php echo block(7); ?>"><span>全国服务热线：<!--服务热线--><?php echo block(7); ?><!--服务热线--></span></a></p>
                <p><i><img src="<?php echo SITE_THEME; ?>images/ddz.png" /></i><span>总部地址：<!--总部地址--><?php echo block(10); ?><!--总部地址--></span></p>
                <p><span><!--公司名--><?php echo block(4); ?><!--公司名-->  <!--备案号--><?php echo block(13); ?><!--备案号--></span></p>
                <p><span><!--人才许可证--><?php echo block(14); ?><!--人才许可证--></span></p>
            </div>
        </div>
    		
    
		</div>
	</div>
</div>
<div class="caidan" id="meun">
    <ul class="meun" >
        <li class="current"><a href="<?php echo SITE_URL; ?>" title="">网站首页</a></li>
		<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) { ?>
        <li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>"><?php echo $t['catname']; ?></a></li>
		<?php }  } } ?>
    </ul>
</div>




<div id="footer">
    <div class="as clear">
        <ul>
            <li <?php if ($indexc==1) { ?>class="on"<?php } ?>>
                <a data-role="none" class="" href="<?php echo SITE_URL; ?>">
                    <span class="u-img1">
                    </span>
                    <span class="u-title">网站首页</span>
                </a>
            </li>
            <li <?php if ($aa==5) { ?>class="on"<?php } ?>>
                <a data-role="none" class="icon board" href="<?php echo $cats[5]['url']; ?>">
                    <span class="u-img2">
                    </span>
                    <span class="u-title">猎头服务</span>
                </a>
            </li>
            <li <?php if ($aa==4) { ?>class="on"<?php } ?>>
                <a data-role="none" class="icon tel" href="<?php echo $cats[4]['url']; ?>">
                    <span class="u-img3">
                    </span>
                    <span class="u-title">关于我们</span>
                </a>
            </li>
            <li>
                <a data-role="none" class="icon map" href="tel:<?php echo block(7); ?>"> 
                    <span class="u-img4">
                    </span>
                    <span class="u-title">电话咨询</span>
                </a>
            </li>
        </ul>
    </div>
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
