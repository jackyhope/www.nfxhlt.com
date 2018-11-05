/**
 * Created by sjerku on 2018/8/15.
 */
function setdivheight(data) {
    var height = $(window).height()<1764?1764:$(window).height();
    $("nav").css("height",(height/12)+"rem");
    var delh = parseInt($(".menu").css("height"));
    height = height - delh;
    $(".set-h").css("height",(height/12)+"rem");
    var topobj = $(".set-h").prevAll();
    var count = topobj.length;
    var top = new Array();
    for(var i = 0;i<count;i++){
        top.push($(topobj[i]).css("height"));
    }
    if(data!=null){
        setfull(data);
    }
}
function setfull(data) {
    var obj = data.split(',');
    var objheight = new Array();
    for(var i = 0;i<obj.length;i++){
        var prev = new Array();
        var data = new Array();
        prev.push($("."+obj[i]).prevAll());
        for(var j =0;j<prev.length;j++){
            data.push(prev[j]);
        }
        objheight.push(data);
    }
    var h = 0;
    for(var i = 0;i<objheight.length;i++){
        for(var j = 0;j<objheight[i].length;j++){
            h = h + parseInt($(objheight[i][j]).css("height"));
        }
        $("."+obj[i]).css("top",h);
    }
}
function showmenu(){
    var aside = $("nav");
    var main = $("main");
    var gettop = document.documentElement.scrollTop||document.body.scrollTop;
    if(main.attr("class")==null||main.css("left")=="0px"){
        aside.removeClass();
        main.removeClass();
        aside.addClass('aTor');
        main.addClass('mTor');
        if(gettop>=0){
            $(".menu").css("top",gettop);
            $("nav").css("top",gettop);
        }
        var timer = setInterval(function () {
            aside.removeClass();
            main.removeClass();
            aside.css("left","0");
            main.css("left","50%");
            $(".menu").css("top",0);
            $("nav").css("top",0);
            window.clearInterval(timer);

        },500)
    }else if(aside.css("left")=="0px"){
        aside.removeClass();
        main.removeClass();
        aside.addClass('aTol');
        aside.css("left","-50%");
        main.addClass('mTol');
        main.css("left","0");
        if(gettop>=0){
            $(".menu").css("top",gettop);
            $("nav").css("top",gettop);
        }
        var timer = setInterval(function () {
            aside.removeClass();
            main.removeClass();
            $(".menu").css("top",0);
            $("nav").css("top",0);
            window.clearInterval(timer);
        },500)
    }
}