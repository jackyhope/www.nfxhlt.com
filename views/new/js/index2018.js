var rnss_index2018 = (function () {


  //新闻咨询
  var getNews = function () {

      


      setTimeout(function () {

        var xwSwiper = new Swiper('#xwSwiper', {
          autoplay: 3500,
          spaceBetween: 0,
          autoplayDisableOnInteraction: false,
          loop: true,
          slidesPerView: 'auto',
          centeredSlides: true,
          //loopedSlides: 3,
          slideToClickedSlide: true,
          followFinger: false
        });

        $('#xwSwiper').mouseenter(function () {
          xwSwiper.stopAutoplay();
        });
        $('#xwSwiper').mouseleave(function () {
          xwSwiper.startAutoplay();
        });

      }, 50);

  }

  return {
    init: function () {
      setTimeout(getNews, 200);
    }
  };

})();


$(document).ready(function () {
  rnss_index2018.init();

  //懒加载
  //$(".lazy").lazyload({ effect: "show", threshold: 200 });
})



