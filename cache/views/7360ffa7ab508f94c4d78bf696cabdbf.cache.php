<?php include $this->_include('header'); ?>
        <div class="bottom">
        
           <div class="m-focus">
              <div class="swiper-container swiper-free">
                <div class="pagination pagination-free"><span class="swiper-pagination-switch swiper-active-switch swiper-activeslide-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span></div>
                <ul class="swiper-wrapper">
				  <?php $return = $this->_listdata("action=position id=5"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                  <li class="swiper-slide"> <a href="javascript:void(0)"><img src="<?php echo $t['thumb']; ?>"></a> </li>
				  <?php } } ?>
                </ul>
              </div>
            </div>
            <!--m-focus-->

			<script type="text/javascript" src="<?php echo SITE_THEME; ?>js/countUp.min.js"></script> 
			<div class="nf1">
            	<div class="nf1-a">
                	<p><span><?php echo $cats[30]['catname']; ?></span></p>
                    <p><i></i></p>
                    <p><font><?php echo $cats[30]['setting']['descritext']; ?></font></p>
                </div>
                <div class="nf1-b" id="wrap">
                	<ul>
						
						<?php $i=1;  $return = $this->_listdata("catid=30 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) {  if ($t['id']!=44) { ?>
                    	<li <?php if ($i==1) { ?>style="width:23%;"<?php } else if ($i==2) { ?>style="width:26%;"<?php } ?>>
                        	<div class="nf1-b1"><img src="<?php echo $t['thumb']; ?>" /></div>
                            <div class="nf1-b2">
								<div>
									
									<span class="jumbo" id="myTargetElement<?php echo $i; ?>"><?php echo $t['description']; ?></span>
									<font>+</font>
									
									<?php if ($i==4) { ?>
									<span class="jumbo" id="myTargetElement5"><?php echo clearhtml($t['content']); ?></span>
									<?php } ?>
								</div>
							</div>
                            <div class="nf1-b3"><?php echo $t['title']; ?></div>
                        </li>
						<?php $i++;  }  } } ?>
						
                    </ul>
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
var eleval1 = $('#myTargetElement1').text();
var demo = new CountUp("myTargetElement1", 0, eleval1, 0, 2.5, options);
var eleval2 = $('#myTargetElement2').text();
var demo2 = new CountUp("myTargetElement2", 0, eleval2, 0, 2.5, options);
var eleval3 = $('#myTargetElement3').text();
var demo3 = new CountUp("myTargetElement3", 0, eleval3, 0, 2.5, options);
var eleval4 = $('#myTargetElement4').text();
var demo4 = new CountUp("myTargetElement4", 0, eleval4, 0, 2.5, options);
var eleval5 = $('#myTargetElement5').text();
var demo5 = new CountUp("myTargetElement5", 0, eleval5, 0, 2.5, options);

$(window).ready(function(){
		demo.start();
		demo2.start();
		demo3.start();
		demo4.start();
		demo5.start();
})
</script>           
            
			<div class="nf2">
            	<div class="nf1-a">
                	<p><span><?php echo $cats[7]['catname']; ?></span></p>
                    <p><i></i></p>
                    <p><font><?php echo $cats[7]['setting']['descritext']; ?></font></p>
                </div>
            	<div class="nf2-b">
                	<div id="slider" class="swipe" style="visibility:visible;">  
                            <div class="swipe-wrap">  
							<?php $i=1;  $return = $this->_listdata("catid=7 order=listorder_desc,updatetime_desc num=8 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) {  if ($i%2==1) { ?>
                            	<figure>
                                    <div class="face faceInner"> 
                                         <ul>
								<?php } ?>			
                                         	<li><a href="<?php echo block(16); ?>" title="" target="_blank">
                                            	<div class="face-a"><img src="<?php echo $t['thumb']; ?>" /></div>
                                                <div class="face-b">
                                                	<div class="face-b1"><span><?php echo $t['title']; ?></span><font><?php echo $t['xingye']; ?></font></div>
                                                    <div class="face-b2"><?php echo $t['description']; ?></div>
                                                    <div class="face-b3"><span>在线咨询</span></div>
                                                </div>
                                            </a></li>
								<?php if ($i%2==0) { ?>
                                         </ul>
                                    </div>
                                 </figure>
								 <?php }  $i++;  } } ?>
                                    
                            </div>  
                        </div>  
                              
                        <nav>  
                            <ul id="position">
							  <?php $i=1;  $return = $this->_listdata("catid=7 order=listorder_desc,updatetime_desc num=8 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) {  if ($i%2==1) { ?>
                              <li <?php if ($i==1) { ?>class="on"<?php } ?>></li> 
							  <?php }  $i++;  } } ?>		 
                            </ul>  
                        </nav>
                </div>
            </div>
            
            
			<div class="nf3">
            	<div class="nf1-a">
                	<p><span><?php echo $cats[31]['catname']; ?></span></p>
                    <p><i></i></p>
                    <p><font><?php echo $cats[31]['setting']['descritext']; ?></font></p>
                </div>
            	<div class="nf3-b">
            		<ul>
						<?php $return = $this->_listdata("catid=31 order=listorder_asc more=1 num=6"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    	<li>
                        	<div class="nf3-b1"><img src="<?php echo $t['thumb']; ?>" /></div>
                            <div class="nf3-b2"><?php echo $t['title']; ?></div>
                        </li>
						<?php } } ?>
                        
                    </ul>
                </div>
            </div>
            
            
			<div class="nf4">
            	<div class="nf1-a">
                	<p><span><?php echo $cats[33]['catname']; ?></span></p>
                    <p><i></i></p>
                    <p><font><?php echo $cats[33]['setting']['descritext']; ?></font></p>
                </div>
            	<div class="nf4-b">   
                
                	<div class="slider js_simple1 simple">
                        <div class="frame js_frame">
                            <ul class="slides js_slides">
								<?php $return = $this->_listdata("catid=33 order=listorder_asc more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                                <li class="js_slide">
                                    <div class="js_sd-a"><a href="<?php echo $t['description']; ?>" title="" target="_blank"><img src="<?php echo $t['thumb']; ?>"></a></div>
                                    <div class="js_sd-b"><a href="<?php echo $t['description']; ?>" title="" target="_blank"><?php echo $t['title']; ?></a></div>
                                </li>
								<?php } } ?>
                            </ul>
                        </div>
                        <span class="js_prev prev"><img src="<?php echo SITE_THEME; ?>images/le1.png"></span>
                        <span class="js_next next"><img src="<?php echo SITE_THEME; ?>images/ri1.png"></span>
                    </div>
                   
                </div>
            </div>         
            
			<div class="nf5">
            	<div class="nf1-a">
                	<p><span><?php echo $cats[25]['catname']; ?></span></p>
                    <p><i></i></p>
                    <p><font><?php echo $cats[25]['setting']['descritext']; ?></font></p>
                </div>
            	<div class="nf5-b">
                	<div id="divUpDown">
                        <div id="divDownInner">
                             <div id="divInner1">
                                <ul>
									<?php $return = $this->_listdata("catid=25 order=listorder_desc,updatetime_desc num=10 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                                	<li>
										<a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>">
											<span  class="nf5-b1"><?php echo strcut($t['qiye'],17); ?></span>
											<span><?php echo $t['gangwei']; ?></span>
											<span>入职成功</span>
											<font><?php echo date('Y-m-d',$t['updatetime']); ?></font>
										</a>
									</li>
									<?php } } ?>
                                
                                </ul>
                            </div>
                            <div id="divInner2">
                            </div>
                        </div>
                    </div>
                         
                </div>
            </div>  
            
			
			<?php $arr=array(29,2,3,26); ?>  
			<div class="nf6">
            	<div class="nf1-a">
                	<p><span>新闻资讯</span></p>
                    <p><i></i></p>
                </div>
            	<div class="nf6-b"> 
                	<div>
                    	<ul id="pagenavi1" class="page">
						<?php $i=1;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==1 && $t['ismenu']) { ?>
							<li <?php if ($i==1) { ?>class="nf6-b1"<?php } ?>><a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>" <?php if ($i==1) { ?>class="active"<?php } ?>><?php echo $t['catname']; ?></a></li>
							<?php $i++;  }  } } ?>
							
                        </ul>
                    </div>
                </div>
                <div id="slider1" class="swipe">
                  <ul class="box01_list">
					<?php $i=1;  if (is_array($cats)) { $count=count($cats);foreach ($cats as $s) {  if ($s['parentid']==1 && $s['ismenu']) { ?>
                    <li class="li_list">
                
                        <div class="nf6-c">
							<?php $ids=$s['catid'];  $return = $this->_listdata("catid=$ids order=listorder_desc,updatetime_desc num=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                            <div class="nf6-c1">
                            	<div class="nf6-c1a"><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><img src="<?php echo $t['thumb']; ?>" /></a></div>
                                <div class="nf6-c1b">
                                	<p><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><span><?php echo $t['title']; ?></span><font><?php echo date('Y-m-d',$t['updatetime']); ?></font></a></p>
                                    <div><?php echo strcut($t['description'],100); ?></div>
                                </div>
                            </div>
							<?php } } ?>
                            <div class="nf6-c2">
                                <dl>
									<?php $return = $this->_listdata("catid=$ids order=listorder_desc,updatetime_desc num=1,3"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                                	<dt><a href="<?php echo $t['url']; ?>" title="<?php echo $t['title']; ?>"><span><?php echo $t['title']; ?> </span><font><?php echo date('Y-m-d',$t['updatetime']); ?></font></a></dt>
									<?php } } ?>
                                </dl>
                            </div>
                        </div>
                        
                  	</li>
					<?php $i++;  }  } } ?>
                    
                    
                    
                  </ul>
                </div>
                
                
            </div>         
            
            
            
            
             
            
<script src="<?php echo SITE_THEME; ?>js/swipe.js"></script> 
<script type="text/javascript">         

var slider =  
  Swipe(document.getElementById('slider'), {  
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
var bullets = document.getElementById('position').getElementsByTagName('li');  

</script>



<script>
	'use strict';
	document.addEventListener('DOMContentLoaded', function () {
		var simple = document.querySelector('.js_simple1');
		lory(simple, {
			infinite: 2
		});
	});
</script>  


<script type="text/javascript">


var dspeed = 100;
        var divUpDown = document.getElementById("divUpDown");
        var divInner1 = document.getElementById("divInner1");
        var divInner2 = document.getElementById("divInner2");
        divInner2.innerHTML = divInner1.innerHTML;

        function MarqueeSlideDown() {
            
            if (divUpDown.scrollTop - divInner1.offsetHeight >= 0) {
                divUpDown.scrollTop -= divInner1.offsetHeight;
            } else {
                divUpDown.scrollTop += 2;
            }
            
        }

        updownMar = setInterval(MarqueeSlideDown, dspeed);
        divUpDown.onmouseout = function () { updownMar = setInterval(MarqueeSlideDown, dspeed); }
        divUpDown.onmouseover = function () { clearInterval(updownMar); }
    
 </script>



            
<script type="text/javascript">
for(n=1;n<6;n++){
	var page='pagenavi'+n;
	var mslide='slider'+n;
	var mtitle='emtitle'+n;
	arrdiv = 'arrdiv' + n;
	var as=document.getElementById(page).getElementsByTagName('a');
	var tt=new TouchSlider({id:mslide,'auto':'-1',fx:'ease-out',direction:'left',speed:600,timeout:5000,'before':function(index){
		var as=document.getElementById(this.page).getElementsByTagName('a');
		as[this.p].className='';
		as[index].className='active';
		this.p=index;
		var txt=as[index].innerText;
		$("#"+this.page).parent().find('.emtitle').text(txt);
		var txturl=as[index].getAttribute('href');		
		var turl=txturl.split('#');
		$("#"+this.page).parent().find('.go_btn').attr('href',turl[1]);
	}});
	tt.page = page;
	tt.p = 0;
	//console.dir(tt); console.dir(tt.__proto__);
	for(var i=0;i<as.length;i++){
		(function(){
			var j=i;
			as[j].tt = tt;
			as[j].onclick=function(){
				this.tt.slide(j);
				return false;
			}
		})();
	}
}

</script> 

<?php include $this->_include('footer'); ?>
