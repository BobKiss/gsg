<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gsgsite
*/

get_header();
?>

<div class="archive">
  <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/samuel-zeller-YfrSHq3EnRg-unsplash.jpg) center bottom / cover">
    <a href="<?php echo get_bloginfo('url') ?>" class="logo">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
    </a>
    <div class="borderBlock container borderWhite hebrew">
      <div class="row"></div>
      <div class="row">
        <div class="title">חילוץ פרוייקט \nממשבר - חלק א’</div>
        <div class="littleTitle">
          תמ"א 38 והתחדשות עירונית
        </div>
      </div>
      <div class="row"></div>
      <div class="decorCircle">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" alt="decorAbout">
      </div>
    </div> <!--.borderBlock-->
  </section> <!-- .headerSection-->
  <!-- <header id="header" class="header" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/samuel-zeller-YfrSHq3EnRg-unsplash.jpg) center bottom / cover">
  <div class="container">
  <div class="row">
  <div class="col-12">
  <div class="blog__borderblock"></div>
  <div class="blog__borderblock"><h2 class="header__title">
  חילוץ פרוייקט
  ממשבר - חלק א’
</h2></div>
<div class="blog__borderblock">
<img class="decorCircle" src="<?php echo site_url() ?>/wp-content/themes/gsgsite/assets/images/blogcirc.png" alt="archivecircle">
</div>
</div>
</div>
</div>
</header> headerSection-->

<section id="archivepage" class="archivepage">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="archivepage__wrap_right">
          <?php if ( have_posts() ) :
					// Start the Loop.
  				    while ( have_posts() ) :
      					the_post();

                ?>
                <div>
                  <div class="archivepage__img archivepage__img_01" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/archive_02.jpg) center center / cover">
                    <a href="#">
                      <span class="archivepage__desc">
                        לכתבה המלאה
                      </span>
                    </a>
                  </div>
                  <h5 class="archivepage__img_title">
                    איך מתמודדים עם דייר סרבן  <p>מאת מעיין בכר</p>
                  </h5>
                  <p class="archivepage__img_text">
                    עשרות אלפי יחידות בניה ופרויקטים נתקעים במשך שנים ארוכות או לא מתרוממים כלל בשל חסמים שונים (משפטיים, תכנוניים, בירוקרטיים או כלכליים). הסרת החסמים ופתרון הבעיות ביעילות ובמהירות, תוך מציאת הפתרונות האופטימליים, פעמים רבות, הם קריטיים לשמירה על כדאיותו וכלכליותו של הפרויקט.


                  </p>
                </div>
                <?php

				       endwhile;
  					// Previous/next page navigation.
  					?><div class="navigation"><p><?php posts_nav_link(); ?></p></div><?php
  				else :
  					// If no content, include the "No posts found" template.
  					get_template_part( 'content', 'none' );
  				endif;
  				?>


        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="archivepage__wrap_left">
          <div>
            <div class="archivepage__img archivepage__img_01" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/archive_01.jpg) center center / cover">
              <a href="http://gsg.coelix.live/2019/10/02/%d7%90%d7%99%d7%9a-%d7%9e%d7%aa%d7%9e%d7%95%d7%93%d7%93%d7%99%d7%9d-%d7%a2%d7%9d-%d7%93%d7%99%d7%99%d7%a8-%d7%a1%d7%a8%d7%91%d7%9f/?lang=he">
                <span class="archivepage__desc">
                  לכתבה המלאה
                </span>
              </a>
            </div>
            <h5 class="archivepage__img_title">
              איך מתמודדים עם דייר סרבן  <p>מאת מעיין בכר</p>
            </h5>
            <p class="archivepage__img_text">
              עשרות אלפי יחידות בניה ופרויקטים נתקעים במשך שנים ארוכות או לא מתרוממים כלל בשל חסמים שונים (משפטיים, תכנוניים, בירוקרטיים או כלכליים). הסרת החסמים ופתרון הבעיות ביעילות ובמהירות, תוך מציאת הפתרונות האופטימליים, פעמים רבות, הם קריטיים לשמירה על כדאיותו וכלכליותו של הפרויקט.


            </p>
          </div>

        </div>
      </div>
    </div>
  </section>



  <?php
  get_sidebar();
  get_footer();
