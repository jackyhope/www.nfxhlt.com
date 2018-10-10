<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/detail/detail.html";i:1535612150;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <title>详情页</title>
    <link rel="stylesheet" href="/static/mobilecss/detail.css">
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
        <!--详情正文-->
        <div class="detail">
            <div class="detail-d">
                <div class="adress">
                    <a href="">资讯中心></a>
                    <a href="">企业新闻></a>
                    <a href="">新闻标题</a>
                </div>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="news-add">
                    <h1 class="news-t"><?php echo $vo['title']; ?></h1>
                    <h2 class="news-author">作者:<?php echo $vo['writer']; ?></h2>
                    <h2 class="news-time"><?php echo date('Y-m-d',$vo['time1']); ?></h2>
                </div>
                <div class="news-content">
                        <?php echo $vo['content']; ?>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="nextorprev">
                    <input type="button" class="prev" value="上一篇">
                    <input type="button" class="next" value="下一篇">
                </div>
            </div>
        </div>
    </main>
    <script src="/static/mobilejs/detail.js"></script>
</body>
</html>