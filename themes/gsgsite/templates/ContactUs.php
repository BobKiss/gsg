<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<div class="page">
	<!-- SectionContacts -->
	<section class="headerSection" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/aboutUsBg.jpg)">
		<a href="<?php echo get_bloginfo('url') ?>" class="logo">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
		</a>
		<div class="borderBlock container">
			<div class="row"></div>
			<div class="row">
				<div class="title">
					<?php echo the_title(); ?>
				</div>
			</div>
			<div class="row"></div>
			<img class="decorCircle" src="<?php echo site_url() ?>/wp-content/uploads/2019/08/decorAbout.png" alt="decorAbout">
		</div> <!--.borderBlock-->
	</section> <!-- .headerSection-->
	<section id="contactus" class="contactsus">
		<div class="container">
			<h4 class="contactus__title">	שלח לנו הודעה | קבוצת גביש שחם - GSG - יזמות ונדל”ן</h4>
				<div class="row contactus__wrap d-flex no-gutters">
					<div class="col-md-6 col-sm-12">
						<div class="contactus__inp">
							<input type="text" id="fname" name="firstname" placeholder="שם">
							<input type="text" id="lname" name="lastname" placeholder="טלפון">
							<input type="mail" id="mail" name="mail" placeholder="מייל">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="contactus__area">
							<textarea id="subject" name="subject" placeholder="כתבו לנו" style="height:210px;"></textarea>
							<input type="submit" value="שלח >" class="contactus_btn">
						</div>
					</div>
				</div>
			<div class="row contactus__wrap d-flex no-gutters">
					<div class="col-md-4 col-sm-12 text-right">
						<p class="contactus__text">
						כתובת | רח’ יפו 27, חיפה
						</p>
						<p class="contactus__soc">
						כפקס | 072-220-20-80
						</p>
					</div>
					<div class="col-md-4 col-sm-12 text-center">
						<p class="contactus__text">
						כמייל | OFFICE@GSG.CO.IL
						</p>
					</div>
					<div class="col-md-4 col-sm-12 text-left">
						<p class="contactus__text">
						מטלפון | 072-220-20-70
						</p>
						<p  class="contactus__soc">
							<a href="#" class="contactus__soc_icons">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst_icon.png">
							</a>
							<a href="#" class="contactus__soc_icons">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb_icon.png">
							</a>
							<span>OUR SOCIAL</span>
						</p>
					</div>
			</div>
		</div>
		<marquee scrollamount="5" class="contactus__lets">let's talk - let's talk - let's talk</marquee>
		<a href="#" class="contactus__upbtn"><i class="fa fa-angle-up" aria-hidden="true"></i>
		</a>
	</section>

</div>

<?php
get_footer();
?>
