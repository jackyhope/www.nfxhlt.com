/**
 * Created by ezc on 2018/7/19.
 */
    $(document).ready(function () {
        setfontsize();
    })
    window.onresize = function () {
        setfontsize();
    }
    function setfontsize() {
        var width = document.body.clientWidth;
        width = width / 100;
        $("html").css("font-size", width>=12?width:12);
    }

    function Shower(Arrname, time) {
        var x = document.body.clientWidth;
        x = x / 100;
        var top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        var n = namelist(Arrname);
        for (var i = 0; i < n.length; i++) {
            check(n[i], time);
        }
        if (top > 0) {
            $(".nav").css("background-color", "#ffffff");
        } else {
            $(".nav").css("background-color", "#ffffff");
        }
    }

    function navshow() {
        var top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        if (top > 0) {
            $(".nav").css("background-color", "#ffffff");
        } else {
            $(".nav").css("background-color", "#ffffff");
        }
    }

    function namelist(Arrname) {
        var arr = new Array();
        arr = Arrname.split("/");
        return arr;
    }

    function check(x, time) {
        var x = $("." + x);
        var offtop = x.offset().top;
        var outtop = x.outerHeight();
        var wintop = $(window).scrollTop();
        var winh = $(window).height();
        var time = Number(time);
        (wintop > offtop + outtop || wintop + winh < offtop) ? true : x.animate({opacity: "1"}, time);
    }

    function setDisplay(Arrname) {
        var arr = new Array();
        arr = Arrname.split("/");
        for (var i = 0; i < arr.length; i++) {
            $("." + arr[i]).css("opacity", "0");
        }
    }

    function showbig(data) {
        var parentDiv = $("<div></div>");
        var src = data.src;
        //src = src.split('images/admin/')[1];
        parentDiv.addClass('parentDiv');
        var img = $("<img src=" + src + ">");
        img.addClass('showimg');
        var del = $("<img style='cursor:pointer;width: 2rem;height: 2rem;position: fixed;top:6rem;left: 70rem' src='../../static/images/close2.png' onclick='del()'>");
        var left = $("<img onclick='pre()' style='position:fixed; top:21.5rem;width: 2rem; left: 28rem;cursor: pointer' src='../../static/images/jiantou.png'>");
        var right = $("<img style='position:fixed; top:21.5rem;width: 2rem; left: 70rem;cursor: pointer;transform:rotate(180deg);'onclick='next()'; src='../../static/images/jiantou.png'>");
        del.appendTo(parentDiv);
        left.appendTo(parentDiv);
        right.appendTo(parentDiv);
        img.appendTo(parentDiv);
        parentDiv.appendTo("body");
    }

    function del() {
        $(".parentDiv").remove();
    }

    function next() {
        var bsrc = $(".showimg").attr("src");
        bsrc = bsrc.split("/");
        var src  = bsrc[bsrc.length-2]+"/"+bsrc[bsrc.length-1];
        var count = 0;
        var count1 = $("#img-list-1").children().length;
        var count2 = $("#img-list-2").children().length;
        (count1 = count2) ? count = count1 : false;
        var srcarr = [];
        for (var i = 0; i < count; i++) {
            srcarr[i] = $($($("#img-list-1").children("td").get(i)).children("img")).attr("src");
        }
        for (var i = 0; i < count; i++) {
            srcarr[i + 3] = $($($("#img-list-2").children("td").get(i)).children("img")).attr("src");
        }
        var srci = 0;
        for (var i = 0; i < srcarr.length; i++) {
            (srcarr[i].indexOf(src) != -1) ? srci = i : false;
        }
        srci++;
        $(".showimg").attr("src", srcarr[srci]);
    }

    function pre() {
        var bsrc = $(".showimg").attr("src");
        bsrc = bsrc.split("/");
        var src  = bsrc[bsrc.length-2]+"/"+bsrc[bsrc.length-1];
        var count = 0;
        var count1 = $("#img-list-1").children().length;
        var count2 = $("#img-list-2").children().length;
        (count1 = count2) ? count = count1 : false;
        var srcarr = [];
        for (var i = 0; i < count; i++) {
            srcarr[i] = $($($("#img-list-1").children("td").get(i)).children("img")).attr("src");
        }
        for (var i = 0; i < count; i++) {
            srcarr[i + 3] = $($($("#img-list-2").children("td").get(i)).children("img")).attr("src");
        }
        var srci = 0;
        for (var i = 0; i < srcarr.length; i++) {
            (srcarr[i].indexOf(src) != -1) ? srci = i : false;
        }
        srci--;
        $(".showimg").attr("src", srcarr[srci]);
    }
// var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
// document.write(unescape("%3Cspan id='cnzz_stat_icon_1262221244'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol
//     + "s13.cnzz.com/z_stat.php%3Fid%3D1262221244%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
// var _hmt = _hmt || [];
// (function() {
//     var hm = document.createElement("script");
//     hm.src = "https://hm.baidu.com/hm.js?79ab35463c1911c1ad2322e50d0efda1";
//     var s = document.getElementsByTagName("script")[0];
//     s.parentNode.insertBefore(hm, s);
// })();