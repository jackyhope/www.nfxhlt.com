/**
 * Created by Administrator on 2018/8/27.
 */
$(document).ready(function () {
    //menu一下的每一个大板块类名,不可重复
    setdivheight();
    var menuh = $(".menu").height();
    var height = window.innerHeight;
    var detail = $(".detail");
    detail.css({"min-height":height-menuh,"top":menuh});
    if(detail.height()>height-menuh){
        detail.css({"min-height":height-menuh-72,"padding-bottom":"72px"});
    }
});
window.onresize = function () {
    setdivheight();
    var menuh = $(".menu").height();
    var height = window.innerHeight;
    var detail = $(".detail");
    detail.css({"min-height":height-menuh,"top":menuh});
    if(detail.height()>height-menuh){
        detail.css({"min-height":height-menuh-72,"padding-bottom":"72px"});
    }
};