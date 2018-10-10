<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/fast/index.html";i:1536302734;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/common.html";i:1538205152;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/header.html";i:1536289120;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/footer.html";i:1537324666;}*/ ?>
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

<div class="banner" style="height: 64.5rem">
    <img src='/static/images/fast/BANNER.png' alt="极速猎头">
    <div class="banneradd">
        <img src="/static/images/fast/company.png" alt="急速猎头">
        <div class="bannerbottom">
            <h1 class="company-name">南方新华</h1>
            <span class="company-detail">
                大型管理咨询型高端猎头机构，总部设于重庆，拥有600多名猎头及高级咨询师。专注于为企业提供人力资源咨询、猎头服务、人才测评、员工帮助计划（EAP服务）等一流的人力资源服务。
            </span>
            <input type="button" class="rightnow red-zp" onclick="openchat()" value="我要招聘">
        </div>
    </div>
</div>


<div class="serviceys">
    <h1 class="h1-title ys-title">服务优势</h1>
    <div class="ys-content">
        <div class="ys-img-1">
            <img src="/static/images/fast/hours.png" alt="南方新华极速猎头+">
            <div class="text-div">
                <span>南方新华极速猎头+</span>
                <span>24小时极速交付</span>
                <span>平均15天招聘到位</span>
            </div>
        </div>
        <div class="ys-img-2">
            <img src="/static/images/fast/hunter.png" alt="600+猎头顾问">
            <div class="text-div">
                <span>600+猎头顾问</span>
                <span>50000000联合人才数据库</span>
                <span>3万企业共同选择</span>
            </div>
        </div>
        <div class="ys-img-3">
            <img src="/static/images/fast/enterprise.png" alt="企业人力资源管理咨询服务专家">
            <div class="text-div">
                <span>企业人力资源管理咨询服务专家</span>
                <span>提升HR自身能力</span>
                <span>为企业打造人力资源体系</span>
            </div>
        </div>
    </div>
</div>
<div class="product">
    <h1 class="h1-title">服务产品</h1>
    <div class="fa">
        <div class="fa-ch">
            <div class="ch-btn" onclick="rbtnin(this)">
            <span class="icon add-1-r add-1-w" style="color: #ffffff;text-indent: -1rem">
                专业猎头服务
            </span>
            </div>
            <div class="ch-btn" onclick="rbtnin(this)">
            <span class="icon add-2-r">
                慧简历
            </span>
            </div>
            <div class="ch-btn" onclick="rbtnin(this)">
            <span class="icon add-3-r">
                慧面试
            </span>
            </div>
            <div class="ch-btn" onclick="rbtnin(this)">
            <span class="icon add-4-r">
                慧入职
            </span>
            </div>
            <div class="ch-btn" onclick="rbtnin(this)">
            <span class="icon add-5-r">
                大渔招
            </span>
            </div>
            <div class="overflowbtn">
            </div>
            <div class="zy">
                <div class="zy-change">
                    <div id="t-div">
                     <span id="zy-title" class="zy-title icon-lt">
                        专业猎头服务
                    </span>
                        <span class="zy-ftitle">
                        提供入职保障服务
                    </span>
                    </div>
                    <div class="zy-content">
                        <div id="zyc">
                            <span>1.职位调研：HR提出招聘需求点</span>
                            <span>2.搜索简历：猎头按要求搜索简历，沟通候选人意向</span>
                            <span>3.推荐简历：推荐符合条件的候选人简历</span>
                            <span>4.委托邀约：HR委托猎头邀约候选人</span>
                            <span>5.邀约面试：邀约候选人面试</span>
                            <span>6.通过入职：跟进面试结果，通过面试人选入职</span>
                            <span>7.入职管理：提供入职保障服务</span>
                        </div>
                    </div>
                </div>
                <input class="rightnow" type="button" value="立即咨询" onclick="openchat()">
            </div>
        </div>
    </div>
</div>
<div class="lc-8">
    <h1 class="h1-title">八大流程</h1>
    <div class="lc-detail">
        <p>8大流程，标准化服务</p>
        <p>闪电响应速度</p>
        <p>精准人才评估和推荐体系</p>
        <a href="<?php echo url('home/server/index'); ?>">>5大承诺保障<</a>
        <div class="all-lc">
            <ul>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/need.png" style="width: 3.125rem;height: 3.125rem;" alt="需求分析">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【需求分析】</h2>
                            <p>1小时内</p>
                            <p>3人组寻访</p>
                        </div>
                    </div>
                    <div class="jt">
                        <img class="jt-r" src="/static/images/fast/right.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/time.png" style="width: 3.125rem;height: 3.125rem;" alt="限时寻访">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【限时寻访】</h2>
                            <p>2小时内</p>
                            <p>项目组寻访</p>
                        </div>
                    </div>
                    <div class="jt">
                        <img class="jt-r" src="/static/images/fast/right.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/test.png" style="width: 3.125rem;height: 3.125rem;" alt="人才测评">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【人才测评】</h2>
                            <p>主管+客观工具</p>
                            <p>科学测评 </p>
                        </div>
                    </div>
                    <div class="jt">
                        <img class="jt-r" src="/static/images/fast/right.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/meet.png" style="width: 3.125rem;height: 3.125rem;" alt="面试推荐">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【面试推荐】</h2>
                            <p>&nbsp;</p>
                            <p>24小时内推荐 </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="all-lc">
            <ul>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/HR.png" style="width: 2.9167rem;height: 3.125rem;" alt="售后服务与HR活动支持">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【售后服务与HR活动支持】</h2>
                            <p>满意度调查</p>
                            <p>丰富线上活动</p>
                        </div>
                    </div>
                    <div class="jt">
                        <img class="jt-r" src="/static/images/fast/left.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/heart.png" style="width: 3.125rem;height: 2.9167rem;" alt="聘后EAP心理辅导">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【聘后EAP心理辅导】</h2>
                            <p>服务+辅导</p>
                            <p>完整评估体系</p>
                        </div>
                    </div>
                    <div class="jt">
                        <img class="jt-r" src="/static/images/fast/left.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/check.png" style="width: 2.6042rem;height: 3.2292rem;" alt="背景调查">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【背景调查】</h2>
                            <p>细致的职业背景核实</p>
                            <p>推荐前必面试</p>
                        </div>
                    </div>
                    <div class="jt">
                        <img class="jt-r" src="/static/images/fast/left.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="lc-img-d">
                        <img src="/static/images/fast/offer.png" style="width: 3.125rem;height: 3.125rem;" alt="Offer谈判">
                    </div>
                    <div class="lc-dd">
                        <div>
                            <h2 class="lc-title">【Offer谈判】</h2>
                            <p>从面试到offer</p>
                            <p>全程跟进</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <img class="jt-down" src="/static/images/fast/down.png" alt="">
    </div>
</div>

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
    function rbtnin(data) {
        var movebtn = $(".overflowbtn");
        var fa = $(".fa-ch");
        var count = $(data).index();
        var ftitle = $(".zy-ftitle");
        var title = $("#zy-title");
        var length = fa.children().length-2;
        setTimeout(function () {
            $("#zyc").empty();
            ftitle.removeAttr("style");
            $("#t-div").removeAttr("style");
        },400);
        $(".zy-change").fadeToggle();
        for(let i = 0;i<length;i++){
            fa.children().eq(i).removeAttr("onclick");
        }
        switch(movebtn.css("top")){
            case fa.children().eq(0).css("top"):
                fa.children().eq(0).children().eq(0).css("color","#333333");
                fa.children().eq(0).children().eq(0).removeClass("add-1-w");
                break;
            case fa.children().eq(1).css("top"):
                fa.children().eq(1).children().eq(0).css("color","#333333");
                fa.children().eq(1).children().eq(0).removeClass("add-2-w");
                break;
            case fa.children().eq(2).css("top"):
                fa.children().eq(2).children().eq(0).css("color","#333333");
                fa.children().eq(2).children().eq(0).removeClass("add-3-w");
                break;
            case fa.children().eq(3).css("top"):
                fa.children().eq(3).children().eq(0).css("color","#333333");
                fa.children().eq(3).children().eq(0).removeClass("add-4-w");
                break;
            case fa.children().eq(4).css("top"):
                fa.children().eq(4).children().eq(0).css("color","#333333");
                fa.children().eq(4).children().eq(0).removeClass("add-5-w");
                break;
            default:
                break;
        }
        var objspan = $(data).children();
        var top = $(data).css('top');
        objspan.css("color","#ffffff");
        fa.children().eq(count).children().eq(0).addClass("add-"+(count+1)+"-w");
        movebtn.animate({top:top},"300");
        setTimeout(function () {
            for(let i = 0;i<length;i++){
                fa.children().eq(i).attr("onclick","rbtnin(this)");
            }
            $(data).removeAttr("onclick");
            title.text(objspan.text());
            title.removeClass();
            switch (objspan.text().trim()){
                case "专业猎头服务":
                    ftitle.text("提供入职保障服务");
                    $("#zyc").append("<span>1.职位调研：HR提出招聘需求点</span>",
                        "<span>2.搜索简历：猎头按要求搜索简历，沟通候选人意向</span>",
                        "<span>3.推荐简历：推荐符合条件的候选人简历</span>",
                        "<span>4.委托邀约：HR委托猎头邀约候选人</span>",
                        "<span>5.邀约面试：邀约候选人面试</span>",
                        "<span>6.通过入职：跟进面试结果，通过面试人选入职</span>",
                        "<span>7.入职管理：提供入职保障服务</span>");
                    title.addClass("zy-title icon-lt");
                    break;
                case "慧简历":
                    ftitle.text("提供简历服务");
                    ftitle.css({"font-size":"1.3021rem","letter-spacing":"0"});
                    title.addClass("zy-title icon-jl");
                    $("#t-div").css({"position":"relative","left":"-4rem"});
                    $("#zyc").append("<span>1.职位调研：HR提出招聘需求点</span>",
                        "<span>2.搜索简历：猎头按要求搜索简历渠道</span>",
                        "<span>3.提供简历：提供符合要求的简历</span>",
                        "<span>4.挑选简历：HR挑选简历，猎头沟通意向</span>",
                        "<span>5.反馈意向：猎头向HR反馈候选人意向</span>");
                    break;
                case "慧面试":
                    ftitle.text("提供面试服务");
                    ftitle.css({"font-size":"1.3021rem","letter-spacing":"0"});
                    title.addClass("zy-title icon-ms");
                    $("#t-div").css({"position":"relative","left":"-4rem"});
                    $("#zyc").append("<span>1.职位调研：HR提出招聘需求点</span>",
                        "<span>2.搜索简历：猎头按要求搜索简历，沟通候选人意向</span>",
                        "<span>3.推荐简历：推荐符合条件的候选人简历</span>",
                        "<span>4.委托邀约：HR委托猎头邀约候选人</span>",
                        "<span>5.邀约面试：邀约候选人面试</span>");
                    break;
                case "慧入职":
                    ftitle.text("提供入职服务");
                    ftitle.css({"font-size":"1.3021rem","letter-spacing":"0"});
                    title.addClass("zy-title icon-rz");
                    var text1 = "<span>1.职位调研：HR提出招聘需求点</span>";
                    var text2 = "<span>2.搜索简历：猎头按要求搜索简历，沟通候选人意向</span>";
                    var text3 = "<span>3.推荐简历：推荐符合条件的候选人简历</span>";
                    var text4 = "<span>4.委托邀约：HR委托猎头邀约候选人</span>";
                    var text5 = "<span>5.邀约面试：邀约候选人面试</span>";
                    var text6 ="<span>6.通过入职：跟进面试结果，通过面试人选入职</span>"
                    $("#zyc").append(text1,text2,text3,text4,text5,text6);
                    break;
                case "大渔招":
                    ftitle.text("提供整套人力资源服务");
                    ftitle.css({"font-size":"0.78125rem","letter-spacing":"0"});
                    title.addClass("zy-title icon-dyz");
                    var text1="<span>1.尽职调查：公司战略与人力资源管理尽职调查</span>";
                    var text2="<span>2.方案设计：战略招聘系统方案设计</span>";
                    var text3="<span>3.人员培训：战略招聘人员培训与实训</span>";
                    var text4="<span>4.实施辅导：战略招聘系统实施辅导</span>";
                    var text5="<span>5.效果评估：战略招聘系统效果评估</span>";
                    $("#zyc").append(text1,text2,text3,text4,text5);
                    break;
                default:
                    console.log("error");
                    break;
            }
            $(".zy-change").fadeToggle();
        },400);
    }
</script>

</body>
</html>