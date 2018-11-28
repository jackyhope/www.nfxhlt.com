jQuery.extend({
    handleError: function (s, xhr, status, e) {
        if (s.error) {
            s.error.call(s.context || s, xhr, status, e);
        }
        if (s.global) {
            (s.context ? jQuery(s.context) : jQuery.event).trigger("ajaxError", [xhr, s, e]);
        }
    },
    httpData: function (xhr, type, s) {
        var ct = xhr.getResponseHeader("content-type"),
            xml = type == "xml" || !type && ct && ct.indexOf("xml") >= 0,
            data = xml ? xhr.responseXML : xhr.responseText;
        if (xml && data.documentElement.tagName == "parsererror")
            throw "parsererror";
        if (s && s.dataFilter)
            data = s.dataFilter(data, type);
        if (typeof data === "string") {
            if (type == "script")
                jQuery.globalEval(data);
            if (type == "json")
                data = window["eval"]("(" + data + ")");
        }
        return data;
    }
});

//banner图
	// JavaScript Document
	$(document).ready(function(){
	//Main Swiper
		if($('.swiper-free').length>0){
			var swiperFree = $('.swiper-free').swiper({
				pagination : '.pagination-free',
				freeModeFluid: true,
				autoPlay:3000,
				slidesPerSlide :1
			})
			//Clickable pagination
			$('.pagination-free .swiper-pagination-switch').click(function(){
				swiperFree.swipeTo($(this).index());
			})
		}
	});
	

	
	function pageSize(){
		var swiperH=$('.swiper-free .swiper-slide:first img').height();
		$('.swiper-free, .swiper-free .swiper-slide').css({'height':swiperH});
		
		var pageboderH=$('.pageboder').height();
		$('.panel-box,.m-panelBg').css({'height':pageboderH});
	}
	$(window).load(function(){
		pageSize();
}); 

	var evt = "onorientationchange" in window ? "orientationchange" : "resize";
	try{
		window.addEventListener(evt, function() {
			setTimeout(function(){
				pageSize();
			},50);
		}, false);
	}catch(e){
		window.attachEvent(evt, function() {
			setTimeout(function(){
				pageSize();
			},50);
		});
	}
	
//产品列表页
	$(function(){
		$('.f-proScore ul li').each(function(index,element){
			if(index%2 == 0){
				$(this).css({'clear':'both'});
			}
		}); 
		$('.f-pro ul li').each(function(index,element){
			if(index%2 == 0){
				$(this).css({'clear':'both'});
			}
		}); 

		$('.f-newsImg').each(function(index,element){
			$(this).find('a').eq(1).attr('class','right');
		});
	});
//底部导航
	$(function(){
		var dataPosition=$('#footer').attr('data-position');
		var footerH=$('#footer').height();
		if(dataPosition == 'fixed'){
			$('#footer').css({'position':'fixed','bottom':'0','width':'100%'});
			$('body').css({'padding-bottom':footerH});
		}
	});	
	
//产品分类
	$(function(){
		$('.f-prosNav .u-a').click(function(){
			$(this).next('.f-xNav').slideToggle();
		});
	});	
//积分商品详细
	$(function(){
		$('.f-subScoreDetial .u-title').each(function(index, element) {
            $(this).click(function(){
				$(this).next('.u-con').slideToggle();
			});
        });
	});
//个人中心分类
	$(function(){
		$('.f-userNav .u-li').each(function(index, element) {
			$(this).find('.u-a').click(function(){
				$(this).parent().find('.f-xNav').slideToggle();
			});
		});
	});	
//产品详细
	$(function(){
		$('.f-subProTitle ul li').each(function(index, element) {
			$(this).hover(function(){
				$(this).addClass('current').siblings().removeClass('current');
				$(this).parents('.f-subProTitle').next('.f-subProCon').find('.f-subProBorder').eq(index).show().siblings().hide();
			});
        });
	});	
//返回顶部
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.m-scrollTop img').fadeIn();
			} else {
				$('.m-scrollTop img').fadeOut();
			}
		});
    	$('.m-scrollTop a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
//侧导航
	$(document).ready(function(){
		$('.nav').click(function(){
			$('.allpage').animate({'right':$('.m-panel').width()});
			$('.m-panelBg').show();
		});
		$($('.m-panelBg')).click(function(){
			$('.allpage').animate({'right':'0'});
			$('.m-panelBg').hide();
		});
		$('.panel-nav li').each(function(index, element) {
            $(this).addClass('u-li'+(index+1));
        });
	});
	
	
//商品评价
	$(function(){
		var oTable=$('.dp-star');
		for(var j=0;j<oTable.length;j++){
			oTable.eq(j).attr('id','dp-star'+j);
			dpStar('dp-star'+j);
		}
		function dpStar(obj){
			var oStar = document.getElementById(obj);
			var aLi = oStar.getElementsByTagName("li");
			var oUl = oStar.getElementsByTagName("ul")[0];
			var oSpan = oStar.getElementsByTagName("span")[1];
			var oP = oStar.getElementsByTagName("p")[0];
			var i = iScore = iStar = 0;
			var aMsg = ["很不满意|很不满意","不满意|不满意","一般|一般","满意|满意","非常满意|非常满意"]
			for (i = 1; i <= aLi.length; i++) {
				aLi[i - 1].index = i;
				//鼠标移过显示分数
				aLi[i - 1].onmouseover = function () {
				fnPoint(this.index);
				};
				//鼠标离开后恢复上次评分
				aLi[i - 1].onmouseout = function () {
				fnPoint();
				//关闭浮动层
				oP.style.display = "none"
				};
				//点击后进行评分处理
				aLi[i - 1].onclick = function () {
				iStar = this.index;
				oP.style.display = "none";
				oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
				}
			}
			//评分处理
			function fnPoint(iArg) {
				//分数赋值
				iScore = iArg || iStar;
				for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";
			}
		}
	});
//收货地址
	$(function(){
		$('.addrul li').click(function(){
			$(this).addClass('current').siblings().removeClass('current');
			$(this).find('input:radio').attr('checked',true);
		});
	});

/*****使用新地址*****/
	$(function(){
		$('.newaddr .addr-on').click(function(){
			$(this).parent('.newaddr').find('.addr-de').show();
			$(this).hide();
		});
		$('.newaddr .close-addr').click(function(){
			$(this).parents('.addr-de').hide();
			$(this).parents('.newaddr').find('.addr-on').show();
		});
	});