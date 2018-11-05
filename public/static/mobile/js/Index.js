/**
 * Created by Administrator on 2018/8/23.
 */
$(document).ready(function () {
    //menu一下的每一个大板块类名,不可重复
    setdivheight('top-img-div,hy,hzqy,lttj,lc,mcenter,imgcenter,footer');
})
window.onresize = function () {
    setdivheight('top-img-div,hy,hzqy,lttj,lc,mcenter,imgcenter,footer');
}