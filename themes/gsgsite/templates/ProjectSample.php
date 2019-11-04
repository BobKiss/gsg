<?php
/*
Template Name: Sample Project Page
*/
?>
<?php get_header(); ?>

<div class="page SamplePAGE">
	<!-- SectionContacts -->
	<section class="barkan-header">

		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-12 barkan-header__img">
				    <img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/10/sampPrTopImg.png">
				</div>
<?php
	$heading = ( get_locale() != 'en_US' ) ? 'אורנית BU | על הפרוייקט' : 'Oranit BU | About the Project';
	$text = ( get_locale() != 'en_US' ) ? 'מתחם מגורים יוקרתי, ראשון מסוגו,
	 מבית קבוצת גביש שחם.פרוייקט בוטיק ייחודי המציע בתי קונספט ופרימיום מודרניים ומעוצבים עם
	 מפרט איכותי ועשיר במיוחד. לבית החדש שלכם תוכלו לבחור "חליפה" מבין המפרטים הקונספטואליים
	 המדהימים שתפרנו במיוחד בשבילכם והמותאמים לאלו שאוהבים את החיים ולא מוותרים על אף רגע.
	למי שמעריך איכות.
	למי שהזמן שלו יקר.
	למי שחושב על העתיד.' : 'A high-end, first-of-its-kind housing development by Gavish Shaham Group. This unique boutique project offers carefully-designed modern concept and premium houses with a particularly rich, high-quality level of detail. You can choose a "tailored suit" for your new home from the amazing conceptual detail packages we have crafted especially for you and which are suitable for those who enjoy life and never let a moment go buy.  For those who appreciate quality. For those whose time is valuable. For those who think of the future.';
	$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>
<?php
	$heading = ( get_locale() != 'en_US' ) ? 'אורנית BU | מדדים חברתיים' : 'Oranit BU | Project Details';
?>
				<p class="barkan-header__text"><?= $heading ?></p>
			</div>
		</div>
	</section>
	<section class="barkan-about">
		<div class="container wow slideInLeft">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column">
					<h5 class="barkan-about__title <?= $align ?>">
						<?= $heading ?>
					</h5>
					<p class="barkan-about__text <?= $align ?>"><?= $text ?></p>
<?php
$heading = ( get_locale() != 'en_US' ) ? 'אורנית BU  | פירוט הפרוייקט' : 'Barkan Mul Hayam | Project Details';
$text = ( get_locale() != 'en_US' ) ? '110 דופלקסים למכירה ביישוב אורנית | גודל דופלקס החל מ180 מ”ר ועד 270 מ”ר | מחיר הדופלקס כולל מפרט איכותי ועשיר | אפשרות לתוספת חבילות פרימיום וקונספט לשדרוג חווית המגורים | אפשרות לתוספת בריכה | אפשרות לתופסת קומת מרתף.
<br>
<br>
תכנון | גביש שחם
<br>
ניהול הפרוייקט | גביש שחם' : '110 duplex units for sale at Oranit | Duplex sizes range from 180 to 270 square meters | Duplex prices include a high-quality, rich list of fixtures | Options for adding premium and concept packages to upgrade the living experience | Optional swimming pool | Optional basement level.  Planning | Gavish Shaham  Project Management | Gavish Shaham';
$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>
					<h5 class="barkan-about__title <?= $align ?>">
						<?= $heading ?>
					</h5>
					<p class="barkan-about__text <?= $align ?>"><?= $text ?></p>
				</div>
<?php
	$heading = ( get_locale() != 'en_US' ) ? 'אורנית BU  | על האזור' : 'Oranit BU | About the Region';
	$text = ( get_locale() != 'en_US' ) ? 'הישוב אורנית הינו ישוב עירוני קהילתי הממוקם במורדות המערביים של הרי השומרון מצפון לראש העין ומזרחית להוד השרון. הישוב מעורב.
הישוב מורכב ברובו מבתים צמודי קרקע ושוכן לצד נוף יערות קרן קיימת בישראל. <br>
בישוב מרכז מסחרי, חנויות, בתי קפה, קופ“ח, גני ילדים, בתי ספר, יסודי עד תיכון, מרכזי חוגים, מרכז ספורט ועוד.<br>
לפי נתוני הלמ"ס נכון לסוף 2016, לאורנית דירוג של 8 מתוך 10, במדד חברתי-כלכלי – אשכול לשנת 2015.<br>
הישוב ממוקם סמוך לצירים ראשיים (כביש 5 וכביש 6), בקרבת תחנת רכבת ובסביבת מרכזי תעסוקה גדולים, פארק היי-טק מפותח ומרכזי בילוי.<br>'
: 'Oranit is an urban community located on the southern slopes of the Samaria mountains, north of Rosh Ha Ayin and east of Hod HaSharon. This is a mixed community. It is made up mostly of detached houses and lays next to Jewish National Fund forests. The community has a commercial center, shops, cafes, a clinic, kindergartens, schools - elementary through high school, centers for afternoon classes, a sports center, and more. According to Central Statistics Bureau data as of late 2016, Oranit is ranked 8 out of 10 on the Social-Economic Index. The community is located close to main roads (highways no. 5 and 6), close to a train station, and within reach of large employment centers, a high-tech park and entertainment centers.';
$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>
				<div class="col-lg-6 d-flex flex-column">
					<h5 class="barkan-about__title <?= $align ?>">
						<?= $heading ?>
					</h5>
					<p class="barkan-about__text <?= $align ?>"><?= $text ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="barkan-slider wow slideInRight">
		<div class="barkan-slider__img">
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/10/R-2-FINAL.png">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/10/Rectangle-9-copy.png">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/10/R-2-FINAL.png">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/10/Rectangle-9-copy.png">
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="barkan-about wow slideInLeft">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<h5 class="barkan-about__title">אורנית BU | על הפרוייקט</h5>
					<p class="barkan-about__text">
						מדד חברתי כלכלי מתוך אתר 10 - אתר “מדלן”
					</p>
				</div>
			</div> -->
			<section class="barkan-about wow slideInLeft statlines">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'אורנית BU | על הפרוייקט' : 'Oranit BU | Social Indices';
$text = ( get_locale() != 'en_US' ) ? 'מדד חברתי כלכלי מתוך אתר 10 - אתר “מדלן”' : 'Social-economic index 10 - from the Madlan website ';
?>
					<h5 class="barkan-about__title"><?= $heading ?></h5>
					<p class="barkan-about__text"><?= $text ?>
					</p>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col-12 d-inline-flex justify-content-between flex-direction-middle barkan-about__stat_wrap">
					<p class="barkan-about__stattext">
						<strong>גילאי התושבים</strong> | בני 16 עד 64
					</p>
					<div class="barkan-about__statline"><span class="statline_01"></span></div><p>60%</p>
				</div>
				<div class="col-12 d-inline-flex justify-content-between flex-direction-middle barkan-about__stat_wrap">
					<p class="barkan-about__stattext">
						<strong>תעסוקה</strong> | צווארון לבן
					</p>
					<div class="barkan-about__statline"><span class="statline_02"></span></div><p>42%</p>
				</div>
				<div class="col-12 d-inline-flex justify-content-between flex-direction-middle barkan-about__stat_wrap">
					<p class="barkan-about__stattext">
						<strong>השכלה</strong> | אקדמאים
					</p>
					<div class="barkan-about__statline"><span class="statline_03"></span></div><p>30%</p>
				</div>
			</div> -->
			<div class="row" style="padding-top: 20px;">
				<div class="col-12 col-md-3">
					<p class="barkan-about__stattext">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'גילאי התושבים' : 'Resident ages';
$text = ( get_locale() != 'en_US' ) ? '| בני 16 עד 64' : '| 16 to 64 ';
?>
						<strong><?= $heading ?></strong> <?= $text ?>
					</p>
				</div>
				<div class="col-12 col-md-9 d-inline-flex justify-content-between flex-direction-start  align-items-center">
					<div class="barkan-about__statline"><span class="statline_01"></span></div><p id="percent-1" style="font-weight: 900">60%</p>
				</div>
			</div>
			<div class="row" style="padding-top: 20px;">
				<div class="col-12 col-md-3 d-inline-flex">
					<p class="barkan-about__stattext">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'תעסוקה' : 'Employment';
$text = ( get_locale() != 'en_US' ) ? '| צווארון לבן' : '| White Collar ';
?>
						<strong><?= $heading ?></strong> <?= $text ?>
					</p>
				</div>
				<div class="col-12 col-md-9 d-inline-flex justify-content-between flex-direction-start  align-items-center">
					<div class="barkan-about__statline"><span class="statline_02"></span></div><p id="percent-2" style="font-weight: 900;">42%</p>
				</div>
			</div>
			<div class="row" style="padding-top: 20px;">
				<div class="col-12 col-md-3 d-inline-flex">
					<p class="barkan-about__stattext">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'השכלה' : 'Education';
$text = ( get_locale() != 'en_US' ) ? '| אקדמאים' : '| University Graduates ';
?>
						<strong><?= $heading ?></strong> <?= $text ?>
					</p>
				</div>
				<div class="col-12 col-md-9 d-inline-flex justify-content-between flex-direction-start  align-items-center">
					<div class="barkan-about__statline"><span class="statline_03 project-sample"></span></div><p id="percent-3__alt" style="font-weight: 900;">30%</p>
				</div>
			</div>
			<div class="row">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'אורנית BU | מפת אזור' : 'Oranit BU | Map of the Region';
?>
				<div class="col-md-6 col-12"><h5 class="barkan-about__title"><?= $heading ?></h5></div>
				<div class="col-12">
					<iframe src="https://snazzymaps.com/embed/192528" width="100%" height="380px" style="border:none;"></iframe>
				</div>
			</div>
		</div>

		<div class="houseScreen">
			<a href=" <?= home_url('/product/apartment-room-1/'); ?>">
				<img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/10/projSimp.png" alt="projSimp">
			</a>
		</div>
	</section>

	<!-- SectionContacts -->

	<section id="sn-contactus" class="sn-contactsus">
		<div class="container wow slideInRight">
			<h4 class="contactus__title">שלח לנו הודעה | קבוצת גביש שחם   </h4>
			 <?php  echo do_shortcode('[caldera_form id="CF5d9673b59f3b3"]'); ?>
			 <div class="contactsus-after-line">
				 <div><a href="#">< לפרוייקט הקודם</a></div>
				 <div class="middleText">חזרה לעמוד פרוייקטים מיידיים</div>
				 <div><a href="#">לפרוייקט הבא ></a></div>
			 </div>
		</div>
	</section>

</div>


<?php
get_footer();
?>
