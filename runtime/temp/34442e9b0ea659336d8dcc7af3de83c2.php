<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/home/wwwroot/www.nfxhlt.com/public/../application/admin/view/content/edit.html";i:1535617440;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/common.html";i:1534243446;s:70:"/home/wwwroot/www.nfxhlt.com/application/admin/view/common/header.html";i:1534843390;}*/ ?>

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
<script type="text/javascript" src="/static/editor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/editor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static/editor/ueditor.parse.min.js"></script>

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
        
<div class="pageheader notab">
    <h1 class="pagetitle">
        <?php switch($ac): case "newsqiye": ?>企业新闻<?php break; case "newshangye": ?>行业新闻<?php break; case "newsmeiti": ?>媒体报道<?php break; endswitch; ?>
        <small> <?php if($bc == 'gai'): ?>修改<?php else: ?>添加<?php endif; ?></small>
    </h1>
</div>

<div id="contentwrapper" class="contentwrapper">

    <div class="contenttitle2">
        <h3>
            <?php switch($ac): case "newsqiye": ?>企业新闻<?php break; case "newshangye": ?>行业新闻<?php break; case "newsmeiti": ?>媒体报道<?php break; endswitch; ?>
        </h3>
    </div>
    <form method="post" action="admin/content/successedit?ac=<?php echo $ac; ?>&bc=<?php echo $bc; ?>" class="form-horizontal" data-parsley-validate="true" id="myform" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $current['Id']; ?>">
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
        <!--<option data-link = ""-->
        <!--<if condition="#">-->
        <!--selected = "selected"-->
        <!--</if>-->
        <!--value=""></option>-->
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



        <div class="form-group">
            <label class="col-md-3 control-label">新闻标题</label>
            <div class="col-md-9">
                <input type="text" name="title" class="form-control" placeholder="请输入新闻标题" value="<?php echo $current['title']; ?>" required />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">副标题</label>
            <div class="col-md-9">
                <input type="text" name="subtitle" class="form-control" placeholder="请输入副标题" value="<?php echo $current['subtitle']; ?>" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">来源</label>
            <div class="col-md-9">
                <input type="text" name="source" class="form-control" placeholder="请输入来源" value="<?php echo $current['source']; ?>" required />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">作者</label>
            <div class="col-md-9">
                <input type="text" name="writer" class="form-control" placeholder="请输入作者" value="<?php echo $current['writer']; ?>" required />
            </div>
        </div>

        <div class="form-group" style="display: none;">
            <label class="col-md-3 control-label">链接</label>
            <div class="col-md-9">
                <input type="text" name="url" class="form-control" placeholder="请输入链接" value="http://localhost/home/detail/index.html" required />
            </div>
        </div>
        <div class="form-group" style="display: none">
            <label class="col-md-3 control-label">类型</label>
            <div class="col-md-9">
                <select name = "type_id" class="uniformselect" required>
                    <!--<option> - 请选择 - </option>-->
                    <option data-link = "0" value="1">图片 - 无跳转</option>
                    <!--<option data-link = "1" value="2">图片 - 跳转链接</option>-->
                </select>
            </div>
        </div>

        <?php if($ac == 'newsmeiti'): ?>
            <div class="form-group" data-type="1,2">
                <label class="col-md-3 control-label">媒体报道首页展示图</label>
                <div class="col-md-9">
                    <input  name="simg" type="file" accept="image/png, image/jpeg, image/gif, image/jpg" onchange="changepic(this)" required/><br/>
                    <img width="200">
                </div>
            </div>
        <?php else: ?>
        <div class="form-group" data-type="1,2">
            <label class="col-md-3 control-label">新闻略缩图</label>
            <div class="col-md-9">
                <input  name="simg" type="file" accept="image/png, image/jpeg, image/gif, image/jpg" onchange="changepic(this)" required/><br/>
                <img src="/static<?php echo $simg['urlposition']; ?><?php echo $simg['name']; ?>" width="200">
            </div>
        </div>
        <div class="form-group" data-type="1,2">
            <label class="col-md-3 control-label">新闻背景图</label>
            <div class="col-md-9">
                <input  name="bgimg" type="file" accept="image/png, image/jpeg, image/gif, image/jpg" onchange="changepic(this)" required/><br/>
                <img src="/static<?php echo $bgimg['urlposition']; ?><?php echo $bgimg['name']; ?>" width="200">
            </div>
        </div>
        <?php endif; ?>
        <!--<php echo htmlspecialchars_decode();?>-->
        <div class="form-group">
            <label class="col-md-3 control-label">正文</label>
            <div class="col-md-9" >
                <script id="ueditor" name="content" type="text/plain"><?php echo htmlspecialchars_decode($current['content']);?>
                </script>
                <textarea class="hidden" data-id='editor' name="content"><?php echo $current['content']; ?></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-9" style="margin-top: 20px">
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


    
<script>
    (function($){
        $().ready(function () {
            var ue = UE.getEditor('ueditor',{
               'initialFrameWidth':'85%',
                'initialFrameHeight':'20%'
            });

        })
    })(jQuery);
    function changepic(e) {
        var reads= new FileReader();
        var  f=e.files[0];
        reads.readAsDataURL(f);
        var c = e.nextElementSibling.nextElementSibling;
        reads.onload=function (e) {
            c.setAttribute("src",this.result);
        };
    }
</script>

    
</body>
</html>