<?php
/**
 * Template Name: Thank You
 */
get_header();

$img_path = get_template_directory_uri() . '/assets/images/';
?>

<section id="thank-you" class="headerSection" style="background: #fff600; padding: 0;">
  <div class="container container-mobile">
    <div class="row">
      <div class="col d-flex">

        <a href="<?php echo get_bloginfo('url') ?>" class="logo logo-ty">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
        </a>

        <div class="thank-you-text">
          <!-- <img class="img-thank" src="<?= $img_path . 'thank.png' ?>" alt=""> -->
          <div class="img-thank" style="background-image: url(<?= $img_path . 'thank.png' ?>)"></div>
          <div class="d-flex">
            <!-- <img class="img-you" src="<?= $img_path . 'you.png' ?>" alt=""> -->
            <div class="img-you" style="background-image: url(<?= $img_path . 'you.png' ?>)"></div>
            <div class="thank-you-circle__alt">
              <img src="<?= $img_path . 'ty-circle.png' ?>" alt="">
              <img src="<?= $img_path . 'hand.png' ?>" alt="">
            </div>
            <div class="d-flex flex-column justify-content-end">
              <p>
                אחד מנציגנו יצור עמך קשר בהקדם!
              </p>
              <a class="ty-btn" href="<?= home_url(); ?>">חזור לעמוד הבית</a>
            </div>
          </div>
        </div>

        <div class="thank-you-circle">
          <img src="<?= $img_path . 'ty-circle.png' ?>" alt="">
          <img src="<?= $img_path . 'hand.png' ?>" alt="">
        </div>

      </div>
    </div>
  </div>
</section>

<?php
get_footer();
