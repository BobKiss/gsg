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
<?php
if( get_locale() == 'en_US' ) {
	$class = 'transformed';
}
?>
<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row d-flex">
			<div class="footer__wrap">
				<div class="footer__menu d-flex justify-content-between <?= $class ?>">
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
						<?php get_template_part('template-parts/svg', 'facebook') ?>
					</a>
					<a href="https://www.instagram.com/gavish_shaham_group/" style="margin-left:10px;">
						<!-- <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/insta-white.svg" width="30" height="30" alt="image format png" />
					</svg> -->
					<?php get_template_part('template-parts/svg', 'instagram') ?>
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
