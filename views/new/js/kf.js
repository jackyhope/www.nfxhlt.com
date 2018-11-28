var kfhtml="";
kfhtml+='<div id="kfchat">';
kfhtml+='<ul class="list">';
kfhtml+='<li class="gotop">';
kfhtml+='<a href="javascript:;" class="kfa" title="返回顶部" >top</a></li>';



//QQ模块开始，如果要去掉QQ，就删掉整个QQ模块
kfhtml+='<li class="qq">';
kfhtml+='<a href="javascript:;" class="kfa" title="QQ客服">qq</a>';
kfhtml+='<div class="kfcontent">';
kfhtml+='<ul id="QQkf">';
	//需要增加一个QQ男客服，就复制一行下面这句话
kfhtml+='<li class="online"><a href="http://wpa.qq.com/msgrd?v=3&uin=709003197&site=qq&menu=yes" class="qq1" target="_blank"></a><span>客服1</span></li>';
	//需要增加一个QQ女客服，就复制一行下面这句话
kfhtml+='<li class="online"><a href="http://wpa.qq.com/msgrd?v=3&uin=283011803&site=qq&menu=yes" class="qq4" target="_blank"></a><span>客服2</span></li>';
kfhtml+='</ul>';
kfhtml+='<div style="clear:both"></div>';
// kfhtml+='<p>工作时间：8:30-18:00</p>';
kfhtml+='<span class="rotate"></span>';
kfhtml+='</div>';
kfhtml+='</li>';
//QQ模块结束	


//旺旺模块开始，如果要去掉旺旺，就删掉整个旺旺模块
// kfhtml+='<li class="ww">';
// kfhtml+='<a href="javascript:;" class="kfa" title="旺旺客服" >ww</a>';
// kfhtml+='<div class="kfcontent">';
	//需要增加一个旺旺客服，就复制一行下面这句话
// kfhtml+='<a target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=kuwan518&site=cntaobao&s=1&charset=utf-8" style="background:url(http://amos.alicdn.com/online.aw?v=2&uid=kuwan518&site=cntaobao&s=2&charset=utf-8) left center no-repeat;" >客服1</a>';
	//需要增加一个旺旺客服，就复制一行下面这句话
// kfhtml+='<a target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=【这里是旺旺id】&site=cntaobao&s=1&charset=utf-8" style="background:url(http://amos.alicdn.com/online.aw?v=2&uid=【这里是旺旺id】&site=cntaobao&s=2&charset=utf-8) left center no-repeat;" >客服2</a>';
// kfhtml+='<p>工作时间：8:30-18:00</p>';
// kfhtml+='<span class="rotate"></span>';
// kfhtml+='</div>';
// kfhtml+='</li>';
//旺旺模块结束	


//联系方式模块开始，如果要去掉联系方式，就删掉整个联系方式模块
kfhtml+='<li class="kli_contact">';
kfhtml+='<a href="javascript:;" class="kfa" title="联系我们" >contact</a>';
kfhtml+='<div class="kfcontent">';
kfhtml+='<ul class="lianxi">';
kfhtml+='<li title="电话"><strong>电话：</strong>023-66275121</li>';
kfhtml+='<li title="手机"><strong>手机：</strong>138-8321-3298</li>';
kfhtml+='<li title="传真" class="fax"><strong>传真：</strong>023-66275121</li>';
kfhtml+='<li title="邮箱" class="email"><strong>邮箱：</strong><script>var mail="709003197@qq.com";document.write(mail.replace("!","@"));</script></li>';
kfhtml+='</ul>';
kfhtml+='<div style="clear:both"></div>';
// kfhtml+='<p>工作时间：8:30-18:00</p>';
kfhtml+='<span class="rotate"></span>';
kfhtml+='</div>';
kfhtml+='</li>';

//联系方式模块结束	



kfhtml+='<li class="qr">';
kfhtml+='<a href="javascript:;" class="kfa"  title="二维码" >qr</a>';
murl=document.location.href;
if(murl=="http://www.shfy.cc/"){
	mwidth=135;mheight=136;
}else{
	mwidth=155;mheight=156;
}
kfhtml+='<div class="kfcontent" style="width:'+mwidth+'px;background:#fff" >';
kfhtml+='<img src="/views/new/chat/ewm.jpg" width="'+mwidth+'" height="'+mheight+'" /><div class="clear"></div>';
kfhtml+='<span class="rotate2"></span>';
kfhtml+='</div>';
kfhtml+='</li>';
kfhtml+='<li class="gobottom">';
kfhtml+='<a href="javascript:;" class="kfa" title="返回底部" >bottom</a>';
kfhtml+='</li>';
kfhtml+='</ul>';
kfhtml+='</div>';
document.write(kfhtml);

var bro=$.browser,ie6=false,topval=0;
if(bro.msie && bro.version<7){
	ie6=true;
}


$(document).ready(function(){
	
	$("#kfchat ul.list li").hover(function(){
		$(this).find("a.kfa").addClass("hover");
		margintop=parseInt($(this).find("div").height()/2)+10;
		$(this).find(".kfcontent").css("margin-top",-margintop+"px");
		$(this).find(".kfcontent").show();
		if($(this).attr("class")=="qq"){
			if(!ie6){soundManager.play('bSound');}
		}else if($(this).attr("class")=="ww"){
			if(!ie6){soundManager.play('wangwang');}
		}else if($(this).attr("class")=="contact"){
			if(!ie6){soundManager.play('telsound');}
		}
	},function(){
		$(this).find(".kfcontent").hide();
		$(this).find("a.kfa").removeClass("hover");
		if($(this).attr("class")=="qq"){
			if(!ie6){soundManager.stop('bSound');}
		}else if($(this).attr("class")=="ww"){
			if(!ie6){soundManager.stop('wangwang');}
		}else if($(this).attr("class")=="contact"){
			if(!ie6){soundManager.stop('telsound');}
		}
	});
	$("#kfchat ul.list li.gotop a.kfa").click(function(){
		$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'); 
        $body.animate({scrollTop: 0 }, 1000);
		if(!ie6){soundManager.play('dSound');}
	});
	$("#kfchat ul.list li.gobottom a.kfa").click(function(){
		$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'); 
        $body.animate({scrollTop: $(document).height() }, 1000);
		if(!ie6){soundManager.play('dSound');}
	});
   $("#chatnow").mouseover(function(){if(!ie6){soundManager.play('cSound');}});
});

function qq_croll(option,top){
	var t=0;
	if (typeof window.pageYOffset != 'undefined'){ t = window.pageYOffset;} 
	else if (typeof document.compatMode != 'undefined' &&   document.compatMode != 'BackCompat'){ t = document.documentElement.scrollTop; } 
	else if (typeof document.body != 'undefined') { t = document.body.scrollTop;}

	if(ie6){
		$(option).animate( {top: t+top+"px" }, { queue: false, duration: 600 });
	}
}
$(window).scroll(function(){
	qq_croll("#kfchat",300);
});