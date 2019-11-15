<?php
/*
Template Name: Page 404
*/
?>

<?php
get_header();
?>

<div class="page404">
		<section class="header404" style="background: #fff600">
      <div class="borderBlock b404 container d-flex flex-column" style="position: relative;">
			<?php

			?>
			<div class="container404">
				<div class="black404">
					<img class="block404" src="<?php echo site_url() ?>\wp-content\themes\gsgsite\assets\images\404.png" alt="decorAbout">
					<?php
						$heading = ( get_locale() != 'en_US' ) ? 'אופס!</br>   משהו השתבש....' : 'OPPS, SOMETHING</br> GONE WRONG!';
						$text = (get_locale() != 'en_US' ) ? 'לחצו כאן לחזרה לאתר' : 'DONT WORRY,</br> JUST CLICK HERE';
					?>
					<p class="text404"><?= $heading ?></p>
				</div>
					<div class="vector" style="background-image: url(<?php echo site_url() ?>/wp-content/themes/gsgsite/assets/images/Vector.png"></div>
			</div>
				<div class="dontworry">
					<a class="view-btn" href="<?php echo get_bloginfo('url') ?>">
						<p class="btn-content"><?= $text ?></p>
					</a>
					<div class="borderline"></div>
					<img class="circle404" src="<?php echo site_url() ?>\wp-content\themes\gsgsite\assets\images\UNDER CONSTRUCTION.png" alt="decorAbout">
				</div>
				<div class="vectorL" style="background-image: url(<?php echo site_url() ?>/wp-content/themes/gsgsite/assets/images/Vector.png"></div>
      </div> <!--.borderBlock-->
    </section> <!-- .headerSection-->

</div>

<?php
get_footer();
