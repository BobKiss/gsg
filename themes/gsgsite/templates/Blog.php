<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="archive">
  <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/samuel-zeller-YfrSHq3EnRg-unsplash.jpg) center bottom / cover">
    <!-- <a href="<?php echo get_bloginfo('url') ?>" class="logo">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>"> -->
    </a>
    <div class="borderBlock container borderWhite hebrew">
      <div class="row"></div>
      <div class="row">
        <div class="title" style="color:white !important;">חילוץ פרוייקט \nממשבר - חלק א’</div>
        <div class="littleTitle" style="color:white !important;">
          תמ"א 38 והתחדשות עירונית
        </div>
      </div>
      <div class="row"></div>
      <div class="decorCircle">
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
        );
        $posts = get_posts( $args );
        $counter = 0;
        $middle = count($posts) / 2;
        ?>
        <div class="col-md-6 col-sm-12">
          <div class="archivepage__wrap_right">
            <?php foreach( $posts as $post ): $counter++; ?>
              <?php
              setup_postdata($post);
              ?>
              <?php if ($counter > $middle) { continue; }
              ?>
              <div>
                <a href="<?php the_permalink(); ?>" class="archivepage__img archivepage__img_0<?php echo $counter; ?>" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center / cover">
                  <span class="archivepage__desc">

                        לכתבה המלאה

                    <!-- <?php the_field('button_title'); ?> -->
                  </span>
                </a>
                <h5 class="archivepage__img_title">
                  <?php the_title(); ?> <p>מאת מעיין בכר</p>
                </h5>
                <p class="archivepage__img_text">
                  <?php echo get_the_excerpt() ?>
                </p>
              </div>
            <?php endforeach; $counter = 0; ?>

            <?php wp_reset_postdata(); ?>
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="archivepage__wrap_left">
            <?php foreach( $posts as $post ): $counter++; ?>
              <?php
              setup_postdata($post);
              ?>
              <?php if ($counter <= $middle) { continue; }
              ?>
              <div>
                <a href="<?php the_permalink(); ?>" class="archivepage__img archivepage__img_0<?php echo $counter-3; ?>" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center / cover">
                  <span class="archivepage__desc">

                    לכתבה המלאה

                    <!-- <?php the_field('button_title'); ?> -->
                  </span>
                </a>
                <h5 class="archivepage__img_title">
                  <?php the_title(); ?> <p>מאת מעיין בכר</p>
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
</div>
<?php
get_sidebar();
get_footer();
?>
