$('.scroll_body').css('width',460*$('.scroll_box').length+'px');
$('.scroll_left').click(scroll_left)
$('.scroll_right').click(scroll_right)
function scroll_left(ev){
    var left = $('.scroll_body').css('left').replace('px','')-0;
    if(left !== -460*($('.scroll_box').length-3)){
        $('.scroll_body').css('left',left-460+'px');
        $(ev.target).unbind();
        setTimeout(()=>{
            $('.scroll_left').click(scroll_left)
        },400)
    }
}
function scroll_right(ev){
    var left = $('.scroll_body').css('left').replace('px','')-0;
    if(left !== 0){
        $('.scroll_body').css('left',left+460+'px');
        $(ev.target).unbind();
        setTimeout(()=>{
            $('.scroll_right').click(scroll_right)
        },400)
    }
}