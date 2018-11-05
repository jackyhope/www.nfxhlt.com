/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "dev/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var prompt = function () {
    //构造函数
    function prompt(type) {
        var _this = this;

        _classCallCheck(this, prompt);

        //初始化配置
        this.isInit = false;
        this.type = type;
        //出口方法
        switch (type) {
            case 'alert':
                return function (data, callback) {
                    //更新hook/option
                    _this.callback = callback;
                    //实例化
                    if (!_this.isInit) {
                        _this.__init__();
                        _this.hideCancel();
                    }
                    //显示
                    _this.msg(data);
                };
                break;
            case 'prompt':
                return function (data) {
                    //实例化
                    if (!_this.isInit) {
                        _this.__init__();
                        _this.hideCancel();
                    }
                    //显示
                    _this.msg(data);
                };
                break;
            case 'dialog':
                return function (data, option, callback) {
                    //更新callback
                    _this.callback = callback;
                    //更新hook
                    _this.option = option;
                    //实例化
                    if (!_this.isInit) {
                        _this.__init__();
                    }
                    //读取传入配置
                    if (option) {
                        if (option.title) {
                            _this.setTitle(option.title);
                        }

                        if (option.btn) {
                            _this.setButton(option.btn);
                        }

                        if (option.width) {
                            _this.setWidth(option.width);
                        }

                        if (option.cancel == false) {
                            _this.hideCancel();
                        }
                    }
                    //显示
                    _this.msg(data);
                };
                break;
            case 'confirm':
                return function (data, callback) {
                    //更新hook/option
                    _this.callback = callback;
                    //实例化
                    if (!_this.isInit) {
                        _this.__init__();
                    }
                    //显示
                    _this.msg(data);
                };
                break;
        }
    }

    //初始化事件


    _createClass(prompt, [{
        key: 'eventInit',
        value: function eventInit() {
            var _this2 = this;

            //确定
            jQuery('#' + this.type + '-dialog').find('.ok').click(function () {
                jQuery('#' + _this2.type + '-dialog').hide();
                jQuery('.modal-back').hide();
                if (_this2.callback && (_this2.type == 'alert' || _this2.type == 'confirm' || _this2.type == 'dialog')) _this2.callback(true);
            });
            //关闭
            jQuery('#' + this.type + '-dialog').find('.close').click(function () {
                jQuery('#' + _this2.type + '-dialog').hide();
                jQuery('.modal-back').hide();
                if (_this2.callback && (_this2.type == 'alert' || _this2.type == 'confirm' || _this2.type == 'dialog') && _this2.option.closeListen != false) _this2.callback(false);
            });
            //取消
            jQuery('#' + this.type + '-dialog').find('.cancel').click(function () {
                jQuery('#' + _this2.type + '-dialog').hide();
                jQuery('.modal-back').hide();
                if (_this2.callback && (_this2.type == 'alert' || _this2.type == 'confirm' || _this2.type == 'dialog')) _this2.callback(false);
            });
        }

        //模板

    }, {
        key: 'tmp',
        value: function tmp() {
            var tmp = '<div id="' + this.type + '-dialog" class="modal" style="background:rgba(0,0,0,0.6);position: fixed;z-index: 6000;top: 0px;width: 100%;height: 100%;">';
            tmp += '   <div class="modal-dialog" style="width: 445px; margin: 100px auto;word-break: break-all">';
            tmp += '     <div class="modal-content" style="border-radius:0px">';
            tmp += '       <div class="modal-header">';
            tmp += '         <button type="button" class="close" data-dismiss="modal"><!--<span aria-hidden="true">×</span>--><!--<span class="sr-only">Close</span>--></button>';
            tmp += '         <h5 class="modal-title"><i style="background-color:#1ab5f8;display:inline-block;height:18px;width:3px;margin-right:18px;float:left;margin-top:5px;"></i><span data-dom="title" style="font-size:20px;"><span></h5>';
            tmp += '       </div>';
            tmp += '       <div class="modal-body small" style="padding:30px;">';
            tmp += '         <p><span data-dom="message"><span></p>';
            tmp += '       </div>';
            tmp += '       <div class="modal-footer" >';
            tmp += '         <button type="button" class="btn btn-primary ok" data-dismiss="modal">确定</button>';
            tmp += '         <button type="button" class="btn btn-default cancel" data-dismiss="modal">取消</button>';
            tmp += '       </div>';
            tmp += '     </div>';
            tmp += '   </div>';

            return tmp;
        }

        //初始化弹框插件

    }, {
        key: '__init__',
        value: function __init__() {
            jQuery('body').append(this.tmp());
            this.setTitle('提示');
            this.isInit = true;
            this.eventInit();
        }

        //设置弹框标题

    }, {
        key: 'setTitle',
        value: function setTitle(data) {
            jQuery('#' + this.type + '-dialog').find('[data-dom=title]').html(data);
        }
    }, {
        key: 'setButton',
        value: function setButton(data) {
            jQuery('#' + this.type + '-dialog').find('.ok').text(data[0]);
            jQuery('#' + this.type + '-dialog').find('.cancel').text(data[1]);
        }

        //设置弹框宽度

    }, {
        key: 'setWidth',
        value: function setWidth(data) {
            jQuery('#' + this.type + '-dialog').find('.modal-dialog').css('width', data);
        }

        //是否隐藏取消按钮

    }, {
        key: 'hideCancel',
        value: function hideCancel() {
            jQuery('#' + this.type + '-dialog').find('.cancel').hide();
        }
    },  {
        key: 'hideOk',
        value: function hideOk() {
            jQuery('#' + this.type + '-dialog').find('.ok').hide();
        }
    }, {
        key: 'setOption',
        value: function setOption(option) {
            if (option.title) this.setTitle(option.title);
            if (option.width) this.setWidth(option.width);
            if (option.cancel == false) this.hideCancel();
			if (option.ok == false) this.hideOk();
        }

        //显示内容

    }, {
        key: 'msg',
        value: function msg(data) {
            jQuery('#' + this.type + '-dialog').find('[data-dom=message]').html(data);
            if (this.option) this.setOption(this.option);
            jQuery('.modal-back').show();
            jQuery('#' + this.type + '-dialog').show();
        }
    }]);

    return prompt;
}();

window.alert = new prompt('alert');
window.confirm = new prompt('confirm');
window.dialog = new prompt('dialog');
window.prompt = new prompt('prompt');

/***/ })
/******/ ]);