<?php
/*
Template Name: Coming Soon
*/
?>
<?php get_header(); ?>
    <section id="coming-soon" class="headerSection" style="background: #fff600; padding: 0;">
    <!-- <a href="<?php echo get_bloginfo('url') ?>" class="logo">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>"> -->
    </a>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 d-flex cs-wrapper">

                <a href="<?php echo get_bloginfo('url') ?>" class="logo logo-cs">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
                </a>

                <div class="coming__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/coming.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/soon.png" alt="" style="margin-top: 40px;">
                    <!-- <img id="coming__circle" class="coming__circle" src="<?php bloginfo('template_url'); ?>/assets/images/progress-circle.png" alt="decorAbout"> -->
                    <div class="cs-circle">
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/progress-circle.png" alt="decorAbout">
                      <img src="<?= get_template_directory_uri() . '/assets/images/hand.png' ?>" alt="">
                      <!-- <div class="cs-text-mobile">
                        <span>עמוד חדש יעלה בקרוב!</span>
                        <a class="cs-btn" href="<?= home_url() ?>">לחצו כאן לחזרה לאתר</a>
                      </div> -->
                    </div>
                </div>

                <div class="cs-circle__alt">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/progress-circle.png" alt="decorAbout">
                  <img src="<?= get_template_directory_uri() . '/assets/images/hand.png' ?>" alt="">
                  <div class="cs-text-mobile">
                    <span>עמוד חדש יעלה בקרוב!</span>
                    <a class="cs-btn" href="<?= home_url() ?>">לחצו כאן לחזרה לאתר</a>
                  </div>
                </div>

            </div>
        </div>

    </div> <!--.borderBlock-->
  </section> <!-- .headerSection-->
<?php wp_footer(); ?>
