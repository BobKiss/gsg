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

  if ( window.innerWidth <= 768 && window.innerWidth > 425 ) {
    $(".gsg-energy__map").draggable();
  }
  var scaleCount = 1.2;
  $('.mapBtnPlus ').click(function (e) {
    scaleCount += 0.5;
    $('.gsg-energy__map').css('transform', `scale( ${scaleCount} )`)
  });
  $('.mapBtnMinus ').click(function (e) {
    scaleCount -= 0.5;
    $('.gsg-energy__map').css('transform', `scale( ${scaleCount} )`)
  });

  if ($('.partneers').length > 0 && $('body').hasClass('rtl')) {
    $('.aboutUsPageWrapper .partneers .sliderPartneers').slick({
      slidesToShow: 7,
      arrows: false,
      variableWidth: true,
		rtl: true,
	autoplay: true,
	autoplaySpeed: 2000,
      slidesToScroll: 1,
		infinite: true,
    });
  }
  else{
    $('.aboutUsPageWrapper .partneers .sliderPartneers').slick({
      slidesToShow: 7,
      arrows: false,
		rtl: false,
      variableWidth: true,
      autoplay: true,
  		autoplaySpeed: 2000,
      slidesToScroll: 1,
		infinite: true,
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
    $('.sideMenu .mailBlock a.sideMenuMail').removeClass('opened');
    $('.sideMenu .mailBlock .popup').removeClass('opened');
    $('.sideMenuWrapper').toggleClass('active');

    // Animation
    $('.menuBlock .menu-border-top').toggleClass('border-top-animate');
    $('.menuBlock .menu-border-left').toggleClass('border-left-animate');
    $('.menuBlock .menu-border-bottom').toggleClass('border-bottom-animate');
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
      $('.sideMenu .sideMenuItem.first').removeClass('active');
      $('.sideMenu .sideMenuItem.first').parent().removeClass('active');
      $('.sideMenuWrapper').removeClass('active');
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

  function phone(name) {
    "use strict";
    var r = /^([+]?[0-9\s-\(\)]{3,25})*$/i,
        arr = name.match(r),
        res,
        str = arr.join('');
    if ( name.match(r) === null ) {
      return false;
    } else {
      return true;
    }

    // if (name.substr(0, 1) === '+') {
    //   res = "+" + str;
    // } else if (str.substr(0, 1) === '8') {
    //   res = "0" + str.substr(1);
    // } else {
    //   res = str;
    // }
    // return res;
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

  //init nice selects
  $('.nice-select-trigger').niceSelect();

  // // fuckin' caldera
  $(document).on('cf.form.submit', function (e, data) {

    // e.preventDefault();
    let phone_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    let phone = data.$form.find('[type=phone]').val();

    if( !phone.match(phone_reg) ) {

      alert("Please, enter valid number");
      return;

    }
    console.log(phone);

  });

  // Statline + percents animations
  var observer = new IntersectionObserver( function (entries, observer) {
    entries.map( el => {

      if ( !el.isIntersecting ) {
        $('.statline_01').removeClass('statline-animation-1');
        $('.statline_02').removeClass('statline-animation-2');
        $('.statline_03.project-sample').removeClass('statline-animation-3__alt');
        $('.statline_03').removeClass('statline-animation-3');
        return;
      }

      $('.statline_01').addClass('statline-animation-1');
      $('.statline_02').addClass('statline-animation-2');
      animatedCount( '#percent-1', 60 );
      animatedCount( '#percent-2', 42 );

      $('.statline_03').addClass('statline-animation-3');
      $('.statline_03.project-sample').addClass('statline-animation-3__alt');
      animatedCount( '#percent-3__alt', 30 );
      animatedCount( '#percent-3', 80 );

    } )
  }, {} );
  if ( $('.statlines').length != 0 ) {
    observer.observe( $('.statlines')[0] );
  }

  function animatedCount (el, val) {
    var $el = $(el),
      value = val;

    $({percentage: 0}).stop(true).animate({percentage: value}, {
      duration : 3000,
      easing: "easeOutExpo",
      step: function () {
        // percentage with 1 decimal;
        var percentageVal = Math.ceil(this.percentage);
        $el.html(percentageVal + '%');
      }
    }).promise().done(function () {
      // hard set the value after animation is done to be
      // sure the value is correct
      $el.html(value + "%");
    });
  };

});

// new WOW().init();

/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
