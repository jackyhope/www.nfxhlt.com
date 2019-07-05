$('.tab>div').mouseenter(ev=>{
    $('.tab>div').removeClass('choosed');
    $(ev.currentTarget).addClass('choosed');
})
$('.scCon').css('width',130*$('.scCon img').length+'px');
$('.scroll_left').click(scroll_left)
$('.scroll_right').click(scroll_right)
function scroll_right(ev){
    var left = $('.scCon').css('left').replace('px','')-0;
    if(left !== -130*($('.scCon img').length-1)){
        $('.scCon').css('left',left-130+'px');
        $(ev.target).unbind();
        setTimeout(()=>{
            $('.scroll_right').click(scroll_right)
        },400)
    }
}
function scroll_left(ev){
    var left = $('.scCon').css('left').replace('px','')-0;
    if(left !== 0){
        $('.scCon').css('left',left+130+'px');
        $(ev.target).unbind();
        setTimeout(()=>{
            $('.scroll_left').click(scroll_left)
        },400)
    }
}
$('.liu>span').mouseenter(ev=>{
    let index = $(ev.currentTarget).attr('class').replace('liusp','')-0;
    $('.liuImg').attr('src','img/liu'+index+'.png')
})
certifySwiper = new Swiper('#certify .swiper-container', {
	watchSlidesProgress: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop: true,
	loopedSlides: 5,
	autoplay: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// pagination: {
	// 	el: '.swiper-pagination',
	// 	//clickable :true,
	// },
	on: {
		progress: function(progress) {
			for (i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i);
				var slideProgress = this.slides[i].progress;
				modify = 1;
				if (Math.abs(slideProgress) > 1) {
					modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
				}
				translate = slideProgress * modify * 260 + 'px';
				scale = 1 - Math.abs(slideProgress) / 5;
				zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
				slide.transform('translateX(' + translate + ') scale(' + scale + ')');
				slide.css('zIndex', zIndex);
				slide.css('opacity', 1);
				if (Math.abs(slideProgress) > 3) {
					slide.css('opacity', 0);
				}
			}
		},
		setTransition: function(transition) {
			for (var i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i)
				slide.transition(transition);
			}

		}
	}
})
