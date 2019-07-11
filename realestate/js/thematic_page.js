let scroll1 = 1;
let scroll2 = 1;
$('.tab>div').mouseenter(ev=>{
    $('.tab>div').removeClass('choosed');
	$(ev.currentTarget).addClass('choosed');
	scroll1 = $('.tab .choosed').attr('scroll');
	switchTab();
})
$('.scCon').css('width',130*$('.scCon img').length+'px');
$('.scroll_left').click(scroll_left)
$('.scroll_right').click(scroll_right)
function scroll_right(ev){
    var left = $('.scCon').css('left').replace('px','')-0;
    if(left !== -130*($('.scCon img').length-1)){
		scroll2++;
		switchScroll()
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
		scroll2--;
		switchScroll()
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
function switchTab(){
	if(scroll1==1){
		$('.window>div:nth-child(1)').html(`
		<span class="sp1">行业岗位</span>
		<span>行业总监</span>
		<span>城市总监</span>
		<span>工程总监</span>
		<span>投资总监</span>
		<span>营销总监</span>
		<span>财务总监</span>
		`);
		$('.window>div:nth-child(2)').html(`
		<span class="sp1">地产合作案例</span>
                    <div class="ib">
                        <img src="img/5_10.png" alt="">
                    </div>
                    <div class="ib">
                        <img src="img/5_14.png" alt="">
                    </div>
                    <div class="ib">
                        <img src="img/5_21.png" alt="">
                    </div>
		`);
		$('.window>div:nth-child(3) .sp1').html('地产猎头团队');
	}else if(scroll1==2){
		$('.window>div:nth-child(1)').html(`
		<span class="sp1">行业岗位</span>
		<span>总建筑师</span>
		<span>设计总监</span>
		<span>方案主创设计师</span>
		<span>总工</span>
		<span>醒目经理</span>
		<span>主任施工图设计师</span>
		`);
		$('.window>div:nth-child(2)').html(`
		<span class="sp1">设计合作案例</span>
                    <div class="ib">
                        <img src="img/4_10.png" alt="">
                    </div>
                    <div class="ib">
                        <img src="img/4_14.png" alt="">
                    </div>
                    <div class="ib">
                        <img src="img/4_21.png" alt="">
                    </div>
		`);
		$('.window>div:nth-child(3) .sp1').html('设计猎头团队');
	}else if(scroll1==3){
		$('.window>div:nth-child(1)').html(`
		<span class="sp1">行业岗位</span>
		<span>区域总经理</span>
		<span>城市总经理</span>
		<span>运营总监</span>
		<span>拓展总监</span>
		<span>工程总监</span>
		<span>品质总监</span>
		`);
		$('.window>div:nth-child(2)').html(`
		<span class="sp1">物业合作案例</span>
                    <div class="ib">
                        <img src="img/3_06.png" alt="">
                    </div>
                    <div class="ib">
                        <img src="img/3_09.png" alt="">
                    </div>
                    <div class="ib">
                        <img src="img/3_15.png" alt="">
                    </div>
		`);
		$('.window>div:nth-child(3) .sp1').html('物业猎头团队');
	}
}
function switchScroll(){
	if(scroll2==1){
		$('.sp4').html('LEO');
		$('.sp5').html('专注房地产行业招聘10年，行业深度挖掘，人脉资源丰富，服务众多名企');
	}else if(scroll2==2){
		$('.sp4').html('Linla');
		$('.sp5').html('4年多房地产专业猎头经验，业绩多次创下记录，行业人才资源丰富');
	}else if(scroll2==3){
		$('.sp4').html('Alvin');
		$('.sp5').html('多年相关行业经验，灵活度高，人脉资源广，擅长人才评估匹配');
	}
}
