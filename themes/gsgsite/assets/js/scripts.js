jQuery(document).ready(function ($) {


$('.mainNavigationContainer .menu-item-has-children > a, .fullscreenMenu .menu-item-has-children > a').click(function (e) {
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $(this).parent().find('.sub-menu').toggleClass('activeMenu');
  $('.mainNavigationContainer .activeLine').toggleClass('hide');
});

$('.sideMenu .sideMenuItem.first').click(function(e){
  $(this).toggleClass('active');
  $(this).parent().toggleClass('active');
  $('.sideMenuContent').toggleClass('active');
});

});
