jQuery(document).ready(function ($) {
  if ($('#wwd'). length > 0) {
    setTimeout(function () {
      $('#wwd').addClass('animateStart');
    }, 500);
  }

  if ($('.partneers').length > 0) {
    $('.aboutUsPageWrapper .partneers .sliderPartneers').slick({
      rtl: true,
      slidesToShow: 7,
      arrows: false,
      variableWidth: true,
      autoscroll: true,
      slidesToScroll: 3,
    });
  }
});
