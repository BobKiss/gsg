<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gsgsite
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row d-flex">
			<div class="footer__wrap">
				<div class="footer__menu d-flex justify-content-between">
					<?php
					while ( have_rows('top_line_menu_footer', 'options') ) : the_row();
					the_sub_field('sub_field_name');
					?>
					<a href="<?php the_sub_field('link'); ?>" class="footer__menu_item"><?php the_sub_field('title'); ?></a>
					<span class="footer__menu_sep"></span>
					<?php
				endwhile;
				?>
				<!-- <a href="#" class="footer__menu_item">אודות</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">פרוייקטים בארץ מיידיים</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">פרוייקטים  בארץ להשקעה</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">חו”ל GSG</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">ניהול ופיקוח</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">אנרגיה GSG</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">חילוץ פרוייקטים וניהול משברים</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">מהתקשורת</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">מגזין</a>
				<span class="footer__menu_sep"></span>
				<a href="#" class="footer__menu_item">צור קשר</a> -->
			</div>
			<div class="footer__links d-flex justify-content-between">
				<div class="footer__links_item">
					<?php
					$addresses = get_field('address_footer', 'options');
					$addr1 = $addresses['addr_1'];
					$addr2 = $addresses['addr_2'];
					$addr3 = $addresses['addr_3'];
					?>
					<?php echo $addr3; ?> <span class="footer__menu_sep"></span> <?php echo $addr2; ?>  <span class="footer__menu_sep"></span> <?php echo $addr1; ?>

				</div>
				<a href ="tel:<?php echo __('Phone', 'gsgsite'); ?>" class="footer__links_item"> <?php echo __('Phone', 'gsgsite'); ?> <span class="footer__menu_sep"></span><?php the_field('phone_number_footer', 'options'); ?></a>
				<a href ="mailto:<?php echo __('Mail', 'gsgsite');?>" class="footer__links_item"> <?php echo __('Mail', 'gsgsite'); ?> <span class="footer__menu_sep"></span><?php the_field('email_footer', 'options'); ?></a>
				<div class="footer__links_item" style="color:white;">
					<a class="<?php if (get_locale() !== 'he_IL') echo "currentLang"; ?>" href="?lang=en">ENGLISH</a>
					<span class="footer__menu_sep"></span>
					<a class="<?php if (get_locale() == 'he_IL') echo "currentLang"; ?>" href="?lang=he" style="margin-left:14px;">HEBREW</a>
						<p style="margin: 0 auto;"><?php echo __('Change language', 'gsgsite'); ?></p>
					</div>
					<div class="footer__links_item socials" style="color:white;">

						<a href="https://www.facebook.com/gavish.shaham/" style="margin-left:10px;">
							<!-- <svg type="image/svg+xml" data="SvgImg.svg" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/fb-white.svg" width="30" height="30" alt="image format png" />
						</svg> -->
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 56.69 56.69" style="enable-background:new 0 0 56.69 56.69;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#fff;}
								.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#fff;}
							</style>
							<g>
								<g>
									<g>
										<path class="st0" d="M28.35,56.67c-15.62,0-28.32-12.7-28.32-28.32c0-15.62,12.7-28.32,28.32-28.32
											c15.62,0,28.32,12.7,28.32,28.32C56.67,43.96,43.96,56.67,28.35,56.67z M28.35,3.07c-13.94,0-25.28,11.34-25.28,25.28
											c0,13.94,11.34,25.28,25.28,25.28c13.94,0,25.28-11.34,25.28-25.28C53.62,14.41,42.29,3.07,28.35,3.07z"/>
									</g>
									<g>
										<path class="st1" d="M23.91,28.48v16.41c0,0.24,0.19,0.43,0.43,0.43h6.1c0.24,0,0.43-0.19,0.43-0.43V28.21h4.42
											c0.22,0,0.41-0.17,0.43-0.39l0.42-5.03c0.02-0.25-0.18-0.46-0.43-0.46h-4.84v-3.57c0-0.84,0.68-1.51,1.51-1.51h3.41
											c0.24,0,0.43-0.19,0.43-0.43V11.8c0-0.24-0.19-0.43-0.43-0.43h-5.75c-3.38,0-6.11,2.74-6.11,6.11v4.85h-3.05
											c-0.24,0-0.43,0.19-0.43,0.43v5.03c0,0.24,0.19,0.43,0.43,0.43h3.05V28.48z"/>
									</g>
								</g>
							</g>
						</svg>
					</a>
					<a href="https://www.instagram.com/gavish_shaham_group/" style="margin-left:10px;">
						<!-- <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/insta-white.svg" width="30" height="30" alt="image format png" />
					</svg> -->
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 56.69 56.69" style="enable-background:new 0 0 56.69 56.69;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#ffffff;}
						</style>
						<g>
							<g>
								<path class="st0" d="M28.35,56.59C12.77,56.59,0.1,43.92,0.1,28.35C0.1,12.77,12.77,0.1,28.35,0.1
									c15.58,0,28.25,12.67,28.25,28.25C56.59,43.92,43.92,56.59,28.35,56.59z M28.35,2.78c-14.1,0-25.56,11.47-25.56,25.56
									c0,14.1,11.47,25.56,25.56,25.56s25.56-11.47,25.56-25.56C53.91,14.25,42.44,2.78,28.35,2.78z M37.87,16.89
									c-1.15,0-2.09,0.94-2.09,2.09s0.94,2.09,2.09,2.09c1.15,0,2.09-0.94,2.09-2.09S39.03,16.89,37.87,16.89z M28.58,19.57
									c-4.84,0-8.78,3.94-8.78,8.78s3.94,8.78,8.78,8.78s8.78-3.94,8.78-8.78S33.42,19.57,28.58,19.57z M28.58,33.97
									c-3.1,0-5.62-2.52-5.62-5.62s2.52-5.62,5.62-5.62s5.62,2.52,5.62,5.62S31.68,33.97,28.58,33.97z M46.3,21.05
									c0-5.91-4.8-10.71-10.71-10.71H21.45c-5.92,0-10.71,4.79-10.71,10.71v14.14c0,5.91,4.8,10.71,10.71,10.71h14.14
									c5.92,0,10.71-4.79,10.71-10.71V21.05z M42.94,35.19c0,4.06-3.29,7.36-7.36,7.36H21.45c-4.06,0-7.36-3.29-7.36-7.36V21.05
									c0-4.06,3.29-7.36,7.36-7.36h14.14c4.06,0,7.36,3.29,7.36,7.36V35.19z"/>
							</g>
						</g>
					</svg>
				</a>

				<p style="margin: 0 auto;"><?php echo __('Our social', 'gsgsite'); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12 d-flex justify-content-center">
		<a href="<?php echo get_bloginfo('url') ?>" class="footer__logo">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/WhiteLogo.png" alt="<?php echo get_bloginfo('name') ?>">
		</a>
	</div>
</div>
<a href="#page" class="footer__upbtn">
	<img src="<?php bloginfo('template_url'); ?>/assets/images/upbtn.png" width="100" height="100" alt="image format png" />
</a>
</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
