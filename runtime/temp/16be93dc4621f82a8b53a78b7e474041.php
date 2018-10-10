<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"/home/wwwroot/www.nfxhlt.com/public/../application/mobile/view/news/index.html";i:1537954164;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/common.html";i:1538205499;s:71:"/home/wwwroot/www.nfxhlt.com/application/mobile/view/public/header.html";i:1536547254;}*/ ?>
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
    
<!--新闻中心-->
<div class="newscenter set-h">
    <div class="banner">
        <img src="/static/mobile/images/news/BG.png" alt="资讯中心banner">
    </div>
    <div class="news">
        <div class="newshead">
            <ul>
                <li onclick="newstype(this)"><h1 class="newscheck">企业新闻</h1></li>
                <li onclick="newstype(this)"><h1>行业资讯</h1></li>
            </ul>
        </div>
        <div class="newslist" onscroll="shownews()">

            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="news-c">
                <!--<a href="<?php echo url('mobile/detail/index',['name'=>$vo['id']]); ?>">-->
                <a href="/mobile/detail/index?name=<?php echo $vo['id']; ?>">
                    <img src="/static/images/news/<?php echo $vo['imgname']['name']; ?>" alt="">
                    <h1>
                        <?php echo $vo['title']; ?>
                    </h1>
                    <span class="newstime">
                        <?php echo date('Y-m-d',$vo['time']); ?>
                    </span>
                    <span class="newscontent">
                        <?php echo $vo['subtitle']; ?>
                    </span>
                </a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
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
        if(li.html()=='企业新闻'){
            $.ajax({
                url:"index",
                type:"post",
                data:{type:1},
                datatype:"json",
                error:function () {
                    console.log("error");
                },
                success:function (data,status) {
                    $(".newslist").children().remove();
                    for(let i = 0;i<data.length;i++){
                        $(".newslist").append("<div class='news-c'> <a href='/mobile/detail/index?name="+data[i]['id']+"'> <img src='/static/images/news/"+data[i]['imgname']['name']+"' alt=''> <h1>"+data[i]["title"]+"</h1> <span class='newstime'>"+format(data[i]["time"])+"</span> <span class='newscontent'>"+data[i]["subtitle"]+"</span> </a> </div>");
                    }
                }
            })
        }else if(li.html()=='行业资讯'){
            $.ajax({
                url:"index",
                type:"post",
                data:{type:2},
                datatype:"json",
                error:function () {
                    console.log("error");
                },
                success:function (data,status) {
                    $(".newslist").children().remove();
                    for(let i = 0;i<data.length;i++){
                        $(".newslist").append("<div class='news-c'> <a href='/mobile/detail/index?name="+data[i]['id']+"'> <img src='/static/images/news/"+data[i]['imgname']['name']+"' alt=''> <h1>"+data[i]["title"]+"</h1> <span class='newstime'>"+format(data[i]["time"])+"</span> <span class='newscontent'>"+data[i]["subtitle"]+"</span> </a> </div>");
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

</main>
</body>
</html>