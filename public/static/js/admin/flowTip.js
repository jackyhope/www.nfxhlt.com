// JavaScript Document
(function($){   
	var _flowTip = {
		inited : false,
		init : function(){
			var div = document.createElement('div');
			div.classList.add('flowTip');
			$(div).html('<div class="show"><i class="light"></i><div class="info">abvasdas</div></div>');
			$('body').append(div);
		},
		show : function(i,l,t){
			if(!_flowTip.inited){
				_flowTip.init();
				_flowTip.inited = true;
			}
			if(l)_flowTip.light(l);
			if(t)_flowTip.time(t);
			
			$('.flowTip .info').html(i);
			$('.flowTip').show("high");
		},
		hide : function(){
			$('.flowTip').hide();
		},
		light : function(color){
			
			$('.flowTip .light').css('background-color',color);
		},
		time : function(t){
			setTimeout('flowTip.hide()',t);	
		}
	}
	
	window.flowTip = _flowTip;
	
	//window.flowTip.show('上传失败');//文字内容
	//window.flowTip.light('#8de191');//文字前面的灯颜色(#ff5b57红色,#8de191绿色,黄色#FBA353)
	//window.flowTip.hide();//关闭
	//window.flowTip.time(5000);//5秒后关闭

})(jQuery);