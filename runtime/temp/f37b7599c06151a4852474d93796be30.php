<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"/home/wwwroot/www.nfxhlt.com/public/../application/admin/view/image/qqcode.html";i:1534243447;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/common.html";i:1534243446;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/header.html";i:1534843390;s:67:"/home/wwwroot/www.nfxhlt.com/application/admin/view/image/menu.html";i:1534243447;}*/ ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理后台</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <base href="/">
    <link rel="stylesheet" href="/static/css/admin/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/admin/style.default.css" type="text/css" />
    <link rel="stylesheet" href="/static/css/admin/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/css/admin/admin.css" rel="stylesheet">

    <script type="text/javascript" src="/static/js/admin/plugins/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="/static/js/admin/plugins/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="/static/js/admin/plugins/jquery.cookie.js"></script>
    <script type="text/javascript" src="/static/js/admin/jquery.uniform.min.js"></script>

    <script type="text/javascript" src="/static/js/admin/plugins/jquery.slimscroll.js"></script>
    <script src="/static/js/admin/flowTip.js"></script>
    <script src="/static/js/admin/dialog.js"></script>
    <script src="/static/js/plugins/h5upload/h5upload.js"></script>
    <link rel="stylesheet" href="/static/js/plugins/h5upload/h5upload.css">
    <script src="/static/js/plugins/editor3/wangEditor.js"></script>
    <link rel="stylesheet" href="/static/js/plugins/editor3/wangEditor.css">

    
</head>
<body class="withvernav">
<div class="bodywrapper">
    <script>
        var UPLOAD_URL = "/web/public/admin/upload/index";
    </script>
    <div class="topheader">
    <div class="left">
        <h1 class="logo"><span>南方新华</span></h1>
        <span class="slogan">后台管理系统</span>


        <br clear="all" />

    </div><!--left-->

    <div class="right">
        <!--<div class="notification">
            <a class="count" href="ajax/notifications.html"><span>9</span></a>
        </div>-->
        <div class="userinfo">
            <img src="/static/images/thumbs/avatar.png"  alt="" />
            <span>管理员</span>
        </div><!--userinfo-->

        <div class="userinfodrop">
            <div class="avatar">
                <a href=""><img src="" alt="" /></a>

            </div>
            <div class="userdata" style="margin:0">
                <ul style="width: 100%;text-align: center">
                    <li><a href="admin/login/reset">修改密码</a></li>
                </ul><ul style="width: 100%;text-align: center">
                <li><a href="admin/login/out">退出</a></li>
            </ul>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <ul class="headermenu">
        <volist name="#" id="#">
            <if condition="#">
                <li><a href="admin/index/index"><span class="icon icon-flatscreen"></span>网站SEO</a></li>
                <li><a href="admin/content/index"><span class="icon icon-pencil"></span>文章管理</a></li>
                <li><a href="admin/image/index"><span class="icon icon-chart"></span>图片管理</a></li>
                <li><a href="admin/hunter/index"><span class="icon icon-speech"></span>猎头推荐</a></li>
            </if>
        </volist>
    </ul>
</div><!--header-->
    
<div class="vernav2 iconmenu" >
    <ul>
        <li class="has-sub">
            <a href="#img">
                <i class="fa fa-list-alt"></i>网站顶部图管理<i class="fa fa-angle-down"></i>
            </a>
            <ul id="img" class="sub-menu ">
                <li>
                    <a href="admin/image/banner">
                        <i class="fa fa-angle-right"></i>banner
                    </a>
                </li>
                <!--<li>
                    <a href="admin/image/logo">
                        <i class="fa fa-angle-right"></i>logo
                    </a>
                </li>-->
            </ul>
        </li>
    </ul>
    <ul>
        <li class="has-sub">
            <a href="#img2">
                <i class="fa fa-list-alt"></i>网站中部图管理<i class="fa fa-angle-down"></i>
            </a>
            <ul id="img2" class="sub-menu ">
                <li>
                    <a href="admin/image/imgcenter">
                        <i class="fa fa-angle-right"></i>图片中心
                    </a>
                </li>
                <li>
                    <a href="admin/image/createrimg">
                        <i class="fa fa-angle-right"></i>创始人图片
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li class="has-sub">
            <a href="#img3">
                <i class="fa fa-list-alt"></i>网站底部二维码<i class="fa fa-angle-down"></i>
            </a>
            <ul id="img3" class="sub-menu ">
                <li>
                    <a href="admin/image/qqcode">
                        <i class="fa fa-angle-right"></i>官方微信
                    </a>
                </li>
                <li>
                    <a href="admin/image/wechatcode">
                        <i class="fa fa-angle-right"></i>官方微博
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>


    
    <div class="centercontent">
        
<script>
    var UPLOAD_URL = "/web/public/admin/upload/index";
</script>
<div class="centercontent">

    <div class="pageheader notab">
        <h1 class="pagetitle">微信二维码修改<small></small></h1>
    </div>

    <div id="contentwrapper" class="contentwrapper">

        <form method="post" action="admin/image/doqqcode" class="form-horizontal" data-parsley-validate="true" enctype="multipart/form-data" >
            <input type="hidden" name="id" value="<?php echo $list['Id']; ?>">

            <div class="form-group" style="display: none">
                <label class="col-md-3 control-label">广告位置</label>
                <div class="col-md-9">
                    <select name = "position_id" class="uniformselect" required>

                        <option> - 请选择 - </option>
                        <option value="1">WEB首页顶部大图</option>
                        <option value="2">WEB首页轮播图</option>
                        <option value="15">服务项目顶部大图</option>
                        <option value="16">服务项目大图</option>
                        <option value="26">最新活动顶部大图</option>
                        <option value="17">服务项目底部合作伙伴</option>
                    </select>
                </div>
            </div>
            <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">猎头名</label>-->
            <!--<div class="col-md-9">-->
            <!--<input type="text" name="name" class="form-control" placeholder="输入猎头名" value="" required />-->
            <!--</div>-->
            <!-- </div> -->
            <!-- <div class="form-group"> -->
            <!-- <label class="col-md-3 control-label">猎头介绍</label> -->
            <!-- <div class="col-md-9">-->
            <!--<input type="text" name="name" class="form-control" placeholder="请输入介绍" value="" required />-->
            <!--</div>-->
            <!--</div>-->
            <div class="form-group">
                <label class="col-md-3 control-label">类型</label>
                <div class="col-md-9">
                    <select name = "type_id" class="uniformselect" required>
                        <!--<option> - 请选择 - </option>-->
                        <option data-link = "0" value="1">图片 - 无跳转</option>
                        <!--<option data-link = "1" value="2">图片 - 跳转链接</option>-->
                    </select>
                </div>
            </div>

            <div class="form-group" data-type="1,2">
                <label class="col-md-3 control-label">图片</label>
                <div class="col-md-9">
                    <input id="file" name="file" type="file" accept="image/png, image/jpeg, image/gif, image/jpg" onchange="changepic(this)" required/><br/>
                    <img src="/static<?php echo $list['urlposition']; ?><?php echo $list['name']; ?>" id="show" width="200">
                </div>
            </div>


            <!--<div class="form-group" data-type="3">-->
            <!--<label class="col-md-3 control-label">文字标题</label>-->
            <!--<div class="col-md-9">-->
            <!--<input type="text" name="title" class="form-control" placeholder="输入文字标题" value=""/>-->
            <!--</div>-->
            <!--</div>-->

            <!--<div class="form-group" id="link">-->
            <!--<label class="col-md-3 control-label">链接地址</label>-->
            <!--<div class="col-md-9">-->
            <!--<input type="text" name="url" class="form-control" placeholder="输入链接URL地址" value=""/>-->
            <!--</div>-->
            <!--</div>-->

            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-sm btn-primary">确定提交</button>
                </div>
            </div>

        </form>

    </div>

</div>



<!--
<link rel="stylesheet" href="assets/plugins/h5upload/h5upload.css" rel="stylesheet" />
<script src="assets/plugins/h5upload/h5upload.js"></script>


-->

<!--<script type="text/javascript" src="/static/js/custom/general.js"></script>-->


    </div>
    
    

    <!--
    <link rel="stylesheet" href="assets/plugins/h5upload/h5upload.css" rel="stylesheet" />
    <script src="assets/plugins/h5upload/h5upload.js"></script>

    -->



    <script type="text/javascript" src="/static/js/admin/custom/general.js"></script>
    <script src="/static/js/admin/admin.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/static/js/admin/excanvas.min.js"></script><![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="/static/js/admin/css3-mediaqueries.js"></script>
    <![endif]-->


    
<script>
    (function($){
        $('[name=type_id]').change(function(){
            var type = $(this).val();
            $('[data-type]').each(function(i,e){
                var rs = $(e).attr('data-type').split(',');
                var hidden = true;
                for(var o in rs){
                    if(rs[o] == type){
                        hidden = false;
                        break;
                    }
                }

                if(hidden){
                    $(this).hide();
                }else{
                    $(this).show();
                }

            });
            if($(this).find("option:selected").attr('data-link') == 1){
                $('#link').show();
            }else{
                $('#link').hide();
            }
        }).change();
    })(jQuery);
    function changepic(e) {
        var reads= new FileReader();
        var  f=document.getElementById('file').files[0];
        reads.readAsDataURL(f);
        reads.onload=function (e) {
            document.getElementById('show').src=this.result;
        };
    }
</script>

    
</body>
</html>