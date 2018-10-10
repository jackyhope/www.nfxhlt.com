<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"/home/wwwroot/www.nfxhlt.com/public/../application/mobile/view/detail/index.html";i:1538037281;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/common.html";i:1538205499;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/header.html";i:1536547254;}*/ ?>
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
    
<!--详情正文-->
<div class="detail">
    <div class="detail-d">
        <div class="adress">
            <a href="">资讯中心></a>
            <a href="">企业新闻></a>
            <a href="">新闻标题</a>
        </div>
        <div class="news-add">
            <h1 class="news-t"><?php echo $data['0']['title']; ?></h1>
            <h2 class="news-author"><?php echo $data['0']['writer']; ?></h2>
            <h2 class="news-time"><?php echo date( 'Y-m-d',$data['0']['time']); ?></h2>
        </div>
        <div class="news-content">
            <?php echo $data['0']['content']; ?>
        </div>
        <div class="nextorprev">
            <input type="button" class="prev" onclick="porn(this)" alt="<?php echo $data['0']['id']; ?>" value="上一篇">
            <input type="button" class="next" onclick="porn(this)" alt="<?php echo $data['0']['id']; ?>" value="下一篇">
        </div>
    </div>
</div>
<script>
    function porn(data) {
        var done = $(data).attr("class");
        var id = $(data).attr("alt");
        switch (done){
            case "prev":
                $.ajax({
                    url:"done",
                    type:"post",
                    data:{type:"prev",id:id},
                    datatype:"json",
                    error:function () {
                        console.log("未知错误");
                    },
                    success:function (data,status) {
                        if(data=="false"){
                            alert("已经是第一篇新闻了");
                        }else{
                            $(".news-t").html(data['title']);
                            $(".news-author").html(data['writer']);
                            $(".news-time").html(format(data['time']));
                            $(".news-content").html(data['content']);
                            $(".prev").attr("alt",data['Id']);
                            $(".next").attr("alt",data['Id']);
                            window.scrollTo(0,0);
                        }
                    }
                });
                break;
            case "next":
                $.ajax({
                    url:"done",
                    type:"post",
                    data:{type:"next",id:id},
                    datatype:"json",
                    error:function () {
                        console.log("未知错误");
                    },
                    success:function (data,status) {
                        if(data=="false"){
                            alert("已经是最后一篇新闻了");
                        }else{
                            $(".news-t").html(data['title']);
                            $(".news-author").html(data['writer']);
                            $(".news-time").html(format(data['time']));
                            $(".news-content").html(data['content']);
                            $(".prev").attr("alt",data['Id']);
                            $(".next").attr("alt",data['Id']);
                            window.scrollTo(0,0);
                        }
                    }
                })
        }
    }
    function add0(m){return m<10?'0'+m:m }
    function format(timestamp)
    {
        //timestamp是整数，否则要parseInt转换,不会出现少个0的情况
        var time = new Date(timestamp*1000);
        var year = time.getFullYear();
        var month = time.getMonth()+1;
        var date = time.getDate();
        var hours = time.getHours();
        var minutes = time.getMinutes();
        var seconds = time.getSeconds();
        return year+'-'+add0(month)+'-'+add0(date)/*+' '+add0(hours)+':'+add0(minutes)+':'+add0(seconds)*/;
    }
</script>
<!--底部-->
<!--
<div class="set-h footer footer-blue">
    <img src="/static/mobile/images/index/tel.png" alt="联系电话">
    <div>
        <span>个人求职：nfxhlt@qq.com</span>
    </div>
    <div><span>加入我们：jxxhhr@163.com</span></div>
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
-->

</main>
</body>
</html>