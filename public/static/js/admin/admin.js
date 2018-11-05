(function($){
	"use strict";

	//时间戳函数封装
	window.time = function(t){
		return t?
			Date.parse(new Date(t))/1000:
			Date.parse(new Date())/1000;
	}
	
	//左侧菜单

	
	$('.iconmenu a').each(function(i,e){
		if(window.location.href.indexOf($(e).attr('href'))>-1){
			$(e).parent().addClass('current');
			if($(e).parent().parent().hasClass('sub-menu')){
				$(e).parent().parent().show();
				$(e).parent().parent().parent().addClass('current');
			}
		}
	});
	
	//ajax封装
	window.server = new function(){
		var obj = this;
		this.req = function(url,data,callback,type,error){
			type = type?type:'POST';
			$.ajax({
				type: type,
				url: url ,
				data: data ,
				dataType: 'json',
				success: function(e){
					if(callback){
						if((callback)(e)==false){
							return false;	
						}
					}
					switch(e.code){	
						case 200:	
							break;
						case 300:
							window.location.reload();
							break;
						case 500:
							alert(e.info);
					}
				},error:function(e){
					if(error){
						error(e)
					}else{
						alert('接口异常');
					}
				}
			});
		}
		/*
		this.submit = function(form,callback){
			//if(!null_check() || !re_check())return;
			obj.req(form.attr('action'),form.serialize(),callback);
		}*/
	}


	//时间选择插件初始化
	if($('.datepicker').size()>0){	
		$('.datepicker').datepicker({format: 'yyyy-mm-dd'});
	}
	
	//级联菜单的初始化
	$(document).on('change','[data-key]',function(e){
		var ele = '[data-#key="#val"]'.replace('#key',$(this).attr('data-key'));
		var val = $(this).val();
		var options;
		//隐藏所有
		var alloption  = ele.replace('="#val"','');
		var sel = $('[data-select-key=' + $(this).attr('data-key') + ']');
		sel.find(alloption).addClass('hidden');
		
		if(typeof(val) == 'object'){
			for(var i in val){
				options = ele.replace('#val',val[i]);
				sel.find(options).removeClass('hidden');//显示应该显示的选项
			}
		}else{
			options = ele.replace('#val',val);
			sel.find(options).removeClass('hidden');//显示应该显示的选项
		}
		
		$('[data-select-key=' + $(this).attr('data-key') + ']').val(0);
		
		if($('[data-select-key=' + $(this).attr('data-key') + ']').hasClass('multiselect')){
			 $('[data-select-key=' + $(this).attr('data-key') + ']').updMS();
		}
	});
	
	
	$('form').submit(function(){
		if($('[type=password]').size()>0 && $('[type=password]').val() != ''){
			$('[type=password]').val($.md5($('[type=password]').val()));
		}
	});
	
	//新的上传插件初始化方法
	var option = {
		'url' : '',
		'module':'default',
	};
	if($('[type=upload]').length>0){
		$('[type=upload]').each(function(index, element){
			$(element).Upload(option,function(e){
				switch(e.code){
					case 500:
						//window.flowTip.show(e.info,'#ff5b57',5000);
						break;
					case 200:
						//window.flowTip.show(e.info,'#8de191',5000);
						break;
					case 100:
						//window.flowTip.show('开始上传','#8de191');
						break;
					case 206:
						//window.flowTip.show('上传进度 :' + parseInt((parseInt(e.data.index)+1)*100 / (parseInt(e.data.total))) +'%','#8de191');//文字内容
						break;
				}
			});
		});			
	}

	
	function post(_this,data,cb){
		if(!data)data = [];
		
		console.log($(_this).attr('href'));
		
		$.ajax({
			type: 'POST',
			url: $(_this).attr('href'),
			data: data,
			dataType: 'json',
			xhrFields: {
          	  withCredentials: true
        	},
			crossDomain: true,
			success: function(d){
				//如果状态码提示执行错误 直接提示然后结束
				if(d.code && d.code == 500){
					alert(d.info);
					return false;
				}
							
				if($(_this).attr('callback')){
					try{
						eval($(_this).attr('callback')+"(_this,d)");	
					}catch(e){
						/..../
					}
				}else{
					//状态码处理
					switch(d.code){
						case 300:
							window.location.reload();
							return;
						case 302:
							window.location.href = d.url;
							return;
						case 205:
							if(cb)(cb)(d);						
					}
				}
				if(d.url)window.location.href = d.url;	
			},
			error: function(e){
				alert('接口异常');
			}
		});
		return false;
	}
	
	
	$(document).on('click','[ajax]',function(){
		var _this = this;
		//删除

		if($(_this).attr('ajax')=='del'){
			confirm('确定删除',function(e){
				
				if(!e)return;
				var cb = $(_this).attr('callback')?$(_this).attr('callback'):function(){}; 
				
				post(_this,[],cb);
			});
		
		}else if($(_this).attr('ajax')=='undel'){
			confirm('确定恢复',function(e){
				if(!e)return;
				var cb = $(_this).attr('callback')?$(_this).attr('callback'):function(){}; 
				post(_this,[],cb);
			});		
		
		}else if($(_this).attr('ajax')=='allowAll'){
			confirm('确定要允许所有用户组访问',function(e){
				if(!e)return;
				var cb = $(_this).attr('callback')?$(_this).attr('callback'):function(){}; 
				post(_this,[],cb);
			});		
		
		//审核
		}else if($(_this).attr('ajax') == 'send' ){
			var option= {
				btn:['已发货','未发货'],
				closeListen:false,
			};

			
			dialog('修改发货状态',option,function(e){	
				if(e){
					post(_this,{status:1});
				}else{
					post(_this,{status:0});	
				}
			});
			
			return false;
		//取消审核
		}else if($(_this).attr('ajax') == 'unreviewed' ){		
			var option= '取消审核';
			confirm(option,function(e){
				if(e){
					post(_this,{reviewed:'0'});
				}
			});
		}else if($(_this).attr('ajax') == 'air_reviewed' ){
			var option= {
				btn:['通过','不通过'],
				closeListen:false,
			};
			
			confirm('修改审核状态',option,function(e){
				if(e){
					post(_this,{air_reviewed:'1'});
				}else{
					post(_this,{air_reviewed:'-1'});	
				}
			});
			return false;
		//取消审核
		}else if($(_this).attr('ajax') == 'air_unreviewed' ){	
			var option= '取消审核';	
			confirm(option,function(e){
				if(e){
					post(_this,{air_reviewed:'0'});
				}			
			});
		
			
		}else if($(_this).attr('ajax')=='html'){
			window.getHtml = document.createElement('div');
			$(getHtml).load($(_this).attr('href'),null,function(response,status,xhr){
				if(status=='error'){
					alert('获取页面内容失败');
					return false;
				}else if(status == 'parsererror'){
					alert('获取到的页面类型错误');	
				}

				//console.log(status);
				if($(_this).attr('callback')){
					(function(e,d){
						eval($(_this).attr('callback')+'(e,d)');
					})(_this,getHtml);
				}else{
					if(DEBUG)console.log('页面已获取,但未设置回调函数');
				}
				//return false;
			});
			return false;
		}else{
			cb = $(_this).attr('callback')?$(_this).attr('callback'):function(){}; 
			post(_this,[],cb);	
		}
		
		return false;
	});	
	

}(jQuery));