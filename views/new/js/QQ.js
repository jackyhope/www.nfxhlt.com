
 $(function(){
	
    // 右侧浮动
    $('.float-right li').hover(function(){
			$(this).find(".dv03").addClass('on').animate({ width : 160},50);
       		$(this).find(".dv01,.dv02,.dv04").addClass('on').animate({ width : 130},50);
       		$(this).find(".dv05").addClass('on').animate({ width : 120},50);
        }, function(){
        	$(this).find("div").removeClass('on').animate({ width : 50});
			$(this).removeClass('hover').animate({ width : 50});
    	});   
    
 })


