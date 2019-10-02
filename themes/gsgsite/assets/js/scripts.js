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

  $('.sideMenuWrapper .sideMenuContent li.menu-item-has-children > a').click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('active');
 });

  $('.sideMenu .sideMenuItem.first').click(function(e){
    console.log('click');
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


  function initSidebarMailButton() {
    $('.sideMenu .mailBlock a.sideMenuMail').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('opened');
      $('.sideMenu .mailBlock .popup').toggleClass('opened');
    });
    $('.sideMenu .mailBlock .popup .popUpFooter .popupColumn .submitButton').click(function (e) {
      e.preventDefault();
      $('.sideMenu .mailBlock .popup .popupForm input[type="submit"]').click();
    });
  }

  initSidebarMailButton();


  function initBarkanSlider() {
    let padding = $('.container').first().offset().left + 15;
    $('.barkan-slider').css({
      'transform': `translateX(-`+padding+`px)`,
    });
    $('.barkan-slider__img').slick({
      slidesToShow: 2,
      slidesToScroll: 2,
      prevArrow: '<button type="button" class="slick-prev">\<</button>',
      nextArrow: '<button type="button" class="slick-next">\></button>',
    });
    $('.barkan-slider__img .slick-prev').css('left', padding);

    // projSimple
    $('.houseScreen').css('padding-right', padding);
  }
  initBarkanSlider();
});
