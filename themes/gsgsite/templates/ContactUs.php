<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<div class="page">
	<!-- SectionContacts -->
	<header id="header" class="header" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/shutterstock_1081210097.jpg) center center / cover">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-11 col-xs-12 borderblockWrapper contactUsPageHeader">
					<div class="borderblock"></div>
					<div class="borderblock">
						<h2 id="tittleContact" class="header__title">
					    <?php echo the_title(); ?>
						</h2>
					</div>
					<div class="borderblock">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/decorContact.png" alt="" id="contactCircle" class="header__round_text">
						<div class="bottomLine"></div>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- .headerSection-->
<?php
$heading = ( get_locale() != 'en_US' ) ? 'שלח לנו הודעה | קבוצת גביש שחם - GSG - יזמות ונדל”ן' : 'Send Us a Message | Gavish Shaham Group - GSG - Real Estate Development';
$text = ( get_locale() != 'en_US' ) ? 'טלפון' : 'Phone';
$align = ( get_locale() != 'en_US' ) ? '' : 'text-left';
?>
	<section id="contactus" class="contactsus contactus-yellow">
		<div class="container wow slideInLeft">
			<h4 class="contactus__title <?= $align ?>"><?= $heading ?></h4>
			<?php
				$text_area = ( get_locale() != 'en_US' ) ? '[caldera_form id="CF5d9673b59f3b3"]' : '[caldera_form id="CF5dc27bf24912c"]';
			?>
			 <?php echo do_shortcode($text_area); ?>
			<div class="row contactus__links d-flex no-gutters">
					<div class="col-lg-4 col-md-12">
					    <div class="contactus__links_right-block">
    						<p class="contactus__text"><span><a href="tel:0722202070">072-220-20-70</a>
    						</span>
    						<?= $text ?>
    						</p>
    						<p  class="contactus__soc">
    							<span>OUR SOCIAL</span>
    							<a href="#" class="contactus__soc_icons">
    								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb_icon.png">
    							</a>
    							<a href="#" class="contactus__soc_icons">
    								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst_icon.png">
    							</a>

    						</p>
    					</div>
					</div>
					<div class="col-lg-4 col-md-12 text-center">
						<?php
							$heading = ( get_locale() != 'en_US' ) ? 'כמייל' : 'Email';
							$text = ( get_locale() != 'en_US' ) ? 'רח’ יפו 27, חיפה' : '27 Jaffa St., Haifa';
							$texts = ( get_locale() != 'en_US' ) ? 'כתובת' : 'Address';
							$text1 = ( get_locale() != 'en_US' ) ? 'פקס' : 'As a fax';
						?>
						<p class="contactus__text"><span><a href="mailto:office@gsg.co.il">OFFICE@GSG.CO.IL</a>
						</span>
						<?= $heading ?>
						</p>
					</div>
					<div class="col-lg-4 col-md-12">
					    <div class="contactus__links_left-block">
    						<p class="contactus__text"><span> <?= $text ?>
    						</span>
    						<?= $texts ?>
    						</p>
    						<p class="contactus__text"><span><a href="tel:0722202070">072-220-20-70</a>
    						</span>
    						<?= $text1 ?>
    						</p>
						</div>
					</div>
			</div>
		</div>
		<marquee scrollamount="5" class="contactus__lets">let's talk - let's talk - let's talk</marquee>
	</section>

</div>

<?php
get_footer();
?>
