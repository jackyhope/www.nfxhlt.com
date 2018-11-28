<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php echo $SITE_NAME;  echo lang('admin'); ?></title>
    <link href="<?php echo ADMIN_THEME; ?>luos/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_THEME; ?>luos/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo ADMIN_THEME; ?>luos/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_THEME; ?>luos/css/style.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_THEME; ?>luos/css/login.min.css" rel="stylesheet">

    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
    <script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#user").focus();
        });
    </script>
</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>遥阳科技YYCMS营销版管理系统</h1>
                </div>
                <div class="m-b"></div>
                <h4>重遥阳科技有限公司技术部</h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 方便快速</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 效率极高</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 安全稳定</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" action="">
                <h4 class="no-margins">后台登录</h4>
                <input type="text" class="form-control uname" id="user" name="username" placeholder="用户名" />
                <input type="password" class="form-control pword m-b" name="password" placeholder="密码" />
                <a href="<?php echo SITE_URL; ?>" target="_blank">访问前台</a>
                <button id="submit" name="submit"  class="btn btn-success btn-block"><?php echo lang('a-login'); ?></button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; <?php echo date('Y'); ?> 遥阳科技YYCMS营销版管理系统
        </div>
    </div>
</div>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:52 GMT -->
</html>
