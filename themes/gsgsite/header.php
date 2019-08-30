<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsgsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gsgsite' ); ?></a>

	<header id="masthead" class="site-header">

	</header><!-- #masthead -->

<aside class="sideMenu">
	<div class="sideMenuItem">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
		<i class="fal fa-times"></i></div>
		<div class="sideMenuContent">
			<div class="menuBlock">

			</div>
			<div class="infoRow">
				<div class="infoCol">
					<p><?php _e('Change language','GsgStrings'); ?></p>
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
				<div class="infoCol">

				</div>
				<div class="infoCol">

				</div>
				<div class="infoCol">

				</div>
			</div>
			<div class="socialsRow">
				<span><?php _e('Our social:','GsgStrings'); ?></span>
				<img src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
			</div>
		</div>
	<div class="sideMenuItem"><i class="fal fa-envelope"></i></div>
	<div class="sideMenuItem"><?php echo ICL_LANGUAGE_CODE; ?></div>
</aside>


	<div id="content" class="site-content">
