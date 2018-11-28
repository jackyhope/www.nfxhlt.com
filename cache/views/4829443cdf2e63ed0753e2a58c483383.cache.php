<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $meta_title; ?></title>
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<meta name="description" content="<?php echo $meta_description; ?>" />
<link href="<?php echo SITE_THEME; ?>css/gloce.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/jquery_002.js"></script>
<script src="<?php echo SITE_THEME; ?>js/MSClass.js" type="text/javascript"></script>
<script src="<?php echo SITE_THEME; ?>js/koala.min.1.5.js"></script>


</head>

<?php if ($cats[$catid]['parentid']==0) {  $aa=$catid;  } else {  $bb=$cats[$catid]['parentid'];  if ($cats[$bb]['parentid']==0) {  $aa=$bb;  } else {  $cc=$cats[$bb]['parentid'];  if ($cats[$cc]['parentid']==0) {  $aa=$cc;  } else {  $aa=$cats[$cc]['parentid'];  }  }  } ?>



<body>
<div class="header" id="Jnav">
	<div class="headz">
    	<div class="headz-a"><a href="<?php echo SITE_URL; ?>" title=""><img src="<?php echo SITE_URL;  echo block(1); ?>" /></a></div>
        <div class="headz-b">
        	<div class="headz-b1">
            	<ul>
                	<li <?php if ($indexc==1) { ?>class="on"<?php } ?>><a href="<?php echo SITE_URL; ?>" title="">首页</a></li>
                    <?php $i==0;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) {  $arrchilds = @explode(',', $t['arrchilds']);  if ($i==0) { ?>
                    <li class="xlk <?php if (isset($catid) && in_array($catid, $arrchilds)) { ?> on<?php } ?>">
                    <?php } else { ?>
                    <li class="xlk xlk-a<?php echo $i;  if (isset($catid) && in_array($catid, $arrchilds)) { ?> on<?php } ?>">
                    <?php } ?>
                        <a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>"><?php echo $t['catname']; ?></a>
                    </li>
                    <?php $i++;  }  } } ?>
                    
                </ul>
            </div>
            <div class="headz-b2">
            	<p><span>咨询热线：</span></p>
                <p><font><!--咨询热线--><?php echo block(2); ?><!--咨询热线--></font></p>
            </div>
        </div>
    </div>
    <div class="xlhg">
    	<div class="xlhg-a">
        	<div class="xlhg-a1"><i><img src="<?php echo SITE_THEME; ?>images/jt1.png" /></i></div>
        </div>
        <div class="xlhg-b">
        	<div class="xlhg-b1">
            <?php $i=1;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) {  $ischild=0;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $tt) {  if ($tt['parentid']==$t['catid'] && $tt['ismenu']) {  $ischild=1;  }  } } ?>

                
            	<div class="xlhg-b1a" <?php if ($i==1) { ?>style="width:158px;min-height:10px;"<?php } else if ($i==2) { ?>style="width:125px;min-height:10px;"<?php } else if ($i==3) { ?>style="width:123px;min-height:10px;"<?php } ?>>
                	<!--<div><span><?php echo $t['catname']; ?></span></div>-->
                    <ul>
						<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $ttt) {  if ($ttt['parentid']==$t['catid'] && $ttt['ismenu']) { ?>
						<li><a href="<?php echo $ttt['url']; ?>" title="<?php echo $ttt['catname']; ?>"><?php echo $ttt['catname']; ?> </a></li>
						<?php }  } } ?>
                    </ul>
                </div>
                <?php $i++;  }  } } ?>
                
                
            </div>
        </div>
    </div>
    
</div>




<script type="text/javascript">
var $nav = $('#Jnav'), navTop = $nav['offset']().top, navH = $nav['outerHeight'](),winTop_1=0,winWidth=$(window).width(), holder=jQuery('<div>');
$(window).on('scroll',function(){
 var winTop_2 = $(window).scrollTop();
 
 //开始浮动，不过不显示
 if(winTop_2>0){
 holder.show().insertBefore($nav);
 $nav['addClass']('fixed-nav');
 }else{
 holder.hide();
 $nav['removeClass']('fixed-nav');
 }
 //判断鼠标向上滚动，显示出来
 if(winTop_2>=0){
 $nav['removeClass']('fixed-nav-appear');
 }else if(winTop_2<winTop_1){
 $nav['addClass']('fixed-nav-appear');
 }
 winTop_1 = $(window).scrollTop();
})
</script>









<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/xfl.js"></script>
