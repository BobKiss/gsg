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

<body <?php body_class(); ?> class="owerflow-hidden">
<div id="page" class="site">
    <a href="<?php echo get_bloginfo('url') ?>" class="logo">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
	</a>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gsgsite' ); ?></a>

	<aside class="sideMenu">
		<div class="sideMenuItem first">
			<img class="menuIcon" src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
			<i class="fal fa-times"></i>
		</div>
		<div class="sideMenuItem mailBlock">
			<a class="sideMenuMail" href="#">
				<i class="fal fa-envelope"></i>
				<span class="cross"></span>
			</a>
			<div class="popup">
				<div class="popupTitle">
					<?php the_field('sidebar_menu_form_title', 'options'); ?>
				</div>
				<div class="popupForm">
					<?php
					if (get_locale() == 'he_IL') {
						echo do_shortcode('[caldera_form id="CF5d9327667dc4c"]');
					} else {
						echo do_shortcode('[caldera_form id="CF5d9332cc693eb"]');
					}
					?>
				</div>
				<div class="popUpFooter">
					<div class="popupColumn">
						<div class="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhiteLogo.png" alt="">
						</div>
					</div>
					<div class="popupColumn">
						<div class="info">
							<div class="firstFow">
								<?php the_field('sidebar_menu_form_info_first_line', 'options'); ?>
							</div>
							<div class="firstFow">
								<?php the_field('sidebar_menu_form_info_second_line', 'options'); ?>
							</div>
						</div>
					</div>
					<div class="popupColumn">
						<a href="#" class="submitButton"><?php _e('Submit >') ?></a>
					</div>
				</div>
			</div>
		</div>
		<?php $lang = get_locale();
			if ($lang == 'en_US') {
				$linkToSwitch = '?lang=he';
			} else {
				$linkToSwitch = '?lang=en';
			}
		?>
		<div class="sideMenuItem"><a href="<?php echo $linkToSwitch; ?>" class="langName"><?php echo ICL_LANGUAGE_CODE; ?></a></div>
	</aside>

	<div class="sideMenuWrapper">
		<div class="sideMenuContent">
			<div class="menuBlock">
				<nav id="site-navigation" class="main-navigation">
					<div class="mainNavigationContainer">
							<?php
							wp_nav_menu( array(
								'menu' => 'Main menu 2',
								'menu_id' => 'primary-menu',
							) );
							?>
					</div>
				</nav>
			</div>
			<div class="infoRow">
			    <div class="infoCol">
					<p class="infoHeading"><?php _e('Change language','GsgStrings'); ?> </p>
					        <?php do_action('wpml_add_language_selector'); ?>
				</div>
				<div class="infoCol">
					<p class="infoHeading"><?php _e('Address','GsgStrings'); ?></p>
					<span><?php _e('27 Jaffa Street Haifa, Israel','GsgStrings'); ?></span>
				</div>
				<div class="infoCol">
					<p class="infoHeading"><?php _e('Phone','GsgStrings'); ?></p>
					<a href="tel:972722202070">+972-722-20-20-70</a>
				</div>
			    <div class="infoCol">
					<p class="infoHeading"><?php _e('Email','GsgStrings'); ?></p>
					<a href="mailto:office@gsg.co.il">office@gsg.co.il</a>
				</div>
			</div>
			<div class="socialsRow">
				<span><?php _e('Our social:','GsgStrings'); ?>
				<a href="<?php home_url('/somepage/'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/InstagramIcon.png" alt=""></a>
				<a href="<?php home_url('/somepage/'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/FacebookIcon.png" alt=""></a></span>
			</div>
		</div>
	</div>

	<div id="content" class="site-content">
