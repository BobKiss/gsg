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

  $('.mainNavigationContainer .menu-item-has-children > a, .fullscreenMenu .menu-item-has-children > a').click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('active');
    $(this).parent().find('.sub-menu').toggleClass('activeMenu');
    $('.mainNavigationContainer .activeLine').toggleClass('hide');
  });

  $('.sideMenu .sideMenuItem.first').click(function(e){
    $(this).toggleClass('active');
    $(this).parent().toggleClass('active');
    $('.sideMenuWrapper').toggleClass('active');
  });
  $('.mainNavigationContainer .menu-item-has-children > a, .fullscreenMenu .menu-item-has-children > a').click(function (e) {
    console.log('click and prev def');
    e.preventDefault();
    $(this).parent().toggleClass('active');
    $(this).parent().find('.sub-menu').toggleClass('activeMenu');
    $('.mainNavigationContainer .activeLine').toggleClass('hide');
  });
});
