<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/index/mobileindex.html";i:1535684588;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <title>首页</title>
    <link rel="stylesheet" href="/static/mobilecss/index.css">
    <link rel="stylesheet" href="/static/mobilecss/common.css">
    <script type="text/javascript" src="/static/mobilejs/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/static/mobilejs/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/mobilejs/common.js"></script>
</head>
<body onscroll="setdivheight('top-img-div,hy,hzqy,lttj,lc,mcenter,imgcenter,footer')">
<main>
    <!--侧边栏导航-->
   <nav>
        <ul>
            <li><img src="/static/mobileimages/logo.png" alt=""></li>
            <li><a class="licheck" href="<?php echo url('index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('about/index'); ?>">关于我们</a></li>
            <li><a href="<?php echo url('server/index'); ?>">服务保障</a></li>
            <li><a href="<?php echo url('news/index'); ?>">新闻资讯</a></li>
        </ul>
    </nav>

    <!--顶部-->
    <div class="menu">
        <img class="menulogo" src="/static/mobileimages/logo.png" alt="">
        <img class="menubtn" onclick="showmenu()" src="/static/mobileimages/list.png" alt="">
        <a href="tel:13718767011"><img class="menuphone" src="/static/mobileimages/call.png" alt="phoneimg"></a>
    </div>

    <!--顶部图-->
    <div class="top-img-div set-h">
        <img class="topimg" src="/static/mobileimages/index/topimg.png" alt="">
        <input type="button" value="了解详情">
    </div>
    <div class="set-h hy">
        <div class="tytitle">
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
    <div class="set-h hzqy">
        <div class="tytitle">
            合作企业
        </div>
        <div class="qylogo">
            <ul class="qy1">
                <li><img src="/static/mobileimages/index/tianyou.png" alt=""></li>
                <li><img src="/static/mobileimages/index/zhengbang.png" alt=""></li>
                <li><img src="/static/mobileimages/index/yixin.png" alt=""></li>
            </ul>
            <ul class="qy2">
                <li><img src="/static/mobileimages/index/huawei.png" alt=""></li>
                <li><img src="/static/mobileimages/index/minsheng.png" alt=""></li>
                <li><img class="cqyh" src="/static/mobileimages/index/cqyh.png" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="set-h lttj">
        <div class="tytitle ttblue">
            猎头推荐
        </div>
        <div class="ltimg">
            <ul class="ltlist1">
                <li><img src="/static/mobileimages/index/lt1.png" alt=""></li>
                <li><img src="/static/mobileimages/index/lt2.png" alt=""></li>
                <li><img src="/static/mobileimages/index/lt3.png" alt=""></li>
            </ul>
            <ul class="ltlist2">
                <li><img src="/static/mobileimages/index/lt4.png" alt=""></li>
                <li><img src="/static/mobileimages/index/lt5.png" alt=""></li>
                <li><img src="/static/mobileimages/index/llj.png" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="set-h lc">
        <div class="tytitle">
            八大流程
        </div>
        <div class="lcimg">
            <img src="/static/mobileimages/index/serve.png" alt="">
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
    <div class="set-h mcenter">
        <div class="tytitle">
            资讯中心
        </div>
        <div class="concenter">
            <ul>
                <li><a href="#">猎头顾问为什么要遵守保密原则?</a></li>
                <li><a href="#">你眼中的猎头顾问，要具备哪些特质？</a></li>
                <li><a href="#">猎头公司如何收费？猎头公司招聘如何收取佣金？</a></li>
                <li><a href="#">猎头与客户的沟通重要性价值千万？</a></li>
            </ul>
        </div>
        <a class="more-a" href="">更多>></a>
    </div>
    <div class="set-h imgcenter">
        <div class="tytitle ttblue">
            图片中心
        </div>
        <div class="img-c">
            <img src="/static/mobileimages/index/meeting.png" alt="">
            <img src="/static/mobileimages/index/wine.png" alt="">
            <img src="/static/mobileimages/index/awards.png" alt="">
            <img src="/static/mobileimages/index/honor.png" alt="">
            <img src="/static/mobileimages/index/academy.png" alt="">
            <img src="/static/mobileimages/index/train.png" alt="">
        </div>
        <a class="more-a" href="" style="color:#2997fd">更多>></a>
    </div>
    <!--底部-->
    <div class="set-h footer footer-blue">
        <img src="/static/mobileimages/index/tel.png" alt="联系电话">
         <div>
            <span>个人求职：nfxhlt@qq.com</span>
        </div>
        <div><span>加入我们：jxxhhr@163.com</span></div>
        <div><span>总部地址：重庆市沙坪坝区西园北街6号附10号22-1</span></div>
        <div>
            <span>主要服务区域及办公地点：</span>
            <span class="dz-d">北京/上海/深圳/广州/天津/杭州/南京/成都/重庆</span>
        </div>        <div class="codeimg">
            <img src="/static/mobileimages/sina12.png" alt="">
            <img class="code2" src="/static/mobileimages/2code.png" alt="">
            <a href="tel:13718767011"><img class="callimg" src="/static/mobileimages/white.png" alt=""></a>
            <a  class="callcontent" href="tel:13718767011">联系我们</a>
        </div>
    </div>
</main>
<script type="text/javascript" src="/static/mobilejs/index.js"></script>
</body>
</html>