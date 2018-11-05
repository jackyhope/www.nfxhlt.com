/**
 * Created by Administrator on 2018/8/24.
 */
$(document).ready(function () {
    //menu一下的每一个大板块类名,不可重复
    setdivheight('banner,banneradd,creater,mtbd,culture,footer');
})
window.onresize = function () {
    setdivheight('banner,banneradd,creater,mtbd,culture,footer');
};