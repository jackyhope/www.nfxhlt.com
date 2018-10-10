<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"/home/wwwroot/www.nfxhlt.com/public/../application/admin/view/content/index.html";i:1534243447;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/common.html";i:1534243446;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/header.html";i:1534843390;s:69:"/home/wwwroot/www.nfxhlt.com/application/admin/view/content/menu.html";i:1534243447;}*/ ?>

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
            <a href="#newsqiye">
                <i class="fa fa-list-alt"></i>新闻资讯管理<i class="fa fa-angle-down"></i>
            </a>
            <ul id="newsqiye" class="sub-menu">
                <li>
                    <a href="admin/content/newsqiye">
                        <i class="fa fa-angle-right"></i>企业新闻
                    </a>
                </li>
                <li>
                    <a href="admin/content/newshangye">
                        <i class="fa fa-angle-right"></i>行业资讯
                    </a>
                </li>
                <li>
                    <a href="admin/content/newsmeiti">
                        <i class="fa fa-angle-right"></i>媒体报道
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li class="has-sub">
            <a href="#news">
                <i class="fa fa-list-alt"></i>其它文字管理<i class="fa fa-angle-down"></i>
            </a>
            <ul id="news" class="sub-menu">
                <li>
                    <a href="admin/content/wenhua">
                        <i class="fa fa-angle-right"></i>企业文化
                    </a>
                </li>
                <li>
                    <a href="admin/content/jianjie">
                        <i class="fa fa-angle-right"></i>简介管理
                    </a>
                </li>
                <li>
                    <a href="admin/content/chengnuo">
                        <i class="fa fa-angle-right"></i>五大承诺
                    </a>
                </li>
                <li>
                    <a href="admin/content/jiandu">
                        <i class="fa fa-angle-right"></i>服务监督
                    </a>
                </li>
                <li>
                    <a href="admin/content/dibu">
                        <i class="fa fa-angle-right"></i>底部文字
                    </a>
                </li>
                <!--<li>-->
                <!--<a href="admin/content/newsdelete">-->
                <!--<i class="fa fa-angle-right"></i>已删除文章-->
                <!--</a>-->
                <!--</li>-->
            </ul>
        </li>
    </ul>
</div>

    
    <div class="centercontent">
        


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


    


    
</body>
</html>