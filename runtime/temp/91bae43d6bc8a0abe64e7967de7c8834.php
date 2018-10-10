<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/news/news.html";i:1535612260;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <title>资讯中心</title>
    <link rel="stylesheet" href="/static/mobilecss/news.css">
    <link rel="stylesheet" href="/static/mobilecss/common.css">
    <script type="text/javascript" src="/static/mobilejs/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/static/mobilejs/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/mobilejs/common.js"></script>
</head>
<body>
    <main>
        <!--侧边栏导航-->
        <nav>
            <ul>
                <li><img src="/static/mobileimages/logo.png" alt=""></li>
                <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                <li><a href="<?php echo url('about/index'); ?>">关于我们</a></li>
                <li><a href="<?php echo url('server/index'); ?>">服务保障</a></li>
                <li><a class="licheck" href="<?php echo url('news/index'); ?>">新闻资讯</a></li>
            </ul>
        </nav>
        <!--顶部-->
        <div class="menu">
            <img class="menulogo" src="/static/mobileimages/logo.png" alt="">
            <img class="menubtn" onclick="showmenu()" src="/static/mobileimages/list.png" alt="">
            <a href="tel:13718767011"><img class="menuphone" src="/static/mobileimages/call.png" alt=""></a>
        </div>
        <!--新闻中心-->
        <div class="newscenter set-h">
            <div class="banner">
                <img src="/static/mobileimages/news/BG.png" alt="资讯中心banner">
            </div>
            <div class="news">
                <div class="newshead">
                    <ul>
                        <li onclick="newstype(this)"><h1 class="newscheck">企业新闻</h1></li>
                        <li onclick="newstype(this)"><h1>行业资讯</h1></li>
                    </ul>
                </div>
                <div class="newslist" onscroll="shownews()">
                    <?php if(is_array($cnewsM) || $cnewsM instanceof \think\Collection || $cnewsM instanceof \think\Paginator): $i = 0; $__LIST__ = $cnewsM;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="news-c">
                            <a href="<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['nid']; ?>">
                                <img src="/static/<?php echo $vo['urlposition']; ?>/<?php echo $vo['name']; ?>">
                                <h1><?php echo $vo['title']; ?></h1>
                                <span class="newstime"><?php echo date('Y-m-d',$vo['time']); ?></span>
                            </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                    <!--<div class="news-c">-->
                        <!--<a href="detail.html">-->
                            <!--<img src="/static/mobileimages/news/bluebg.png" alt="">-->
                            <!--<h1>-->
                                <!--新闻名称-->
                            <!--</h1>-->
                            <!--<span class="newstime">-->
                            <!--2018/08/08-->
                            <!--</span>-->
                            <!--<span class="newscontent">-->
                                <!--内容内容内内内容内内内容内容内内内容内内-->
                            <!--</span>-->
                        <!--</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="/static/mobilejs/news.js"></script>
    <script type="text/javascript">
        function  shownews() {
            var banner = $(".banner");
            var news = $(".news");
            var navh = $(".menu").height();
            var top = news.offset().top;
            banner.addClass("b-h");
            news.addClass("n-s");
        }
        function newstype(data) {
            var li = $($(data).children());
            $(".newscheck").removeClass('newscheck');
            li.addClass("newscheck");
        }
    </script>
</body>
</html>