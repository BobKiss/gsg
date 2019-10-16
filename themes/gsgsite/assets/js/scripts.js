jQuery(document).ready(function ($) {

  if ($('.homepageContainer').length > 0 && window.matchMedia('(max-width: 767px)').matches) {
    $('head').append('<meta name="mobile-web-app-capable" content="yes">');
    $('.vimeo-wrapper iframe').remove();
  }

  if ($('#wwd'). length > 0) {
    setTimeout(function () {
      $('#wwd').addClass('animateStart');
    }, 500);
  }

  if ($('.partneers').length > 0) {
    $('.aboutUsPageWrapper .partneers .sliderPartneers').slick({
      // rtl: true,
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

    $('.big-projects-list .list-item .view-btn').hover(function(e){
    	$(this).parent().children(".item-info").addClass('hovered');
    }, function() {
    	$(this).parent().children(".item-info").removeClass('hovered');
    });

    $('.small-list-items-wrapper .list-item .item-desc .view-btn').hover(function(e){
        	$(this).parent().children(".item-content-block").children(".item-info").addClass('hovered');
        }, function() {
        	$(this).parent().children(".item-content-block").children(".item-info").removeClass('hovered');
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
  if ($('.container').length > 0) {
    initBarkanSlider();
  }

  function initHeaderWordsAnimations(selectors) {
    selectors = selectors.split(',');
    selectors.forEach(function (selectedTitle) {
      let title = $.trim($(selectedTitle).text());
      title = title.split('');
      $(selectedTitle).empty();
      title.forEach(function (item, i, arr) {
        if (item == '\\') {
          if (arr[i+1] == 'n') {
            arr.splice(i+1, 1);
            arr[i] = '\n';
          }
        }
      });


      title.forEach(function (el, i, arr) {
        // console.log('el', el);
        if (el == '\n') {
          console.log('N');
          $(selectedTitle).append(`<span class="br"></span>`);
        }
        if (el == ' ') {
          $(selectedTitle).append(`<span style="transition-delay: ${(i * 0.15).toFixed(2)}s" >&nbsp;</span>`);
        } else {
          $(selectedTitle).append(`<span style="transition-delay: ${(i * 0.15).toFixed(2)}s" >${el}</span>`);
        }
      });

      setTimeout(function () {
        $(selectedTitle).find('span').addClass('animationTriggered');
      }, 100);
    });
    $('.headerSection .borderBlock, .borderblockWrapper').addClass('animated');
    $('.site > .logo, .clientsBlock, .sideMenu, .header__round_text').addClass('visible');
  }

  if ($('.vimeo-wrapper iframe').length > 0) {
    $(".vimeo-wrapper iframe").ready(function () {
      setTimeout(function () {
        initHeaderWordsAnimations('header .header__title');
      }, 1500);

      $('.volumeSwitcher').on('click', function(){
        var iframe = $('.vimeo-wrapper iframe')[0],
            player = $f(iframe),
            status = $('.status');
        if($(this).hasClass('muted')){
          player.api('setVolume', 1);
        }
        else{
          player.api('setVolume', 0);
        }
        $(this).toggleClass('muted');
      });
    });
  } else {
    initHeaderWordsAnimations('header .header__title, .headerSection .borderBlock .row .title, .archive .headerSection .borderBlock.hebrew .row .littleTitle');
  }



  function disableLanguages() {
    $('.sideMenu .sideMenuItem a.langName').click(function (e) {
      e.preventDefault();
    });
  }



  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});

new WOW().init();
