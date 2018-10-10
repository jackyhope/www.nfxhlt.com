<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/home/wwwroot/www.nfxhlt.com/public/../application/mobile/view/index/index.html";i:1537955755;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/common.html";i:1538205499;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/header.html";i:1536547254;}*/ ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <?php header("Cache-Control: no-cache"); ?>
    <title><?php echo $head['SEOtitle']; ?></title>
    <meta name="keywords" content="<?php echo $head['SEOkeyword']; ?>">
    <meta name="description" content="<?php echo $head['SEOsubscribe']; ?>">
    <script>
        var date = Date.parse(new Date());
        document.write('<link rel="stylesheet" href="/static/mobile/css/<?php echo request()->controller(); ?>.css?v='+date+'"> <link rel="stylesheet" href="/static/mobile/css/common.css?v='+date+'">');
    </script>
    <script src="/static/mobile/js/jquery-1.9.1.min.js"></script>
    <script src="/static/mobile/js/jquery-1.11.1.min.js"></script>
    <script src="/static/mobile/js/<?php echo request()->controller(); ?>.js"></script>
    <script src="/static/mobile/js/common.js"></script>
</head>
<body>
<main>
    <!--侧边栏导航-->
<nav>
    <ul>
        <li><img src="/static/mobile/images/logo.png" alt=""></li>
        <li><a <?php if(request()->controller() == 'Index'): ?>class="licheck"<?php endif; ?> href="<?php echo url('index/index'); ?>">首页</a></li>
        <li><a <?php if(request()->controller() == 'About'): ?>class="licheck"<?php endif; ?> href="<?php echo url('about/index'); ?>">关于我们</a></li>
        <li><a <?php if(request()->controller() == 'Server'): ?>class="licheck"<?php endif; ?> href="<?php echo url('server/index'); ?>">服务保障</a></li>
        <li><a <?php if(request()->controller() == 'News'): ?>class="licheck"<?php elseif(request()->controller() == 'Detail'): ?>class="licheck"<?php else: endif; ?> href="<?php echo url('news/index'); ?>">新闻资讯</a></li>
    </ul>
</nav>

<!--顶部-->
<div class="menu">
    <img class="menulogo" src="/static/mobile/images/logo.png" alt="logo">
    <img class="menubtn" onclick="showmenu()" src="/static/mobile/images/list.png" alt="">
    <a href="tel:13718767011"><img class="menuphone" src="/static/mobile/images/call.png" alt="phoneimg"></a>
</div>
    
<!--顶部图-->
<div class="top-img-div set-h">
    <img class="topimg" src="/static/mobile/images/index/topimg.png" alt="">
    <input type="button" value="了解详情">
</div>
<div class="set-h hy" style="display: flex">
    <div class="tytitle" style="color: #ffffff;">
        行业优势
    </div>
    <div class="yscont">
        <ul>
            <li>600+猎头顾问</li>
            <li>覆盖各大行业</li>
            <li>5000多万人才数据库</li>
            <li>为30000+合作企业提供人才</li>
        </ul>
    </div>
</div>
<div class="set-h hzqy" style="display: flex">
    <div class="tytitle" style="top:3rem">
        合作企业
    </div>
    <div class="qylogo">
        <ul class="qy1">
            <li><img src="/static/mobile/images/index/tianyou.png" alt=""></li>
            <li><img src="/static/mobile/images/index/zhengbang.png" alt=""></li>
            <li><img src="/static/mobile/images/index/yixin.png" alt=""></li>
        </ul>
        <ul class="qy2">
            <li><img src="/static/mobile/images/index/huawei.png" alt=""></li>
            <li><img src="/static/mobile/images/index/minsheng.png" alt=""></li>
            <li><img class="cqyh" src="/static/mobile/images/index/cqyh.png" alt=""></li>
        </ul>
    </div>
</div>
<div class="set-h lttj" style="display: flex">
    <div class="tytitle ttblue" style="top:5rem">
        猎头推荐
    </div>
    <div class="ltimg">
        <ul class="ltlist1">
            <li><img src="/static/mobile/images/index/lt1.png" alt=""></li>
            <li><img src="/static/mobile/images/index/lt3.png" alt=""></li>
            <li><img src="/static/mobile/images/index/lt5.png" alt=""></li>
        </ul>
        <ul class="ltlist2">
            <li><img src="/static/mobile/images/index/lt2.png" alt=""></li>
            <li><img src="/static/mobile/images/index/lt4.png" alt="gb"></li>
            <li><img src="/static/mobile/images/index/llj.png" alt=""></li>
        </ul>
    </div>
</div>
<div class="set-h lc">
    <div class="tytitle">
        八大流程
    </div>
    <div class="lcimg">
        <img src="/static/mobile/images/index/serve.png" alt="">
        <span>需求分析</span>
        <span>限时寻访</span>
        <span>人才测评</span>
        <span>面试推荐</span>
        <span>Offer谈判</span>
        <span>背景调查</span>
        <span>聘后EAP心理辅导</span>
        <span>售后服务与HR活动支持</span>
    </div>
</div>
<div class="set-h mcenter" style="display: flex">
    <div class="tytitle" style="color: white;top:5rem">
        资讯中心
    </div>
    <div class="concenter">
        <ul>
            <?php if(is_array($newsdata) || $newsdata instanceof \think\Collection || $newsdata instanceof \think\Paginator): $i = 0; $__LIST__ = $newsdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li><a href="/mobile/detail/index?name=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <a class="more-a" href="">更多>></a>
</div>
<div class="set-h imgcenter" style="display: flex">
    <div class="tytitle ttblue" style="top:2rem">
        图片中心
    </div>
    <div class="img-c">
        <img src="/static/mobile/images/index/meeting.png" alt="">
        <img src="/static/mobile/images/index/wine.png" alt="">
        <img src="/static/mobile/images/index/awards.png" alt="">
        <img src="/static/mobile/images/index/honor.png" alt="">
        <img src="/static/mobile/images/index/academy.png" alt="">
        <img src="/static/mobile/images/index/train.png" alt="">
    </div>
    <a class="more-a" href="" style="color:#bb565f">更多>></a>
</div>
<!--底部-->
<div class="set-h footer footer-blue">
    <img src="/static/mobile/images/index/tel.png" alt="联系电话">
    <div>
        <span>
            <?php echo $footerdata['个人求职']["titlename"]; ?>：<?php echo $footerdata['个人求职']["titlecontent"]; ?>
        </span>
    </div>
    <div><span><?php echo $footerdata['加入我们']["titlename"]; ?>：<?php echo $footerdata['加入我们']["titlecontent"]; ?></span></div>
    <div><span>总部地址：重庆市沙坪坝区西园北街6号附10号22-1</span></div>
    <div>
        <span>主要服务区域及办公地点：</span>
        <span class="dz-d">北京/上海/深圳/广州/天津/杭州/南京/成都/重庆</span>
    </div>
    <div class="codeimg">
        <img src="/static/mobile/images/sina12.png" alt="">
        <img class="code2" src="/static/mobile/images/2code.png" alt="">
        <a href="tel:13718767011"><img class="callimg" src="/static/mobile/images/white.png" alt=""></a>
        <a  class="callcontent" href="tel:13718767011">联系我们</a>
    </div>
</div>

</main>
</body>
</html>