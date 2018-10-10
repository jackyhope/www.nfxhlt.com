<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/news/index.html";i:1536215634;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/common.html";i:1538205152;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/header.html";i:1536289120;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/footer.html";i:1537324666;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php header("Cache-Control: no-cache"); ?>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta content="MSHTML 6.00.6000.16939" name="Generator"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="description" content="<?php echo $describtion; ?>">
    <script>
        var date = Date.parse(new Date());
        document.write('<link rel="stylesheet" href="/static/css/common.css?v='+date+'"> <link rel="stylesheet" href="/static/css/<?php echo request()->controller(); ?>.css?v='+date+'">');
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?79ab35463c1911c1ad2322e50d0efda1";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<script src="/static/js/jquery-1.9.1.min.js"></script>
<script src="/static/js/style.js"></script>
<?php if($cName == 'About'): ?>
    <script src="/static/js/jquery-1.11.1.min.js"></script>
    <script src="/static/js/echarts.min.js"></script>
    <script src="/static/js/china.js"></script>
<?php endif; ?>
<script>
    $(document).ready(function () {
        if (!!window.ActiveXObject || "ActiveXObject" in window)
        {
            $("head").append("<link rel='stylesheet' href='/static/css/commonforie.css'>");
        }
        else
        {
            <?php switch($cName): case "Index": ?>setDisplay('zx/imgcenter/footer');<?php break; case "About": ?>setDisplay('creator/mtbd/map/culture/footer');<?php break; endswitch; ?>
        }
        <?php if($cName == 'Index'): ?>
        var count = $("#ltimg").children().length;
        var img = $("#ltimg").children();
        var namearr = new Array();
        var altarr = new Array();
        //获取IMGName集合，获取IMG对应文字集合
        for(var i = 0; i<count; i++){
            var src = $(img.get(i)).attr("src").split("/");
            var srcc = src.length;
            src = src[srcc-1];
            var alt = $(img.get(i)).attr("alt").split("/");
            /* var altlength = alt.length;
             alt.push(altlength);*/
            namearr.push(src);
            altarr.push(alt);
        }
        var src = "/static/images/index/";
        var img = new Array();
        var srcarr = new Array();
        //var spanobj = new Array();
        for(var i = 0;i <count;i++){
            var obj = $($($((i%2)?'.showlt2':'.showlt1').children().get(i)).children().get(0));
            var objtd = $($((i%2)?'.showlt1':'.showlt2').children().get(i));
            var objspan = new Array();
                for(var j = 0; j<altarr[i].length; j++){
                    var span = document.createElement("span");
                    span.className = "ltdetail";
                    span.innerHTML = altarr[i][j];
                    objtd.append(span);
                   /* var osp = $($($((i%2)?'.showlt1':'.showlt2').children().get(i)).children("span").get(j));
                    objspan.push(osp);*/
                }
            var sr = src+namearr[i];
            srcarr.push(sr);
            img.push(obj);
            img[i].attr("src",srcarr[i]);
            //spanobj.push(objspan);
        }
        var b = 0;
        if(count>5){
            var timer = setInterval(function () {
                for(var i = 0; i<count;i++){
                    srcarr[i] = src+namearr[(b+1+i>=count)?(b+1+i)%count:b+1+i];
                }
                setTimeout(function () {
                    for(var i = 0;i<count;i++){
                        img[i].fadeOut();
                        $(".ledetail").fadeOut;
                        $(".ltdetail").remove();
                    }
                    setTimeout(function () {
                        for(var i = 0; i<count;i++){
                            img[i].attr("src",srcarr[i]);
                            var objtd = $($((i%2)?'.showlt1':'.showlt2').children().get(i));
                            var objspan = new Array();
                            for(var j = 0; j<altarr[(b+i>=count)?(b+i)%count:b+i].length; j++){
                                var span = document.createElement("span");
                                span.className = "ltdetail";
                                span.innerHTML = altarr[(b+i>=count)?(b+i)%count:b+i][j];
                                objtd.append(span);
                            }
                        }
                        for(var i = 0; i<count;i++){
                            img[i].fadeIn();
                        }

                    },500);
                },500);
                b++;
            },10000);
        }
        $(".ser-span > span").mouseover(function (data) {
            $(data).attr("class");
        });

        <?php endif; ?>
    })
	function openchat(){
	window.open("http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%229283946%22%2C%22userId%22%3A%2221244431%22%2C%22pageId%22%3A0%7D","","width=800,height=700");	
}
</script>
<body onscroll="
    <?php switch($cName): case "Index": ?>Shower('server/zx/imgcenter/footer','2000')<?php break; case "About": ?>Shower('creator/mtbd/map/culture/footer','2000')<?php break; case "Detail": ?>Shower('foot-div','2000')<?php break; case "Server": ?>navshow()<?php break; case "News": ?>navshow()<?php break; endswitch; ?>
">

<div class="nav">
    <div>
        <img class="logo" src="/static/images/logo.png" alt="">
    </div>
    <div>
        <ul>
            <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('fast/index'); ?>">极速猎头服务</a></li>
            <li><a href="<?php echo url('about/index'); ?>">关于我们</a></li>
            <li><a href="<?php echo url('server/index'); ?>">服务保障</a></li>
            <li><a href="<?php echo url('news/index'); ?>">资讯中心</a></li>
            <li>
                <span class="nav-tel">13718767011</span>
            </li>
        </ul>
    </div>
</div>

<!--banner-->
<div class="top-banner">
    <img src="../../<?php echo $list; ?>" alt="">
   <ul class="info-title">
       <li>Information Center</li>
       <li>资讯中心</li>
   </ul>
</div>
<!--banner-->



<!--中间新闻板块-->
<div class="window">
    <div class="row-news">
        <div id="cdiv">

        </div>

        <div>
            <span>新闻详情</span>
            <div><!--灰色空白--></div>
            <?php if(is_array($cnewsD) || $cnewsD instanceof \think\Collection || $cnewsD instanceof \think\Paginator): $i = 0; $__LIST__ = $cnewsD;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <p><a href="javascript:void(0);" onclick="window.open('<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['Id']; ?>')" ><?php echo $vo['title']; ?></a></p>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="row-news">
        <div id="idiv">

          </div>
        <div>
            <span>资讯详情</span>
            <div><!--灰色空白--></div>
            <?php if(is_array($inewsD) || $inewsD instanceof \think\Collection || $inewsD instanceof \think\Paginator): $i = 0; $__LIST__ = $inewsD;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <p><a href="javascript:void(0);" onclick="window.open('<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['Id']; ?>')" ><?php echo $vo['title']; ?></a></p>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<!--中间新闻板块-->

</body>
<script type="text/javascript">
    function flex(pageNum) {
        $.get(
          'show/news',
          {pageNumC:pageNum},
          function (data) {
              $("#cdiv").html(data);
          }
        );
    }
    function iflex(pageNum){
        $.get(
            'ishow/news',
            {pageNumI:pageNum},
            function (data) {
                $("#idiv").html(data);
            }
        );
    }
</script>
<script>
    function  tonews(data) {
        window.open(data.alt);
    }
    //异步刷新技术
    //****************************企业新闻部分************************
    $(document).ready(function () {
        $.get(
            'show/news',
            function (data) {
                $("#cdiv").html(data);
            }
        );
        $.get(
            'ishow/news',
            function (data) {
                $("#idiv").html(data);
            }
        );
    });
</script>

<!--网站地图-->
<div class="webmap" style="background-color: #ffffff;height: 3rem;width: 100rem">
    <a class="webmapa" href="<?php echo url('home/index/index'); ?>">首页</a>
   <div class="webmapl">   </div>
    <a class="webmapa" href="<?php echo url('home/fast/index'); ?>"> 极速猎头服务</a>
    <div class="webmapl">   </div>
    <a class="webmapa" href="<?php echo url('home/about/index'); ?>">关于我们</a>
    <div class="webmapl">   </div>
    <a class="webmapa" href="<?php echo url('home/server/index'); ?>">服务保障</a>
    <div class="webmapl">   </div>
    <a class="webmapa" href="<?php echo url('home/news/index'); ?>" style="border: none;">资讯中心</a>
</div>
<!--footer-->
<div class="footer">
    <div class="footer-img">
        <!--<img src="/static/images/index/tel.png" alt="">-->
    </div>
    <div class="footer-text" style="position:relative">
        <span class="jltd"></span>
        <span>总部地址：</span>
        <span>主要服务区域以及办公地点：</span>
        <input type="button" onclick="openchat()" value="免费咨询">
        <span>友情链接：
             <?php if(is_array($url) || $url instanceof \think\Collection || $url instanceof \think\Paginator): $i = 0; $__LIST__ = $url;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:void(0);" onclick="window.open('<?php echo $vo['url']; ?>')"><?php echo $vo['name']; ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
            </span>
        <span class="grqz">个人求职：<?php echo $footer['jobemail']; ?></span>
        <span class="jrwm">加入我们：<?php echo $footer['joinus']; ?></span>
        <span class="dz"><?php echo $footer['address']; ?></span>
        <span class="zbdz">重庆市沙坪坝区西园北街6号附10号22-1</span>
    </div>
    <div class="footer-2code">
        <div><img src="/static<?php echo $wechat['urlposition']; ?><?php echo $wechat['name']; ?>" alt=""><span>官方微博</span></div>
        <div><img src="/static<?php echo $qq['urlposition']; ?><?php echo $qq['name']; ?>" alt=""><span>官方微信</span></div>
    </div>
</div>
<script>
    //网站地图隐藏右竖条
$(document).ready(function () {
    $(".webmapa").on("mouseover",function () {
        var next = $(this).next().attr("class");
        var prev = $(this).prev().attr("class");
        if(next){
            $(this).next().css("background-color","#ffffff");
            if(prev){
                $(this).prev().css("background-color","#ffffff");
            }
        }
    });
    $(".webmapa").on("mouseout",function () {
        var next = $(this).next().attr("class");
        var prev = $(this).prev().attr("class");
        if(next){
            $(this).next().css("background-color","#bb565f")
            if(prev){
                $(this).prev().css("background-color","#bb565f");
            }
        }
    })
})
</script>

</body>
</html>