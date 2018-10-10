<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"/home/wwwroot/www.nfxhlt.com/public/../application/mobile/view/server/index.html";i:1537930054;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/common.html";i:1538205499;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/header.html";i:1536547254;}*/ ?>
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
    
<!--五大承诺-->
<div class="topdiv set-h">
    <div class="banner">
        <img src="/static/mobile/images/server/headerPic.png" alt="">
    </div>
    <div class="promise">
        <h1 class="title-p">我们向您做出五大承诺</h1>
        <div class="promiselist">
            <span class="p-l-t">商业机密：<span>我方将严守双方合作中涉及到的商业机密，不会向任何第三方泄露相关的商业机密</span></span>
            <span class="p-l-t">人选离职：<span>保用期内由于候选人原因离职，我们将继续免费推荐直到找到可替代人选。</span></span>
            <span class="p-l-t">预付款：<span>签约期间，无人选推荐、推荐人选企业不认可、无人面试、无入职，100%退还预付款。</span></span>
            <span class="p-l-t">人才保护：<span>签约期间，乙方不主动猎取甲方在职人员到其他公司。</span></span>
            <span class="p-l-t">人选质量：<span>细致的职业背景核实、推荐前必面试（电话、 Face To Face ）、背景调查。</span></span>
        </div>
    </div>
</div>
<!--服务-->
<div class="server set-h">
    <div>
        <div>
            <ul class="s-ul-t">
                <li>服务要素</li>
                <li>服务标准</li>
                <li>&nbsp;</li>
            </ul>
            <ul class="s-ul-c">
                <li>服务速度</li>
                <li>
                    24小时推荐人选
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>行业分析</li>
                <li>
                    行业前十及客户公司优劣势
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>职位分析</li>
                <li>
                    客户确认的JD清单
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>猎头匹配</li>
                <li>
                    必须为本行业经验丰富的猎头
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>人才测评</li>
                <li>
                    评测报告符合要求
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>说服人才</li>
                <li>
                    候选人评价满意
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>背景调查</li>
                <li>
                    背景调查报告详尽
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>胜任培训</li>
                <li>
                    提供职位胜任
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>售后服务</li>
                <li>
                    24小时响应客户并提供解决方案
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
            <ul class="s-ul-c">
                <li>猎头+</li>
                <li>
                    HR会员服务
                </li>
                <li><a class="s-tel" href="tel:13718767011"></a></li>
            </ul>
        </div>
    </div>
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