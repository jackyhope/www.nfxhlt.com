<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/home/wwwroot/www.nfxhlt.com/public/../application/admin/view/login/index.html";i:1534243447;}*/ ?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>登录页面</title>
    <base href="/">
    <link rel="stylesheet" href="/static/css/admin/style.default.css" type="text/css" />
    <script type="text/javascript" src="/static/js/admin/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="/static/js/admin/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="/static/js/admin/jquery.cookie.js"></script>
    <script type="text/javascript" src="/static/js/admin/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="/static/js/admin/general.js"></script>
    <script type="text/javascript" src="/static/js/admin/index.js"></script>
    <!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="/static/css/admin/style.ie9.css"/>
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="/static/css/admin/style.ie8.css"/>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="/static/js/admin/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body class="loginpage">
<div class="loginbox">
    <div class="loginboxinner">

        <div class="logo">
            <h1 class="logo">南方新华
                <!--<span>多豆科技</span>-->
            </h1>
            <span class="slogan">后台管理系统</span>
            <!--logo-->
        </div>
        <br clear="all" /><br />

        <div class="nousername" style="border: solid red 1px;">
            <div class="loginmsg"></div>
            <!--nousername-->
        </div>
        <div class="nopassword">
            <div class="loginmsg">密码不正确.</div>
            <div class="loginf">
                <div class="thumb"><img alt="" src="/static/images/thumbs/avatar1.png" /></div>
                <div class="userlogged">
                    <h4></h4>
                    <a href="index.html">Not <span></span>?</a>
                </div>
                <!--loginf-->
            </div>
            <!--nopassword-->
        </div>
        <form id="login" action="admin/login/index2" method="post">

            <div class="username">
                <div class="usernameinner">
                    <input type="text" name="account" id="username" />
                </div>
            </div>

            <div class="password">
                <div class="passwordinner">
                    <input type="password" name="password" id="password" />
                </div>
            </div>
            <button class="loginbtn">登录</button>
        </form>
        <div><font color="red"><?php echo $error; ?></font></div>
    </div>
    <!--loginboxinner-->
</div>
<!--loginbox-->

</div>
</body>
</html>
