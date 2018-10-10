<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/index/index.html";i:1538129707;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/common.html";i:1538205152;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/header.html";i:1536289120;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/footer.html";i:1537324666;}*/ ?>
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

<div class="banner" >
    <img src='<?php echo $list['banner']; ?>' alt="">
    <!--<input type="button" value="了解详情" onclick="window.open('http://www.huiliewang.com')">-->
<input type="button" value="了解详情" onclick="openchat()">
</div>


<!--猎头顾问推荐-->
<div class="lt">
    <table class="table-style" style="width: auto;margin: 0 auto">
        <tr>
            <td class="lt-1">资深猎头顾问</td>
        </tr>
        <tr>
            <td class="lt-2" style="padding-top: 1rem">
                <span style="display: block;">600多名专家型猎头顾问，覆盖各大行业、经验丰富</span>
                <span style="display: block;">既可精准高效寻访人才，又可提供优质的咨询式猎头服务</span>
                <span style="display: block;">为企业搭建和优化人力资源管理体系</span>
            </td>
        </tr>
    </table>
    <div class="lt-img">
        <table class="img-table">
            <tr>
                <td><div class="ul-jt"><img src="/static/images/fast/left.png" alt="right"></div></td>
                <td class="allltimg">
                    <ul class="img-ul">
                        <?php if(is_array($pic) || $pic instanceof \think\Collection || $pic instanceof \think\Paginator): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="lt-li">
                                <div class="lt-div">
                                    <img src="/static/images/index/<?php echo $vo['name']; ?>" alt="<?php echo $vo['subscribe']; ?>">
                                    <span class="ltname"></span>
                                    <span class="ltdescription"></span>
                                </div>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </td>
                <td><div class="ul-jt"><img src="/static/images/fast/right.png" alt="left"></div></td>
            </tr>
        </table>
    </div>
</div>

    <script>
        //猎头照片轮播
        var c = 0;
        $(document).ready(function () {
            var length = $(".img-ul").children().length;
            for(let i = 0;i < length; i++){
                var alt = $($($(".img-ul").children().children().get(i)).children().get(0)).attr("alt");
                var altarr = new Array();
                altarr = alt.split("/");
                $($($(".img-ul").children().children().get(i)).children().get(1)).html(altarr[0]);
                $($($(".img-ul").children().children().get(i)).children().get(2)).html(altarr[1]);
            }
        });
        $(".ul-jt").on("click",function () {
            if(c == 0){
                c++;
                var length = $(".img-ul").children().length;
                var alt = $(this).children().attr("alt");
                if(alt == "left"){
                    $(".lt-div").addClass("ltimgtoleft");
                    var firstsrc = $($($(".img-ul").children().children().get(0)).children().get(0)).attr("src");
                    var firstalt  = $($($(".img-ul").children().children().get(0)).children().get(0)).attr("alt");
                    setTimeout(function () {
                        for(let i = 0;i < length;i++){
                            if(i<length-1){
                                var nextsrc = $($($(".img-ul").children().children().get(i+1)).children().get(0)).attr("src");
                                var nextalt = $($($(".img-ul").children().children().get(i+1)).children().get(0)).attr("alt");
                                var nextaltarr = nextalt.split("/");
                                $($($(".img-ul").children().children().get(i)).children().get(0)).attr("src",nextsrc);
                                $($($(".img-ul").children().children().get(i)).children().get(0)).attr("alt",nextalt);
                                $($($(".img-ul").children().children().get(i)).children().get(1)).html(nextaltarr[0]);
                                $($($(".img-ul").children().children().get(i)).children().get(2)).html(nextaltarr[1]);
                            }else{
                                $($($(".img-ul").children().children().get(i)).children().get(0)).attr("src",firstsrc);
                                $($($(".img-ul").children().children().get(i)).children().get(0)).attr("alt",firstalt);
                                var firstaltarr =firstalt.split("/");
                                $($($(".img-ul").children().children().get(i)).children().get(1)).html(firstaltarr[0]);
                                $($($(".img-ul").children().children().get(i)).children().get(2)).html(firstaltarr[1]);
                            }
                            $(".lt-div").removeClass("ltimgtoleft");
                        }
                        c = 0;
                    },1000)
                }else if(alt =="right"){
                    $(".lt-div").addClass("ltimgtoright");
                    var lastsrc = $($($(".img-ul").children().children().get(length-1)).children().get(0)).attr("src");
                    var lastalt = $($($(".img-ul").children().children().get(length-1)).children().get(0)).attr("alt");
                    var span1 = $($($(".img-ul").children().children().get(length-1)).children().get(1)).html();
                    var span2 = $($($(".img-ul").children().children().get(length-1)).children().get(2)).html();
                    $($(".img-ul").children().get(0)).before("<li class='lt-li'><div class='lt-div ltimgtoright'><img src="+lastsrc+" alt="+lastalt+"><span>"+span1+"</span><span>"+span2+"</span></div></li>");
                    setTimeout(function () {
                        $(".lt-div").removeClass("ltimgtoright");
                        $($(".img-ul").children().get(length)).remove();
                        c = 0;
                    },1000)
                }
            }
        })
    </script>
<!--猎头顾问推荐-->

<!--服务流程-->
<div class="server">
    <table class="table-style" style="width: auto;margin: 0 auto">
        <tr>
            <td class="lt-1 lt-1-add">服务流程</td>
        </tr>
        <tr>
            <td class="lt-2 lt-2-add" style="padding-top: 1rem">
                <span style="display: block;">8大流程，标准化服务</span>
                <span style="display: block;">最快24小时闪电交付，平均15天招聘到位</span>
                <span style="display: block;">解决您的燃眉之急和后顾之忧</span>
                </td>
        </tr>
    </table>
    <img class="server-img" src="/static/images/index/serve.png" alt="">
    <div class="ser-span">
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
<!--服务流程-->

<!--资讯中心-->
<div class="zx">
    <table class="table-style" style="width: 20rem;margin: 0 auto">
        <tr>
            <td class="lt-1" style="color: white;border-color: white;">资讯中心</td>
        </tr>
    </table>
    <div class="row-news">
        <div class="news-left">
            <span style="color: #333333;"><b>企业新闻</b></span>
            <?php if(is_array($indexhnews) || $indexhnews instanceof \think\Collection || $indexhnews instanceof \think\Paginator): $i = 0; $__LIST__ = $indexhnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <p>
                <a class="news-a"  href="<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['Id']; ?>"><?php echo $vo['title']; ?></a>
                <a href="<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['Id']; ?>" style="float: right;color: #333333;"><?php echo date('Y-m-d',$vo['time']); ?></a>
            </p>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <p><a style="float: right;color: #333333;" href="<?php echo url('home/news/index'); ?>">更多</a></p>
        </div>

        <div class="news-right">
            <span style="color: #333333;"><b>行业资讯</b></span>
            <div><!--灰色空白不可删除--></div>
            <?php if(is_array($indexnews) || $indexnews instanceof \think\Collection || $indexnews instanceof \think\Paginator): $i = 0; $__LIST__ = $indexnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <p>
                <a style="display: inline-block; width: 18rem;word-break: keep-all;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;color: #333333;float:left"  href="<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['Id']; ?>"><?php echo $vo['title']; ?></a>
                <a href="<?php echo url('detail/index'); ?>?newsid=<?php echo $vo['Id']; ?>" style="float: right;color: #333333;"><?php echo date('Y-m-d',$vo['time']); ?></a>
            </p>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <p><a style="float: right;color: #333333;" href="<?php echo url('home/news/index'); ?>">更多</a></p>
        </div>
    </div>
</div>
<!--资讯中心-->

<!--图片中心-->
<div class="imgcenter">
    <table class="table-style" style="width: 20rem; margin: 0 auto">
        <tr>
            <td class="lt-1" style="color:#000000;">图片中心</td>
        </tr>
    </table>
    <table class="img-center">
        <tbody>
        <tr id="img-list-1">
            <td><img onclick="showbig(this)" src="<?php echo $list['pictures1']; ?>" alt=""></td>
            <td><img onclick="showbig(this)" src="<?php echo $list['pictures2']; ?>" alt=""></td>
            <td><img onclick="showbig(this)" src="<?php echo $list['pictures3']; ?>" alt=""></td>
        </tr>
        <tr id="img-list-2">
            <td><img onclick="showbig(this)" src="<?php echo $list['pictures4']; ?>" alt=""></td>
            <td><img onclick="showbig(this)" src="<?php echo $list['pictures5']; ?>" alt=""></td>
            <td><img onclick="showbig(this)" src="<?php echo $list['pictures6']; ?>" alt=""></td>
        </tr>
        </tbody>
    </table>
</div>
<!--图片中心-->

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

<script>
    function ltenter(data) {
        var img =  $($(data).children().get(0));
        var td = $(data);
        var src = img.attr('src');
        var num = td.index();
        var text = $($($($(data).parent()).siblings()).children().get(num)).children('span');
        fadediy(text);
    }
    function fadediy(data) {
        //方式一 为指针进入图片显示内容 指针离开图片就隐藏内容 如果指针移动过快会出现BUG
        /* if(data.css("display")=="none"&&data.css("opacity")=="0.1"){
         var t = 0;
         var timer = setInterval(function () {
         data.css("display","inline-block");
         t = t + 0.1;
         data.css("opacity",t);
         (t>0.9)? window.clearInterval(timer):false;
         },50)
         }
         else if(data.css("display")=="inline-block"&&data.css("opacity")=="1"){
         setTimeout(function () {
         var t = 1;
         var timer = setInterval(function () {
         t = t - 0.1;
         data.css("opacity",t);
         if(t < 0.12){
         window.clearInterval(timer);
         data.css("display","none");
         }
         },50)
         },1000)
         }*/
        //方式二 为指针进入图片显示内容，3秒后自动消失
        if(data.css("opacity")==0){
            var t = 0;
            var timer = setInterval(function () {
                data.css("opacity",t);
                t = t + 0.1;
                /*(t>0.9)?window.clearInterval(timer):false;*/
                if(t>0.9){
                    window.clearInterval(timer);
                    setTimeout(function () {
                        var t = 1;
                        var timer2 = setInterval(function () {
                            data.css("opacity",t);
                            t = t- 0.1;
                            if(t<0){
                                window.clearInterval(timer2);
                                data.css("opacity",0);
                            }
                        },50)
                    },10000)//显示秒数
                }
            },50);
        }
    }
    $(document).ready(function () {
        /* var el = window.document.body;
         window.document.body.onmouseover = function(event){
         el = event.target;//鼠标每经过一个元素，就把该元素赋值给变量el
         console.log('当前鼠标在', el, '元素上');//在控制台中打印该变量
         };*/
    })
</script>

</body>
</html>