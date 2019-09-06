<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<div class="page homepage">
  <video autoplay muted loop class="homeVideoBack">
    <source src="<?php bloginfo('template_url'); ?>/assets/images/CleanWater.mp4" type="video/mp4">
  </video>
<div class="homepageContent">
  <div class="homeLogo">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/BlackLogo.png" alt="">
  </div>
  <div class="rectangleBlock" style="background-image:url(<?php bloginfo('template_url'); ?>/assets/images/HomeTxtBack.png);     background-size: 100% 100%;">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/HomeCircleTxt.png" alt="">
    <p>Live Large Every Day</p>
  </div>
  <div class="clientsBlock">
    <a href="<?php home_url('/somepage/'); ?>" class="clientItemHome">
      <p>Business Clients</p>
    </a>
    <a href="<?php home_url('/somepage/'); ?>" class="clientItemHome">
      <p>Private Clients</p>
    </a>
  </div>
</div>

</div>

<?php wp_footer(); ?>
