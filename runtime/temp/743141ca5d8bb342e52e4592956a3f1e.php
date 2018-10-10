<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/home/wwwroot/www.nfxhlt.com/public/../application/admin/view/index/keywords.html";i:1534243447;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/common.html";i:1534243446;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/header.html";i:1534843390;}*/ ?>

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
    <if condition='#'>

        <else/>
        <h1 class="pagetitle">网站关键字管理 <small></small></h1>
    </if>
</div>

<div id="contentwrapper" class="contentwrapper">

    <div class="contenttitle2">
        <h3>列表</h3>
    </div>

    <table class="table table-striped table-bordered table-hover no-footer" >
        <thead>
        <tr>
            <th>SEO标题</th>
            <th>SEO关键字</th>
            <th>SEO描述</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <input type="hidden" name="sitename" value="<?php echo $vo['sitename']; ?>">
                    <td class="gai" style="text-align: left">
                        <input type="text" style="border:none" readonly="readonly" value="<?php echo $vo['SEOtitle']; ?>">
                    </td>
                    <td class="gai"><input class="textbtn" type="text" style="border:none" readonly="readonly" value="<?php echo $vo['SEOkeyword']; ?>"></td>
                    <td class="gai"><input type="text" style="border:none" readonly="readonly" value="<?php echo $vo['SEOsubscribe']; ?>"></td>
                    <td width="200">
                        <input type="button" class="btn btn-xs  btn-primary xiugai" value="修改" >
                        <input type="button" class="btn btn-xs  btn-primary baocun" value="保存"  style="display: none">
                        <input type="button" class="btn btn-xs btn-danger " value="删除">
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <ul class="pagination">
    </ul>
</div>

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
        $(document).ready(function() {
            $(".xiugai").click(function (e) {
                var btn = e.target;
                var count = $($($(btn).parent().get(0)).siblings(".gai")).length;
                for(var i = 0;i<count;i++){
                    var cbtn =$($($(btn).parent().get(0)).siblings(".gai")).children().get(i);
                    $(cbtn).removeAttr("readonly");
                    $(cbtn).css("border","1px solid rgb(71,145,255)");
                }
                var baocun =$(btn).siblings(".baocun").get(0);
                $(baocun).show();
                $(btn).css("display","none");
            })
            $(".baocun").click(function (e) {
                var btn = e.target;
                var describe = $(btn).parent().prev().children().val();
                var key = $(btn).parent().prev().prev().children().val();
                var title = $(btn).parent().prev().prev().prev().children().val();
                var site = $(btn).parent().prev().prev().prev().prev().val();
                //   alert('de-'+describe + '--ke-'+key+'--t-'+title+'---s--'+site);
                $.get(
                    'admin/index/modify',
                    {
                        site:site,
                        title:title,
                        key : key,
                        describe:describe
                    },
                    function (data) {
                        alert(data);
                    }
                );
                var count = $($($(btn).parent().get(0)).siblings(".gai")).length;
                for(var i = 0;i<count;i++){
                    var cbtn =$($($(btn).parent().get(0)).siblings(".gai")).children().get(i);
                    $(cbtn).attr("readonly","readonly");
                    $(cbtn).css("border","none");
                }
                var xiugai = $(btn).siblings(".xiugai").get(0);
                $(btn).hide();
                $(xiugai).show();
            })
        })
    })(jQuery)
</script>

    
</body>
</html>