<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"/home/wwwroot/www.nfxhlt.com/public/../application/home/view/about/index.html";i:1537151584;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/common.html";i:1538205152;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/header.html";i:1536289120;s:69:"/home/wwwroot/www.nfxhlt.com/application/home/view/public/footer.html";i:1537324666;}*/ ?>
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

<div class="banner long-banner" >
    <img src="/static/images/aboutus/abimgbg.png" alt="">
    <?php if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'feature1'): ?>
    <div class="box1">
        <div class="blue-top"></div>
        <div>
            <span><?php echo $vo['titlename']; ?></span>
            <span><?php echo $vo['titlecontent']; ?></span>
            <input class="blue-input input-p" type="button" onclick="openchat()" value="我要招聘">
        </div>
    </div>
    <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'feature2'): ?>
    <div class="box2">
        <div class="blue-top"></div>
        <div>
            <span><?php echo $vo['titlename']; ?></span>
            <span><?php echo $vo['titlecontent']; ?></span>
            <input class="blue-input mf-p" type="button" onclick="openchat()" value="免费咨询">
        </div>
    </div>
    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>

<!--banner-->


<!--创始人简介-->
<?php if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'feature3'): ?>
<div class="creator">
    <img src="../../<?php echo $list['founder']; ?>" alt="">
    <div class="box3">
        <div class="blue-top white-top"></div>
        <div>
            <span><?php echo $vo['titlename']; ?></span>
            <span><?php echo $vo['titlecontent']; ?></span>
            <input class="blue-input white-input" type="text" onclick="openchat()" value="免费咨询">
        </div>
    </div>
</div>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
<!--创始人简介-->

<!--媒体报道-->

<div class="mtbd">
    <table class="tb-title">
        <tbody>
        <tr>
            <td>媒体报道</td>
        </tr>
        </tbody>
    </table>
    <div class="d1">
        <div class="win">
            <img src="/static/images/aboutus/vava.jpg" alt="">
            <a class="mttitle" href="#"><b>重庆市人社局副局长何振国一行到访南方新华</b></a>
            <a class="mtcontent" href="#">
                7月10日下午，重庆人力社保局副局长何振国，
                渝北区政府副区长唐密一行参观了南方新华第七事业部。何振国副局长，
                唐密副区长一行到重庆人力资源服务产业园出席会议并视察，
                会议前到南方新华进行了调研参观。
            </a>
            <a class="mtmore" href="#">更多</a>
        </div>
    </div>
    <div class="d2">
        <div class="win">
            <img src="/static/images/aboutus/sasa.jpg" alt="">
            <a class="mttitle" href="#"><b>Top Work企业家及导师参观访问南方新华</b></a>
            <a class="mtcontent" href="#">
                5月8日，TopWork企业家及导师一行来到重庆南方新华总部参观访问，受到公司董事长张勇热烈欢迎。
                董事长张勇向来宾介绍猎头发展趋势和基本服务流程；人力资源部负责人带领来宾参观南方新华办公环境，
                第三事业部负责人对南方新华近年来在猎头方面所做的工作以及未来的发展规划进行了演示讲解。
            </a>
            <a class="mtmore" href="#">更多</a>
        </div>
    </div>
    <div class="d3">
        <div class="win">
            <img src="/static/images/aboutus/vava.png" alt="">
            <a class="mttitle" href="#"><b>南方新华猎头公司代表参加2018高校毕业生双选会</b></a>
            <a class="mtcontent" href="#">
                2017年11月16日上午，重庆市2018届普通高校毕业生就业双选会(商贸类专场)在重庆商务职业学院顺利举行。
                重庆南方新华企业管理咨询有限公司(即南方新华猎头公司)董事长张勇，作为企业方唯一代表在大会上发言，
                重点谈到校企合作的重要性、十九大报告对教育质量供给侧改革提出的新要求
                、校企合作可借鉴的模式、南方新华猎头公司在校企合作方面的投资建设情况等四个方面。据悉，共有160多家企业代表参加此次双选会。
            </a>
            <a class="mtmore" href="#">更多</a>
        </div>
    </div>
</div>

<!--媒体报道-->

<!--地图-->
<div class="map">
    <table class="tb-title blue-tb">
        <tbody>
        <tr>
            <td>业务覆盖范围</td>
        </tr>
        </tbody>
    </table>
    <div class="map-row">
        <div id="map"></div>
        <div class="map-text">
            <div>
                <span>主要服务的区域</span>
                <span>北京、上海、深圳、广州、天津、杭州、南京、成都、重庆</span>
                <input class="blue-input map-btn" type="button" onclick="openchat()" value="免费咨询">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // 全国省份列表
    var dataMap = [{ name: '北京' },
        { name: '天津' }, { name: '上海' },
        { name: '重庆' }, { name: '河北' }, { name: '河南' },
        { name: '云南' }, { name: '辽宁' }, { name: '黑龙江' },
        { name: '湖南' }, { name: '安徽' }, { name: '山东' },
        { name: '新疆' }, { name: '江苏' }, { name: '浙江' }, { name: '江西' },
        { name: '湖北' }, { name: '广西' }, { name: '甘肃' }, { name: '山西' },
        { name: '内蒙古' }, { name: '陕西' }, { name: '吉林' }, { name: '福建' }, { name: '贵州' },
        { name: '广东' }, { name: '青海' }, { name: '西藏' }, { name: '四川' },
        { name: '宁夏' }, { name: '海南' }, { name: '台湾' }, { name: '香港' }, { name: '澳门' }]
    // 需要在页面上直接标记出来的城市
    var specialMap = [];
    // 对dataMap进行处理，使其可以直接在页面上展示
    for (var i = 0; i < specialMap.length; i++) {
        for (var j = 0; j < dataMap.length; j++) {
            if (specialMap[i] == dataMap[j].name) {
                dataMap[j].selected = true;
                break;
            }

        }
    }
    // 绘制图表，准备数据
    var option = {
        tooltip: {
            formatter: function (params) {
                var info = '<p style="font-size:0.9375rem">' + params.name + '</p>'
                return info;
            },
            backgroundColor: "#ff7f50",//提示标签背景颜色
            textStyle: { color: "#fff" } //提示标签字体颜色
        },
        series: [
            {
                name: '中国',
                type: 'map',
                mapType: 'china',
                selectedMode: 'multiple',
                label: {
                    normal: {
                        show: true,//显示省份标签
                        textStyle:{color:"#ffffff"}//省份标签字体颜色
                    },
                    emphasis: {
                        show: true,//对应的鼠标悬浮效果
                        // textStyle:{color:"#800080"}
                    }
                },
                itemStyle: {
                    normal: {
                        borderWidth:0.5,//区域边框宽度
                        borderColor: '#bb565f',//区域边框颜色
                        areaColor:"#bb565f",//区域颜色
                    },
                    emphasis: {
                        borderWidth: .5,
                        borderColor: '#bb565f',
                        areaColor: "#ffffff",
                    }
                },
                data: dataMap
            }
        ]
    };
    //初始化echarts实例
    var myChart = echarts.init(document.getElementById('map'));
    //使用制定的配置项和数据显示图表
    myChart.setOption(option);
    $(document).ready(function () {
       $("canvas").css({"width":"33.33333333333333rem","height":"38.33333333333333rem"});
       //$("canvas").attr({"width":"33.33333333333333rem","height":"38.33333333333333rem"});
       $("canvas").parent().css({"width":"33.33333333333333rem","height":"38.33333333333333rem"});
       $("#map").css({"width":"33.33333333333333rem","height":"38.33333333333333rem"});

    });
</script>
<!--地图-->

<!--企业文化-->
<div class="culture">
    <table class="tb-title">
        <tbody>
        <tr>
            <td>企业文化</td>
        </tr>
        </tbody>
    </table>
    <div class="div-2d">
        <?php if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureVision'): ?>
        <div>
            <div class="d-title">
                <img src="../../<?php echo $list['vision']; ?>" alt="">
                <span><?php echo $vo['titlename']; ?></span>
                <div>
                    <span class="d-text-1"><?php echo $vo['titlecontent']; ?></span>
                </div>
            </div>
        </div>
        <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureMission'): ?>
        <div>
            <div class="d-title">
                <img src="../../<?php echo $list['mission']; ?>" alt="">
                <span><?php echo $vo['titlename']; ?></span>
                <div>
                    <span class="d-text-2"><?php echo $vo['titlecontent']; ?></span>
                </div>
            </div>
        </div>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="div-1d">
        <div>
            <div class="d-title">
                <img src="../../<?php echo $list['corevalue']; ?>" alt="">
                <?php if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureCoreValue1'): ?>
                <span><?php echo $vo['titlename']; ?></span>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="d-4d" style="box-shadow: none">
                    <?php if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureCoreValue1'): ?>
                    <div class="hxjz">
                        <div>
                            <span><?php echo $vo['subname']; ?></span>
                        </div>
                        <p class="p-top-1"><?php echo $vo['titlecontent']; ?></p>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureCoreValue2'): ?>
                    <div class="hxjz">
                        <div>
                            <span><?php echo $vo['subname']; ?></span>
                        </div>
                        <p class="p-top-2"><?php echo $vo['titlecontent']; ?></p>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureCoreValue3'): ?>
                    <div class="hxjz">
                        <div>
                            <span><?php echo $vo['subname']; ?></span>
                        </div>
                        <p class="p-top-2"><?php echo $vo['titlecontent']; ?></p>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($abouttitle) || $abouttitle instanceof \think\Collection || $abouttitle instanceof \think\Paginator): $i = 0; $__LIST__ = $abouttitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['source'] == 'cultureCoreValue4'): ?>
                    <div class="hxjz">
                        <div>
                            <span><?php echo $vo['subname']; ?></span>
                        </div>
                        <p class="p-top-2"><?php echo $vo['titlecontent']; ?></p>
                    </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--企业文化-->

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