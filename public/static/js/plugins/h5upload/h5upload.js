(function($){
	if(typeof(FileReader) == 'undefined'){
		$.fn.Upload = function(){
			return false;	
		}
		alert('您的浏览器不支持本上传插件');
		return false;	
	}
	
	/**
	 *	self:上传插件所需的表单元素dom
	 *	type:上传文件的类型
	 *	callback:回调函数
	 *	option:配置选项
	 */
	var _upload = function(self,type,callback,option){
		"use strict";
		if(typeof type == 'undefined')type="img";
		
		var nSlice_count = 100,//分段数
		nFactCount,		   //实际分段数
		nMin_size 	 = 0.5,//最小分段大小(M)
		nMax_size	 = 5,  //最大分段大小(M)
		nFactSize,		   //实际分段大小
		nCountNum	 = 0,  //分段标号
		sFile_type   = false,		   //文件类型
		nFile_load_size,   //文件上传部分大小
		nFile_size,		   //文件大小
		nPreuploaded = 0//上一次记录上传部分的大小
		//bIs_uploading= false,//是否上传中
		//bStart_upload= false//是否开始上传
		//bEnd_upload  = false;//是否上传完成
		;
	
		var reader = new FileReader();
		
		var conversion = (function(){
			var unitConversion = {
				bytesTosize:function(data){
					var unit = ["Bytes","KB","MB","GB"];
					var i = parseInt(Math.log(data)/Math.log(1024));
					return (data/Math.pow(1024,i)).toFixed(1) + " " + unit[i];
				},
				secondsTotime:function(sec){
					var h = Math.floor(sec/3600),
						m = Math.floor((sec-h*3600)/60),
						s = Math.floor(sec-h*3600-m*60);
					if(h<10) h = "0" + h;
					if(m<10) m = "0" + m;
					if(s<10) s = "0" + s;
	
					return h + ":" + m + ":" + s + ":";
				}
			};
	
			return unitConversion;
		})();
		
		function getFileInfo(file){
			var get_message = {
				get_name:function(){
					return file.name;
				},
				get_type:function(){
					return file.type;
	
				},
				get_size:function(){
					return file.size;
				},
				getAll:function(){
					return {
						fileName : this.get_name(),
						fileSize : this.get_size(),
						fileType : this.get_type()	
					}
				}
			};
			return get_message;
		}
		
		function getFileLast(file){
			var filepath = $(file).val(); 
			var filename=filepath.replace(/(\\+)/g ,"#");
			var one=filename.split("#");
			var two=one[one.length-1];
			var ext=two.split(".");
			return ext[ext.length-1];	
		}
		
		
		function getUploadData(file,get_file_message,option){
			var get_all = get_file_message.getAll();
			var start = parseInt(nCountNum * nFactSize);
			var end   = Math.min(start + nFactSize,get_all.fileSize);
	
			var fData = new FormData();
			fData.append("file",file.slice(start,end));
			fData.append("name",file.name);
			fData.append("size",file.size);
			fData.append("_size",end-start);

			
			fData.append("type",file.type);
			fData.append("totalCount",nFactCount);
			fData.append("indexCount",nCountNum);
			fData.append("module",option['module']);
			fData.append("trueName",file.name.substring(0,file.name.lastIndexOf(".")));
			return fData;
		}
		
		function getFactSize(get_file_message){
	
			var get_all = get_file_message.getAll(),
				fName = get_all.fileName,
				fType = get_all.fileType,
				fSize = conversion.bytesTosize(get_all.fileSize);
	
			nFactSize = Math.ceil(get_all.fileSize / nSlice_count);
			
			nFactSize = (nFactSize>=nMin_size*1024*1024?nFactSize:nMin_size*1024*1024);
			nFactSize = (nFactSize<=nMax_size*1024*1024?nFactSize:nMax_size*1024*1024);
			nFactCount= Math.ceil(get_all.fileSize/nFactSize);
			
		}
		
		
		var _this = this;
		
		var _name = $(self).attr('name');//获取name值
		var pic,hidden,input;
		var inputGroup;
		
		var defaultImg = 'static/js/plugins/h5upload/upload.png';
		
		if(!_name)alert('上传插件初始化失败,未指定name');	
		
		this.file = document.createElement('input');
		this.file.name = 'file_' + $(self).attr('name');
		this.file.type = 'file';
		this.file.classList.add('h5file');
		
		this.get_file_message;
		this.btnGroup;
		this.fileName;
	
		
		this.clear = function(){
			file = null;
			sFile_type = false;
			nCountNum = 0;
			_this.fileName = '';
			$(_this.file).val('');
		};
		
		$(_this.file).change(function(){
			if($(this).val()!='' && $(this).fileName != $(this).val()){
				var ext = getFileLast(this);

				var extstr = $(self).attr('data-ext');
				if(extstr){
					var rext = extstr.split(',');
					
					if($.inArray(ext.toLowerCase(),rext) == -1){
						alert('不允许的文件类型');
						return false;
					}
				}
				
				_this.fileName = $(this).val();
				_this.startUpload();
			}
		});
		
		
		//创建图片接受元素
		this.createImg = function(){
			pic = document.createElement('img');
			pic.classList.add('upload_img_box');
			
			pic.style['max-width'] = option['max-width']?option['max-width']:'120px';
			pic.style['max-height'] = option['max-height']?option['max-height']:'auto';
			
			if($(self).val()==''){
				pic.src = defaultImg;
			}else{
				pic.src = ('upload/' + $(self).val());
			}
			
			$(self).parent().prepend(pic);
			return pic;
		};
		
		this.createHidden = function(name){
			hidden = document.createElement('input');
			hidden.name = name;
			$(hidden).hide();
			$(self).parent().append(hidden);
			return hidden;
		}
		
		this.createInput = function(name,label){
			inputGroup = document.createElement('div');
			$(inputGroup).addClass('input-group');
			$(inputGroup).append('<span class="input-group-addon text" >'+label+'</span>');
			
			input = document.createElement('input');
			input.name = name;
			$(input).addClass('form-control');
			$(input).addClass('file_input');
			$(inputGroup).append(input);	
			
			if(name == _name){
				$(self).parent().prepend(inputGroup);
				$(input).val($(self).val());
				$(self).remove();
				self = input;
				//self = input;
			}else{
				$(self).parent().prepend(inputGroup);	
			}
			return input;
		};
		
		this.imgInit = function(){
			_this.img = {
				pic : _this.createImg(),
				//width: _this.createHidden(_name + '[width]'),
				//height: _this.createHidden(_name + '[height]'),
			};
			
			$(self).hide();
		};

		this.apkInit = function(){
			_this.apk = {
				size:_this.createInput(_name + '[size]','大小'),//文件大小
				version:_this.createInput(_name + '[version]','版本'),//版本
				package:_this.createInput(_name + '[package]','包名'),//包名
			}
			
			$(_this.apk.size).parent().hide();
			
			$(_this.apk.package).val($(self).attr('data-package'));
			$(_this.apk.version).val($(self).attr('data-version'));
			$(_this.apk.size).val($(self).attr('data-size'));
			
			self = _this.createInput(_name,'路径');
		};
		
		this.videoInit = function(){
			self = _this.createInput(_name,'路径');
		};

		this.pdfInit = function(){
			self = _this.createInput(_name,'路径');
		};
		this.addUploadButton = function(){
			var uploadBtn = document.createElement('span');
			uploadBtn.innerHTML = '上传';
			uploadBtn.classList.add('h5upload');
			uploadBtn.classList.add('btn');
			uploadBtn.classList.add('btn-primary');
			$(_this.btnGroup).append(uploadBtn);
			$(_this.file).height($(uploadBtn).css('height'));
			$(_this.file).width($(uploadBtn).css('width'));
			$(uploadBtn).append(_this.file);
		};
		
		this.addDeleteButton = function(){
			var deleteBtn = document.createElement('button');
			deleteBtn.innerHTML = '删除';
			deleteBtn.classList.add('btn');
			deleteBtn.classList.add('h5upload-del');	
			deleteBtn.classList.add('btn-danger');
			$(_this.btnGroup).append(deleteBtn);
			
			$(deleteBtn).click(function(){
				$(self).parent().parent().find('input').val('');
				if(_this.img)$(_this.img.pic).attr('src',defaultImg);
				return false;
			});
		};
		
		this.init = function(){

			$(self).parent().addClass(type+'-upload-group');
			
			_this.btnGroup = document.createElement('div');
			$(_this.btnGroup).addClass('upload-btn-group');
			$(self).parent().append(_this.btnGroup)
			
			
			switch(type){
				case 'img':
					_this.addUploadButton();
					_this.addDeleteButton();
					_this.imgInit();
					break;
				case 'video':
					_this.addUploadButton();
					_this.addDeleteButton();
					_this.videoInit();
					break;
				case 'apk':
					_this.addUploadButton();
					_this.apkInit();	
					break;
				case 'pdf':
					_this.addUploadButton();
					_this.addDeleteButton();
					_this.pdfInit();
					break;
				default:
					console.error('错误的初始化类型 : '+type);
					return false;
			}
			$(self).attr('name',_name + '[src]');
		};
		
		var file;
		
		this.startUpload = function(f = null,cb=null){

			if(cb)callback = cb;
		
			if(!sFile_type){
				file = f?f[0]:_this.file.files[0];
				if(file.size==0){
					alert('文件大小为0,无法上传');
					return false;	
				}
				
				if(typeof(file)=='undefined')return false;
				//获取到上传文件的信息
				_this.get_file_message = getFileInfo(file);
				sFile_type = file.type.substring(0,file.type.indexOf("/"));
				//if(!sFile_type){
					//alert('无法识别的文件');
					//return false;
				//}
				var a=getFactSize(_this.get_file_message);
			}
			
			var fData = getUploadData(file,_this.get_file_message,option);
			var url;
			if(option['url']){
				url = option['url'];
			}else{
				url = UPLOAD_URL;
			}

			var res = {};
			res['code'] = '100';
			res['info'] = '开始上传'
			callback(res);
			$.ajax({
				type: "post",
				url: "admin/upload/index",
				data: fData,
				async: false,
			 	cache: false,  
			  	contentType: false,  
			  	processData: false, 
				//crossDomain: true,
				/*xhrFields: {
          	  		withCredentials: true
        		},*/
				//contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function (e) {
					switch(e.code){
						case 500:	//上传错误
							_this.clear();
							console.error(e.info)
							break;
						case 206:	//续传
							nCountNum += 1;
							//如果服务器指定了索引
							//nCountNum = parseInt(e.data.index)+1;				
							setTimeout(_this.startUpload,300);
							this.fileName = '';
							break;
						case 200:	//上传结束
							$(self).val(e.data.url);
							$(self).change();
							//如果上传文件是图片 那么填充高宽 然后加载图片
							if(_this.img){
								//if(_this.img.height)$(_this.img.height).val(e.data.img.height);
								//if(_this.img.width)$(_this.img.width).val(e.data.img.width);
								if(_this.img.pic)$(_this.img.pic).attr('src','upload/'+e.data.url+'?'+time());
							}	
							//如果上传文件是apk 那么填充包名和版本号
							
							if(_this.apk){
								if(_this.apk.package)$(_this.apk.package).val(e.data.apk.package);
								if(_this.apk.version)$(_this.apk.version).val(e.data.apk.versionName);
								if(_this.apk.size)$(_this.apk.size).val(e.data.size);
							}
							
							_this.clear();
							break;
						default:
							_this.clear();
							alert('未处理的异常');
					}
					
					if(callback)callback(e);
					
				},
				error: function (msg) {
					_this.clear();
					console.log('接口异常');
				}
			});
		}
		this.init();
	};
	
	var upl = document.createElement('input');
	$(upl).attr('name','upl');
	

	var editorUpload = new _upload(upl,'img',function(){},{});
	
	$.editorUpload = function(file,callback){
		var a = document.createElement('input');
		editorUpload.startUpload(file,callback);
	}
	
	$.fn.Upload = function(option,callback){
		var type = $(this).attr('data-type');
		return new _upload(this,type,callback,option);	
	};

})($);