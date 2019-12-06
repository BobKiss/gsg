<?php
/*
Template Name: GsgEnergy
*/
?>
<?php get_header(); ?>

<div class="page">

	<!-- SectionContacts -->

	<section id="headerSectionEnergy" class="headerSection" style="background: url(<?= get_template_directory_uri() . '/assets/images/gsgenergy.png' ?>) center center / cover; background-position: 0 0%;background-size: 100% 95%;background-repeat: no-repeat;">

		<div class="energy__borderBlock container bigPaddings borderBlock">
			<div class="row"></div>
			<div class="row">
				<?php if(wp_is_mobile()) { ?>
            <h1 id="main-title-energy" class="main-title">GSG ENERGY</h1>
        <?php } else { ?>
				<div class="title">
					<?php echo the_title(); ?>
				</div>
				<?php } ?>
			</div>
			<div class="row"></div>
			<img class="decorCircle__energy mobile-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/decorEnergy.png" alt="decorAbout">
		</div>
		<!--.borderBlock-->
	</section> <!-- .headerSection-->

	<!-- SectioSN-Intro -->

	<section id="sn-intro-energy" class="sn-intro">
		<div id="container-energy" class="container wow slideInRight">
			<?php
			$row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
			$title_reverse = (get_locale() != 'en_US') ? '' : 'sn-contactus__title-reverse';
			$topborder_class = (get_locale() != 'en_US') ? '' : 'sn-contactus__topborder-reverse';
			$heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם | ENERGY' : 'Gavish Shaham Group | ENERGY';
			$text = (get_locale() != 'en_US') ? 'מחלקת האנרגיה בקבוצת גביש שחם הינה בעלת ניסיון עשיר בתחום האנרגיה ובכלל זה בניהול והקמת תחנות תדלוק ברחבי הארץ. </br>
כיום מתמקדת פעילות החברה בייזום פרויקטים להקמת תחנות כוח פרטיות אשר מטרתן לספק חשמל זול יותר מחברת החשמל ולעודד את התחרות במשק החשמל בישראל. </br>
הצוות המקצועי שלנו פועל לקידום פרויקטים בתחום האנרגיה החל משלב איתור הקרקע (והתאמתה לפרויקט מסוג זה על פי הקריטריונים הקבועים) ועד להשלמת הפרויקט ומסירתו ללקוח.</br>
על פי החלטת הממשלה, משק החשמל בישראל צפוי להשתנות באופן ש 20% מצריכת החשמל בישראל יעבור לייצור באמצעות תחנות כוח פרטיות. החזון שלנו, להאיץ ולקדם הקמת תחנות כוח פרטיות אשר יספקו אנרגיה זולה לאזורי תעשיה, בתי מלון, בתי חולים וישובים.' : 'The energy department at Gavish Shaham Group has ample experience in the energy field, including in the planning and constructing gas stations across Israel.</br>  Now our activity is focused on developing projects for launching private power plants aiming to provide cheaper electricity than that of the Electricity Company and to promote competition in the electricity market in Israel.  Our team of professionals is working to promote projects in the energy field from identifying land (and preparing it for this type of project according to predefined criteria) through completion of the project and delivery to the client. According to the Government\'s decision, the Israeli electricity market is expected to change so that 20% of the consumption of electricity in Israel would be produced by private power plants. Our vision is to accelerate and advance the establishment of private power plants which would provide cheap energy to industrial zones, hotels, hospitals, and communities.  ';
			$align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
			?>
			<h4 id="energyYellow" class="sn-contactus__title <?= $title_reverse . ' ' . $align ?>"><?= $heading ?></h4>
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-sm-12">
					<div class="sn-contactus__topborder <?= $topborder_class ?>"></div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div id="YellowAreaEnergy" class="sn-contactus__area <?= $align ?>">
						<?= $text ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section-Gsgenergy -->
	<?php
	$heading = (get_locale() != 'en_US') ? 'מפת מתווה גז ארצית | ישראל' : 'National Gas Outline Map | Israel';
	$map_words = [
		// 'w1' => (get_locale() != 'en_US') ? 'מפת</br>מתווה</br>' : 'Gas </br>outline</br>',
		'w1' => (get_locale() != 'en_US') ? 'מפת</br>מתווה</br>' : 'Gas </br>outline</br>',
		'w2' => (get_locale() != 'en_US') ? 'הגז' : 'map',
	];
	?>

	<section id="sn-contactus" class="sn-contactsus mobile-none">
		<div class="container wow slideInLeft">
			<h4 class="gsg-energy__title"><?= $heading ?></h4>
			<div class="row d-flex no-gutters sectionMap">
				<div class="col-lg-4 col-md-12">

					<div class="gsg-energy__intro-wrap d-flex side-block__en">
						<div class="gsg-energy__intro_top"></div>
						<div class="gsg-energy__intro">
							<span>
								<p><?= $map_words['w1'] . $map_words['w2'] ?></p>
							</span>
							<div class="gsg-energy__intro_left"></div>
						</div>
						<div class="gsg-energy__intro_bottom"></div>
					</div>

				</div>
				<div class="col-lg-8 col-md-12">
					<div class="mapEnergyContainer">
						<div class="gsg-energy__map" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/gsgenergy-map.png) center center / cover">
							<!-- </div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Minus.svg" class="mapBtnMinus" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Plus.svg" class="mapBtnPlus" alt="">
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- SectionSN-Contactus -->

	<section id="sn-contactus" class="sn-contactsus">
		<div id="crisisForm" class="container wow slideInRight">
			<?php
			$heading = (get_locale() != 'en_US') ? 'שלח לנו הודעה | קבוצת גביש שחם' : 'Send Us a Message | Gavish Shaham Group ';
			?>
			<h4 class="contactus__title <?= $align ?>"><?= $heading ?> </h4>
			<?php
			$text_area = (get_locale() != 'en_US') ? '[caldera_form id="CF5d9673b59f3b3"]' : '[caldera_form id="CF5dc27bf24912c"]';
			?>
			<?php echo do_shortcode($text_area); ?>

		</div>

	</section>

</div>

<?php
get_footer();
?>
