jQuery(document).ready(function ($) {


$('.mainNavigationContainer .menu-item-has-children > a, .fullscreenMenu .menu-item-has-children > a').click(function (e) {
  console.log('click and prev def');
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $(this).parent().find('.sub-menu').toggleClass('activeMenu');
  $('.mainNavigationContainer .activeLine').toggleClass('hide');
});

});
