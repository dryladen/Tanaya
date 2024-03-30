window.onresize = displayHome;
window.onload = displayHome;

function displayHome() {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $('#menu-nav').addClass('bg-light shadow-sm');
      // $('.nav-custom a').removeClass('text-light').addClass('text-dark');
      // $('.navbar-toggler').removeClass('toggler-custom');
    } else {
      // $('#menu-nav').removeClass('bg-light shadow-sm');
      // $('.nav-custom a').removeClass('text-dark').addClass('text-light');
      // $('.navbar-toggler').addClass('toggler-custom');
    }
  });
}

var swiperWithPagination = new Swiper('#swiper-with-pagination', {
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    grabCursor: true,
  }, autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});