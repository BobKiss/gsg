<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="archive" style="overflow-x: hidden;">
  <section id="blog-page" class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/samuel-zeller-YfrSHq3EnRg-unsplash.jpg) center bottom / cover">
    <!-- <a href="<?php echo get_bloginfo('url') ?>" class="logo">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>"> -->
    </a>
    <div class="borderBlock container borderWhite hebrew" id="blog-border">
      <div class="row"></div>
      <div class="row">
        <?php
          $pinned_post = get_field('pinned_post');
          $heading = $pinned_post->post_title;
          $text = get_field('pinned_post_small_text');
          $align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
        ?>
        <?php if(wp_is_mobile()) { ?>
            <h1 id="main-title-blogh1" class="main-title"><?php echo $heading; ?></h1>
            <h2 id="main-title-blogh2" class="main-title">
              <a href="<?php echo get_permalink( $pinned_post ); ?>">
                <?php echo $text ?>
              </a>
            </h2>
        <?php } else { ?>
        <div id="blog-title" class="title" style="color:white !important;"><?= $heading ?></div>
        <a href="<?php echo get_permalink( $pinned_post ); ?>" class="littleTitle" style="color:white !important;" id="blog-lt">
          <?= $text ?>
        </a>
        <?php } ?>
      </div>
      <div class="row"></div>
      <div id="blogCircle" class="decorCircle mobile-none">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" alt="decorAbout">
      </div>
    </div> <!--.borderBlock-->
  </section> <!-- .headerSection-->

  <section id="archivepage" class="archivepage">
    <div class="container">
      <div class="row">
        <?php
        // запрос
        $args = array(
          'posts_per_page' => 6,
          'status' => 'publish',
          'suppress_filters' => 0
        );
        $posts = get_posts( $args );
        $counter = 0;
        $middle = count($posts) / 2;
        ?>
        <div class="col-lg-6 col-sm-12">
          <div class="archivepage__wrap_right">
            <?php foreach( $posts as $post ): $counter++; ?>
              <?php
              setup_postdata($post);
              ?>
              <?php if ($counter > $middle) { continue; }
              ?>
              <div>
                <?php
                  $button = ( get_locale() != 'en_US' ) ? 'קרא כתבה' : 'READ ARTICLE';
                ?>

                <a href="<?php the_permalink(); ?>" class="archivepage__img archivepage__img_0<?php echo $counter; ?>" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center / cover">
                  <span class="archivepage__desc">

                      <?= $button ?>

                    <!-- <?php the_field('button_title'); ?> -->
                  </span>
                </a>
                <h5 class="archivepage__img_title">
                  <?php
                    $heading = ( get_locale() != 'en_US' ) ? 'מאת מעיין בכר' : 'By Maayan Bachar';
                  ?>
                  <?php the_title(); ?> <p><?= $heading?></p>
                </h5>
                <p class="archivepage__img_text">
                  <?php echo get_the_excerpt() ?>
                </p>
              </div>
            <?php endforeach; $counter = 0; ?>

            <?php wp_reset_postdata(); ?>
          </div>
        </div>

        <div class="col-lg-6 col-sm-12">
          <div class="archivepage__wrap_left">
            <?php foreach( $posts as $post ): $counter++; ?>
              <?php
              setup_postdata($post);
              ?>
              <?php if ($counter <= $middle) { continue; }
              ?>
              <?php
                $button = ( get_locale() != 'en_US' ) ? 'קרא כתבה' : 'READ ARTICLE';
              ?>
              <div>
                <a href="<?php the_permalink(); ?>" class="archivepage__img archivepage__img_0<?php echo $counter-3; ?>" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center / cover">
                  <span class="archivepage__desc">

                        <?= $button ?>

                    <!-- <?php the_field('button_title'); ?> -->
                  </span>
                </a>
                <h5 class="archivepage__img_title">
                  <?php
                    $heading = ( get_locale() != 'en_US' ) ? 'מאת מעיין בכר' : 'By Maayan Bachar';
                  ?>
                  <?php the_title(); ?> <p><?= $heading ?></p>
                </h5>
                <p class="archivepage__img_text">
                  <?php echo get_the_excerpt() ?>
                </p>
              </div>
            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="sn-contactus" class="sn-contactsus">
    <div id="crisisForm" class="container wow slideInRight">
      <?php
      $align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
      $heading = (get_locale() != 'en_US') ? 'שלח לנו הודעה | קבוצת גביש שחם' : 'Send Us a Message | Gavish Shaham Group ';
      ?>
      <h4 class="contactus__title <?= $align ?>"><?= $heading ?> </h4>
      <?php
      $text_area = (get_locale() != 'en_US') ? '[caldera_form id="CF5d9673b59f3b3"]' : '[caldera_form id="CF5dc27bf24912c"]';
      ?>
      <?php echo do_shortcode($text_area); ?>

    </div>

  </section>

</div>
<?php
get_sidebar();
get_footer();
?>
