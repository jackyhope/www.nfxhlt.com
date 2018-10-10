<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"/home/wwwroot/www.nfxhlt.com/public/../application/admin/view/index/edit.html";i:1534243446;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/common.html";i:1534243446;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/header.html";i:1534843390;}*/ ?>

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

    
    <link rel="stylesheet" type="text/css" href="/static/css/plugins/editor3/wangEditor.css">
    <link rel="stylesheet" href="/static/css/plugins/h5upload/h5upload.css" rel="stylesheet" />
    <script src="/static/js/plugins/h5upload/h5upload.js"></script>
    <script type="text/javascript" src="/static/js/plugins/editor3/wangEditor.min.js"></script>

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
    

<div class="vernav2 iconmenu">
    <ul>
        <li class="has-sub">
            <a href="#open">
                <i class="fa fa-list-alt"></i>SEO设置<i class="fa fa-angle-down"></i>
            </a>
            <ul id="open" class="sub-menu">
                <li>
                    <a href="admin/index/keywords">
                        <i class="fa fa-angle-right"></i>网站管理
                    </a>
                </li>
                <!--<li>-->
                <!--<a href="admin/index/title">-->
                <!--<i class="fa fa-angle-right"></i>网站标题管理-->
                <!--</a>-->
                <!--</li>-->
            </ul>
        </li>
    </ul>
    <ul>
        <li class="has-sub">
            <a href="#url">
                <i class="fa fa-list-alt"></i>友情链接设置<i class="fa fa-angle-down"></i>
            </a>
            <ul id="url" class="sub-menu">
                <li>
                    <a href="admin/index/friendlyurl">
                        <i class="fa fa-angle-right"></i>友情链接管理
                    </a>
                </li>
                <!--<li>-->
                <!--<a href="admin/index/title">-->
                <!--<i class="fa fa-angle-right"></i>网站标题管理-->
                <!--</a>-->
                <!--</li>-->
            </ul>
        </li>
    </ul>
</div>

    
    <div class="centercontent">
        
<div class="pageheader notab">
    <h1 class="pagetitle">友情链接 <small>添加</small></h1>
</div>

<div id="contentwrapper" class="contentwrapper">

    <div class="contenttitle2">
        <h3>友情链接添加</h3>
    </div>

    <form method="post" action="admin/index/addurl" class="form-horizontal" data-parsley-validate="true" id="myform">
        <input type="hidden" name="id" value="#">

        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">关键词位置</label>-->
            <!--<div class="col-md-9">-->
                <!--<select name = "position_id" class="uniformselect" required>-->
                    <!--<option> - 请选择 - </option>-->
                    <!--<option>首页</option>-->
                    <!--<option>关于我们</option>-->
                    <!--<option>服务保障</option>-->
                    <!--<option>咨询中心</option>-->
                <!--</select>-->
            <!--</div>-->
        <!--</div>-->

        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">类型</label>-->
            <!--<div class="col-md-9">-->
                <!--<select name = "type_id" class="uniformselect" required>-->
                    <!--<option> - 请选择 - </option>-->
                    <!--<volist name="type" id="#">-->
                        <!--<option data-link = "$vo['link']"-->
                        <!--<if condition="#">-->
                            <!--selected = "selected"-->
                        <!--</if>-->
                        <!--value="$vo.id">$vo.name</option>-->
                    <!--</volist>-->
                <!--</select>-->
            <!--</div>-->
        <!--</div>-->

        <!--
        <div class="form-group" data-type="1,2">
            <label class="col-md-3 control-label">图片</label>
            <div class="col-md-9">
                <input type="upload" name="icon" value="$vo.icon"/>
            </div>
        </div>
        -->



        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">文章标题</label>-->
            <!--<div class="col-md-9">-->
                <!--<input type="text" name="title" class="form-control" placeholder="输入文章标题" value="$data.title" required />-->
            <!--</div>-->
        <!--</div>-->

        <div class="form-group">
            <label class="col-md-3 control-label">链接名</label>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" placeholder="请输入链接名" value="" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">链接</label>
            <div class="col-md-9">
                <input type="text" name="url" class="form-control" placeholder="请输入链接" value="" required />
            </div>
        </div>

        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">来源</label>-->
            <!--<div class="col-md-9">-->
                <!--<input type="text"  value="$data.from"  name="from" class="form-control" placeholder="请输入来源" required />-->
            <!--</div>-->
        <!--</div>-->

        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">作者</label>-->
            <!--<div class="col-md-9">-->
                <!--<input type="text" value="$data.author" name="author" class="form-control" placeholder="请输入作者" required />-->
            <!--</div>-->
        <!--</div>-->

        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">摘要</label>-->
            <!--<div class="col-md-9">-->
                <!--<textarea type="text" name="description" class="form-control" placeholder="请输入描述" style="height:90px" required>$data['description']</textarea>-->
            <!--</div>-->
        <!--</div>-->

        <!--<div class="form-group">-->
            <!--<label class="col-md-3 control-label">正文</label>-->
            <!--<div class="col-md-9">-->
                <!--<div id="editor"><php echo htmlspecialchars_decode();?></div>-->
                <!--<textarea class="hidden"  data-id='editor' name="content"></textarea>-->

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
</block>

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