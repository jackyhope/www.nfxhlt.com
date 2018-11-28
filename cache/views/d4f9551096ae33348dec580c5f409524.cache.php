<?php include $this->_include('header'); ?>




<div id="fsD1" class="focus">  
    <div id="D1pic1" class="fPic">
    <?php $i=1;  $return = $this->_listdata("action=position id=2"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
        <div class="fcon" <?php if ($i==1) { ?>style="display: block;"<?php } else { ?>style="display: none;"<?php } ?>><div><a href="<?php echo $t['url']; ?>" target="_blank"><img src="<?php echo $t['thumb']; ?>" style="opacity: 1; "></a></div></div>
        <?php $i++;  } } ?>
        
  </div>
    <div class="fbg">  
		<div class="D1fBt" id="D1fBt">  
			<a href="javascript:void(0)" hidefocus="true" target="_self" class=""></a>
            <a href="javascript:void(0)" hidefocus="true" target="_self" class=""></a>
            <a href="javascript:void(0)" hidefocus="true" target="_self" class=""></a>  
		</div>  
    </div> 
    <span class="prev"></span>   
    <span class="next"></span>
    <div class="btbl"></div>
        
</div> 

<script type="text/javascript">
	Qfast.add('widgets', { path: "<?php echo SITE_THEME; ?>js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',   //焦点图包裹id  
			conId: "D1pic1",  //** 大图域包裹id  
			tabId:"D1fBt",  
			tabTn:"a",
			conCn: '.fcon', //** 大图域配置class       
			auto: 1,   //自动播放 1或0
			effect: 'fade',   //效果配置
			eType: 'click', //** 鼠标事件
			pageBt:true,//是否有按钮切换页码
			bns: ['.prev', '.next'],//** 前后按钮配置class                          
			interval: 4000  //** 停顿时间  
		}) 
	})  
</script>

<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/countUp.min.js"></script>
<div class="nf1">
	<div class="nf1z">
    	<div class="nf1z-a">
        	<p><font><?php echo $cats[30]['catname']; ?></font></p>
            <p><i></i></p>
            <p><span><?php echo $cats[30]['setting']['descritext']; ?></span></p>
        </div>
        <div class="nf1z-b" id="wrap">
        	<ul>
        		<?php $i=1;  $return = $this->_listdata("catid=30 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            	<li <?php if ($i==2) { ?>style="width:320px;"<?php } ?>>
                	<div class="nf1z-b1"><img src="<?php echo $t['thumb']; ?>" /></div>
                    <div class="nf1z-b2">
                    	<div>
                    		<span class="jumbo" id="myTargetElement<?php echo $i; ?>"><?php echo $t['description']; ?></span>
                    		<?php if ($i==4) { ?>
                    		<font>H</font>
                    		<?php } else { ?>
                    		<font>+</font>
                    		<?php if ($i==5) { ?>
                    		<span class="jumbo" id="myTargetElement6"><?php echo clearhtml($t['content']); ?></span>
                    		<?php }  } ?>
                    	</div>
                    </div>
                    <div class="nf1z-b3"><?php echo $t['title']; ?></div>
                </li>
                <?php $i++;  } } ?>
                
            </ul>
        </div>
    </div>
</div>




<script type="text/javascript">
	var options = {
	  useEasing : true, 
	  useGrouping : true, 
	  separator : ',', 
	  decimal : '.', 
	  prefix : ' ', 
	  suffix : ' ' 
	};
var Element1=document.getElementById("myTargetElement1");
var demo = new CountUp("myTargetElement1", 0,   Element1.innerHTML, 0, 2.5, options);
var Element2=document.getElementById("myTargetElement2");
var demo2 = new CountUp("myTargetElement2", 0,  Element2.innerHTML, 0, 2.5, options);
var Element3=document.getElementById("myTargetElement3");
var demo3 = new CountUp("myTargetElement3", 0,  Element3.innerHTML, 0, 2.5, options);
var Element4=document.getElementById("myTargetElement4");
var demo4 = new CountUp("myTargetElement4", 0,  Element4.innerHTML, 0, 2.5, options);
var Element5=document.getElementById("myTargetElement5");
var demo5 = new CountUp("myTargetElement5", 0,  Element5.innerHTML, 0, 2.5, options);
var Element6=document.getElementById("myTargetElement6");
var demo6 = new CountUp("myTargetElement6", 0,  Element6.innerHTML, 0, 2.5, options);
$(window).scroll(function(){
	if($(window).scrollTop()>=250){
		demo.start();
		demo2.start();
		demo3.start();
		demo4.start();
		demo5.start();
		demo6.start();
	}
})
</script>



<div class="nf2">
	<div class="nf2z">
    	<div class="nf1z-a">
        	<p><font><?php echo $cats[7]['catname']; ?></font></p>
            <p><i></i></p>
            <p><span><?php echo $cats[7]['setting']['descritext']; ?></span></p>
        </div>
        <div class="nf2z-b">
        	<div class="mr_frbox1">
                <img class="mr_frBtnL prev" src="<?php echo SITE_THEME; ?>images/lef1.png"  onmouseover="this.src='<?php echo SITE_THEME; ?>images/lef2.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/lef1.png';"/>
                <div class="mr_frUl1">
                    <ul>
                    	<?php $return = $this->_listdata("catid=7 order=listorder_desc,updatetime_desc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                        <li>
                        	<div class="mr_fra"><a href="<?php echo block(16); ?>" title="" target="_blank"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                            <div class="mr_frb">
                            	<div class="mr_frb1"><span><?php echo $t['title']; ?></span><font><?php echo $t['xingye']; ?></font></div>
                                <div class="mr_frb2"><?php echo $t['description']; ?></div>
                                <div class="mr_frb3"><a href="<?php echo block(16); ?>" title="" target="_blank">在线咨询</a></div>
                            </div>
                        </li> 
                        <?php } } ?> 
                    </ul>
                </div>
                <img class="mr_frBtnR next" src="<?php echo SITE_THEME; ?>images/rig1.png"  onmouseover="this.src='<?php echo SITE_THEME; ?>images/rig2.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/rig1.png';"/>
            </div>
        </div>
    </div>
</div>

<div class="nf3">
	<div class="nf3z">
    	<div class="nf1z-a">
        	<p><font><?php echo $cats[31]['catname']; ?></font></p>
            <p><i></i></p>
            <p><span><?php echo $cats[31]['setting']['descritext']; ?></span></p>
        </div>
        <div class="nf3z-b">
        	<ul>
        		<?php $return = $this->_listdata("catid=31 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            	<li>
                	<div class="nf3z-b1"><div><img src="<?php echo $t['thumb']; ?>" /></div></div>
                    <div class="nf3z-b2"><?php echo $t['title']; ?></div>
                </li>
                <?php } } ?>
                
            </ul>
        </div>
    </div>
</div>        
        
        
        
        
        
        
<div class="nf4">
	<div class="nf4z">
    	<div class="nf1z-a">
        	<p><font><?php echo $cats[32]['catname']; ?></font></p>
            <p><i></i></p>
            <p><span><?php echo $cats[32]['setting']['descritext']; ?></span></p>
        </div>
        <div class="nf4z-b">       
        	<ul>
        	<?php $i=1;  $return = $this->_listdata("catid=32 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) {  if ($i>1) { ?>
        		<li class="nf4z-b2"><img src="<?php echo SITE_THEME; ?>images/cjt1.png" /></li>
        		<?php } ?>
            	<li class="nf4z-b1">
                	<div class="nf4z-b1a"><div><img src="<?php echo SITE_THEME; ?>images/lc<?php echo $i; ?>.png"   onmouseover="this.src='<?php echo SITE_THEME; ?>images/lch<?php echo $i; ?>.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/lc<?php echo $i; ?>.png';"/></div></div>
                    <div class="nf4z-b1b">
                    	<p><span><?php echo $t['title']; ?> </span></p>
                        <div><?php echo html_entity_decode($t['description']); ?></div>
                    </div>
                </li>
                <?php $i++;  } } ?>
                
                
                
            </ul>
        
        </div>
    </div>
</div>         
        
<div class="nf5">
    <div class="nf5z">
        <div class="nf1z-a">
            <p><font><?php echo $cats[33]['catname']; ?></font></p>
            <p><i></i></p>
            <p><span><?php echo $cats[33]['setting']['descritext']; ?></span></p>
        </div>
        <div class="nf5z-b"> 
        	<div class="mr_frbox2">
                <img class="mr_frBtnL prev" src="<?php echo SITE_THEME; ?>images/lef1.png"  onmouseover="this.src='<?php echo SITE_THEME; ?>images/lef2.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/lef1.png';"/>
                <div class="mr_frUl2">
                    <ul>
                    	<?php $return = $this->_listdata("catid=33 order=listorder_desc,updatetime_desc"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                        <li>
                        	<div class="mr_fra"><a href="<?php echo $t['description']; ?>" title="" target="_blank"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                            <div class="mr_frb"><a href="<?php echo $t['description']; ?>" title="" target="_blank"><?php echo $t['title']; ?></a></div>
                        </li> 
                        <?php } } ?>
                         
                    </ul>
                </div>
                <img class="mr_frBtnR next" src="<?php echo SITE_THEME; ?>images/rig1.png"  onmouseover="this.src='<?php echo SITE_THEME; ?>images/rig2.png';" onmouseout="this.src='<?php echo SITE_THEME; ?>images/rig1.png';"/>
            </div>    
        </div>
    </div>
</div>       
<?php $arr=array(29,2,3,26,27,28); ?>       
<!-- <div class="nf6">
    <div class="nf6z"> 
    	<div class="nf6z-a">
        	<div class="nf6z-a1">
            	<p><span><?php echo $cats[1]['catname']; ?></span></p>
                <p><i></i></p>
            </div>
            <div class="nf6z-a2">
            	<ul class="tab-hd">
                	<li><a href="<?php echo $cats[29]['url']; ?>" title="企业动态">企业动态</a></li>
					<li><a href="<?php echo $cats[2]['url']; ?>" title="">HR文库</a></li>
					<li><a href="<?php echo $cats[3]['url']; ?>" title="">职场分享</a></li>
					<li><a href="<?php echo $cats[26]['url']; ?>" title="">热点推送</a></li>
					<li><a href="<?php echo $cats[27]['url']; ?>" title="">行业资讯</a></li>
					<li class="jgm"><a href="<?php echo $cats[28]['url']; ?>" title="">人才研究</a></li>
					
                </ul>
                <span><a href="<?php echo $cats[1]['url']; ?>" title="">查看更多+</a></span>
            </div>
            <div class="nf6z-a3 tab-bd">
            	<?php $i=1;  if (is_array($arr)) { $count=count($arr);foreach ($arr as $s) { ?>
            	<div class="nf6z-a3a <?php if ($i==1) { ?>thisclass<?php } ?>" <?php if ($i!=1) { ?>style="display:none;"<?php } ?>>
            		<?php $ids=$s;  $return = $this->_listdata("catid=$ids order=listorder_desc,updatetime_desc num=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                	<div class="nf6z-a3a1">
                    	<div class="nf6z-a3a1a"><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                        <div class="nf6z-a3a1b">
                        	<p><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a><span><?php echo date('Y-m-d',$t['updatetime']); ?></span></p>
                            <div><?php echo $t['description']; ?></div>
                        </div>
                    </div>
                    <?php } } ?>
                    <div class="nf6z-a3a2">
                    	<ul>
                    		<?php $return = $this->_listdata("catid=$ids order=listorder_desc,updatetime_desc num=1,4"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                        	<li><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a><span><?php echo date('Y-m-d',$t['updatetime']); ?></span></li>
                        	<?php } } ?>
                            
                        </ul>
                    </div>
                </div>
                <?php $i++;  } } ?>

            </div>
        </div>
        <div class="nf6z-b">
        	<div class="nf6z-a1">
            	<p><span><?php echo $cats[25]['catname']; ?></span></p>
                <p><i></i></p>
            </div>
            <div class="nf6z-b2"><?php echo $cats[25]['setting']['descritext']; ?></div>
            <div class="nf6z-b3">
            	<div style="overflow: hidden;" class="fa_con" id="ulQuestion">
                    <table style="border-collapse:collapse; width:100%;"  cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                <?php $return = $this->_listdata("catid=25 order=listorder_desc,updatetime_desc num=10 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                                <dl>
                                	<dt><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><span class="fa_con1"><?php echo $t['qiye']; ?></span><span class="fa_con2"><?php echo $t['gangwei']; ?></span><span class="fa_con3">入职成功</span></a><font><?php echo date('Y-m-d',$t['updatetime']); ?></font></dt>
                                </dl>
                                <?php } } ?>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    
                    <script type="text/javascript">
               			 new Marquee("ulQuestion", 0, 1, 585, 475, 40, 0, 1000, 22);
            		</script> 
            </div>
        </div>      
    </div>
</div>  -->


<div class="nf6">
    <div class="nf6z">
        <div class="nf1z-a">
            <p><font><?php echo $cats[25]['catname']; ?></font></p>
            <p><i></i></p>
            <p><span><?php echo $cats[25]['setting']['descritext']; ?></span></p>
        </div>
        <div class="nf6z-b" style=" float: left;"> 
			<div style="overflow: hidden;" class="fa_con" id="ulQuestion">
                <table style="border-collapse:collapse; width:100%;"  cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>
                            <?php $return = $this->_listdata("catid=25 order=listorder_desc,updatetime_desc num=10 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                            <dl>
                            	<dt><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><span class="fa_con1"><?php echo $t['qiye']; ?></span><span class="fa_con2"><?php echo $t['gangwei']; ?></span><span class="fa_con3">入职成功</span></a><font><?php echo date('Y-m-d',$t['updatetime']); ?></font></dt>
                            </dl>
                            <?php } } ?>
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
                <script type="text/javascript">
           			 new Marquee("ulQuestion", 0, 1, 615, 475, 40, 0, 1000, 22);
        		</script> 
    	</div>
    	<div class="nf6z-b"> 
			<div style="overflow: hidden;" class="fa_con" id="ulQuestiona">
                <table style="border-collapse:collapse; width:100%;"  cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>
                            <?php $return = $this->_listdata("catid=25 order=listorder_desc,updatetime_desc num=10,20 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                            <dl>
                            	<dt><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><span class="fa_con1"><?php echo $t['qiye']; ?></span><span class="fa_con2"><?php echo $t['gangwei']; ?></span><span class="fa_con3">入职成功</span></a><font><?php echo date('Y-m-d',$t['updatetime']); ?></font></dt>
                            </dl>
                            <?php } } ?>
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
                <script type="text/javascript">
           			 new Marquee("ulQuestiona", 0, 1, 585, 475, 40, 0, 1000, 22);
        		</script> 
    	</div>      
    </div>
</div>















<!--<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/jquery.movingboxes.js"></script>

<script type="text/javascript">
$(function(){
	$('#focus').movingBoxes({
		startPanel   : 1,       // 从第一个li开始
		reducedSize  : .83,      // 缩小到原图50%的尺寸
		wrap         : true,   // 无缝循环
		buildNav     : true,	// 显示指示器效果
		navFormatter : function(){ return "&#9679;"; } // 指示器格式，为空即会显示123
	});
});
</script>-->
<div class="xw">
	<div class="xwt">
		<div class="xwt-a">
        	<h1>NEWS</h1>
        	<div><span>新闻资讯</span></div>
            <p><font><?php echo $cats[1]['setting']['descritext']; ?></font></p>
        </div>
        <div class="xwt-b">
        
<link rel="stylesheet" type="text/css" href="<?php echo SITE_THEME; ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_THEME; ?>css/index2018.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_THEME; ?>css/swiper-3.4.2.min.css">
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/swiper-3.4.2.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/index2018.js"></script>
        <section class="xw-wrap">
          <div class="xw-content">
            <div class="swiper-container xw-swiper swiper-container-horizontal" id="xwSwiper">
              <div class="swiper-wrapper" id="xwSwiperContainer" >
              
				<?php $return = $this->_listdata("action=position id=8"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                <div class="swiper-slide">
                  <div class="news-item">
                    <h2><?php echo $t['title']; ?></h2>
                    <div class="news-detail">
                      <p><?php echo $t['description']; ?></p>
                      <a href="<?php echo $t['url']; ?>" class="fr moredetails" taregt="_blank">查看详情...</a></div>
                    <div class="news-abs">
                      <h3><span><?php echo $cats[$t['catid']]['catname']; ?></span><span class="time"><?php echo date('Y年m月d日',$t['updatetime']); ?></span></h3>
                    </div>
                  </div>
                </div>
                <?php } } ?>
        	  </div>
            </div>
          </div>
          
        </section>
        
        
        
        
        
        
        
        
        
            <!--<ul id="focus">
				<?php $return = $this->_listdata("action=position id=8"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                <li>
                	<div class="xw-b1">
                    	<div class="xw-b1-a">
                        	<h1><?php echo $t['title']; ?></h1>
                            <p><i></i></p>
                        </div>
                        <div class="xw-b1-b">
                        	<div>
                            	<?php echo $t['description']; ?>
                            </div>
                            <p><a onclick="javascrit:window.open('<?php echo $t['url']; ?>')" title="<?php echo $t['title']; ?>">查看详情...</a></p>
                        </div>
                        <div class="xw-b1-c"><span><?php echo $cats[$t['catid']]['catname']; ?></span><font><?php echo date('Y年m月d日',$t['updatetime']); ?></font></div>
                    </div>
                </li>
				<?php } } ?>
              
            </ul>-->
            
            
            
            
        </div>
	</div>
</div>





<script type="text/javascript">
$(".mr_frbox1").slide({titCell:"",mainCell:".mr_frUl1 ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});
$(".mr_frbox2").slide({titCell:"",mainCell:".mr_frUl2 ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:6});
</script>


<script>
$(function(){
    function tabs(tabTit,on,tabCon){
        $(tabTit).children().hover(function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
           	$(tabCon).children().eq(index).show().siblings().hide();
    	});
	};
    tabs(".tab-hd","active",".tab-bd");
});
</script>




<?php include $this->_include('footer'); ?>