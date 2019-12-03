<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div class="vimeo-wrapper">
  <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
  <iframe class="vimeoVideo" src="https://player.vimeo.com/video/363342188?api=1&loop=1&autoplay=1&loop=1&byline=0&title=0&background=1&muted=0" width="100" height="100" frameborder="0" allow="autoplay; fullscreen" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
  <div class="mobile-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bgm.png" alt="bgm">
  </div>
</div>
<header id="header" class="header" style="">
  <div class="container homepageContainer">
    <?php if(wp_is_mobile()){ ?>
      <h1 id="mainpage" class="main-title">LIVE <br> LARGE <br> EVERY <br> DAY</h1>
      <div class="clientsBlock mobile">
          <?php
            $private = ( get_locale() != 'en_US' ) ? 'Business Clients' : 'Private Clients';
            $buisness = ( get_locale() != 'en_US' ) ? 'Private Clients' : 'Business Clients';
          ?>
          <a href="<?php echo get_bloginfo('url'); ?>/gsg-energy/" class="clientItemHome">
            <p><?= $private ?></p>
          </a>
          <a href="<?php echo get_bloginfo('url'); ?>/immediate-projects/" class="clientItemHome">
            <p><?= $buisness ?></p>
          </a>
        </div>
    <?php } ?>
    <div class="row">
      <div class="col-12 borderblockWrapper">
        <div class="borderblock"></div>
        <div class="borderblock">
          <?php if(wp_is_mobile()) { ?>

        <?php } else { ?>
          <h2 class="header__title">
            LIVE LARGE\nEVERY DAY
          </h2>
        </div>
        <?php } ?>
        <div class="borderblock">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/HomeCircleTxt.png" class="header__round_text" alt="">
          <div class="bottomLine">
          </div>
        </div>
      </div>
    </div>
  </div>
</header> <!-- .headerSection-->
<?php if(wp_is_mobile()){ ?>

<?php }
else{ ?>
<div class="clientsBlock">
    <?php
      $private = ( get_locale() != 'en_US' ) ? 'Business Clients' : 'Private Clients';
      $buisness = ( get_locale() != 'en_US' ) ? 'Private Clients' : 'Business Clients';
    ?>
    <a href="<?php echo get_bloginfo('url'); ?>/gsg-energy/" class="clientItemHome">
      <p><?= $private ?></p>
    </a>
    <a href="<?php echo get_bloginfo('url'); ?>/immediate-projects/" class="clientItemHome">
      <p><?= $buisness ?></p>
    </a>
  </div>
<?php } ?>




<?php wp_footer(); ?>
