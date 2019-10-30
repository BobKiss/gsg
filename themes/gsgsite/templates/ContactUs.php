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
						<h2 class="header__title">
					    <?php echo the_title(); ?>
						</h2>
					</div>
					<div class="borderblock">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/decorContact.png" alt="" class="header__round_text">
						<div class="bottomLine"></div>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- .headerSection-->
	<section id="contactus" class="contactsus contactus-yellow">
		<div class="container wow slideInLeft">
			<h4 class="contactus__title">	שלח לנו הודעה | קבוצת גביש שחם - GSG - יזמות ונדל”ן</h4>
			 <?php echo do_shortcode('[caldera_form id="CF5d9673b59f3b3"]'); ?>
			<div class="row contactus__links d-flex no-gutters">
					<div class="col-lg-4 col-md-12">
					    <div class="contactus__links_right-block">
    						<p class="contactus__text"><span><a href="tel:0722202070">072-220-20-70</a>
    						</span>
    						מטלפון
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
						<p class="contactus__text"><span><a href="mailto:office@gsg.co.il">OFFICE@GSG.CO.IL</a>
						</span>
						כמייל
						</p>
					</div>
					<div class="col-lg-4 col-md-12">
					    <div class="contactus__links_left-block">
    						<p class="contactus__text"><span> רח’ יפו 27, חיפה
    						</span>
    						כתובת
    						</p>
    						<p class="contactus__text"><span><a href="tel:0722202070">072-220-20-70</a>
    						</span>
    						כפקס
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
