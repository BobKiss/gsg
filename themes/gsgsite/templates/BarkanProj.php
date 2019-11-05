<?php
/*
Template Name: Barkan Project
*/
?>
<?php get_header(); ?>

<div class="page barkanPAGE">
	<!-- SectionContacts -->
	<section class="barkan-header">

		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-12 barkan-header__img">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock124.jpg">
				</div>
<?php
$heading = ( get_locale() != 'en_US' ) ? 'ברקן מול הים | בןקן' : 'Barkan infront of the sea | Barkan';
?>
				<p class="barkan-header__text"><?= $heading ?> </p>
			</div>
		</div>
	</section>
	<section class="barkan-about">
		<div class="container wow slideInLeft">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'ברקן מול הים | על הפרוייקט' : 'Barkan Mul Hayam | About the Project';
$text = ( get_locale() != 'en_US' ) ? 'פרויקט ברקן מול הים, הינו פרויקט הרחבה קהילתית הכולל 62 מגרשים בגודל של כחצי דונם המיועדים לבניית וילות צמודות קרקע. הפרויקט ממוקם באזור הצפון מערבי של הישוב (הגבעה הצפונית) ופונה לנוף הררי מרהיב.
	נשארו 3 מגרשים אחרונים בלבד!' : 'The Barkan Mul Hayam project is a community expansion project which includes 62 land plots of 500 square meters each intended for building detached houses. The project is located in the north-western area of the community (the northern hill) and faces a spectacular mountainous view.  Only 3 plots remain!';
$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>
					<h5 class="barkan-about__title <?= $align ?>">
						<?= $heading ?>
					</h5>
					<p class="barkan-about__text <?= $align ?>"><?= $text ?>
					</p>
<?php
$heading = ( get_locale() != 'en_US' ) ? 'ברקן מול הים | פירוט הפרוייקט' : 'Barkan Mul Hayam | Project Details';
$text = ( get_locale() != 'en_US' ) ? '62 מגרשים למכירה ביישוב ברקן | גודל מגרש החל מ500 מ”ר ועד 700 מ”ר | מחיר השטח כולל פיתוח ומיסי מקום | אפשרות לבניית וילה צמודה קרקע בשומרון' : '62 plots for sale at Barkan | Plot sizes range from 500 to 700 square meters | The land price includes development and local taxes | An option for building a detached villa in Samaria';
$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>
					<h5 class="barkan-about__title <?= $align ?>">
						<?= $heading ?>
					</h5>
					<p class="barkan-about__text <?= $align ?>"><?= $text ?>
					</p>
<?php
$heading = ( get_locale() != 'en_US' ) ? 'הורדת חוברת הפרוייקט- PDF' : 'Download project files- PDF';
?>
					<a href="<?= get_template_directory_uri() . '/NewPDF.pdf' ?>" class="barkan-about__btn"><?= $heading ?></a>
				</div>
				<div class="col-lg-6 d-flex flex-column">
<?php
$heading = ( get_locale() != 'en_US' ) ? 'ברקן מול הים | על האזור' : 'Barkan Mul Hayam | About the Region';
$text = ( get_locale() != 'en_US' ) ? 'הישוב נוסד ב1981, ביושב כ400 משפחות. בישוב אוכלוסיה איכותית המנהלת חיי קהילה משותפים. בישוב תינוקיות, מעון, גני ילדים, ובית ספר יסודי, בישוב בריכה, מגרשי טניס ופעילות תרבותית ענפה.' : 'The community was founded in 1981 and is home to approximately 400 families. The community has a high-quality community which conducts a shared community life. The community has daycare, kindergartens and an elementary school, a swimming pool, tennis courts, and robust cultural activities.';
$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>
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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_125.jpg">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/192489-OXNYW4-292.jpg">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_109365068-min.jpg">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_126.jpg">
				</div>
			</div>
		</div>
	</section>

	<?php
		$row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
		$statline_reverse = (get_locale() != 'en_US') ? '' : 'statline-reverse';
		$statline_container_reverse = (get_locale() != 'en_US') ? '' : 'barkan-about__statline-reverse';
		$align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
	?>
	<section class="barkan-about wow slideInLeft">
		<div class="container">
			<div class="row <?= $row_direction ?>">
				<div class="col-md-6 col-12 <?= $align ?>">
					<?php
					$heading = ( get_locale() != 'en_US' ) ? 'ברקן מול הים | מדדים חברתיים' : 'Barkan Mul Hayam | Social Indicators';
					$text = ( get_locale() != 'en_US' ) ? 'מדד חברתי כלכלי מתוך אתר 10 - אתר “מדלן”' : 'Social-economic index 10 - from the Madlan website';
					?>
					<h5 class="barkan-about__title"><?= $heading ?></h5>
					<p class="barkan-about__text"><?= $text ?>
					</p>
				</div>
			</div>

			<!-- Statlines start -->
			<div class="statlines-block statlines">
				<div class="row <?= $row_direction ?>" style="padding-top: 20px;">
					<div class="col-12 col-md-3">
						<?php
						$heading = ( get_locale() != 'en_US' ) ? 'גילאי התושבים' : 'Resident ages';
						$text = ( get_locale() != 'en_US' ) ? '| בני 16 עד 45' : '| 16 to 45';
						?>
						<p class="barkan-about__stattext"><strong><?= $heading ?></strong><?= $text ?></p>
					</div>
					<div class="col-12 col-md-9 d-inline-flex justify-content-between flex-direction-start align-items-center <?= $row_direction ?>">
						<div class="barkan-about__statline <?= $statline_container_reverse ?>"><span class="statline_01 <?= $statline_reverse ?>"></span></div><p id="percent-1" class="percent-number" style="font-weight: 900">60<span>%</span></p>
					</div>
				</div>
				<div class="row <?= $row_direction ?>" style="padding-top: 20px;">
					<div class="col-12 col-md-3 d-inline-flex">
						<?php
						$heading = ( get_locale() != 'en_US' ) ? 'תעסוקה' : 'Employment';
						$text = ( get_locale() != 'en_US' ) ? '| צווארון לבן' : '| White Collar';
						?>
						<p class="barkan-about__stattext"><strong><?= $heading ?></strong><?= $text ?></p>
					</div>
					<div class="col-12 col-md-9 d-inline-flex justify-content-between flex-direction-start  align-items-center <?= $row_direction ?>">
						<div class="barkan-about__statline <?= $statline_container_reverse ?>"><span class="statline_02 <?= $statline_reverse ?>"></span></div><p id="percent-2" class="percent-number" style="font-weight: 900;">42%</p>
					</div>
				</div>
				<div class="row <?= $row_direction ?>" style="padding-top: 20px;">
					<div class="col-12 col-md-3 d-inline-flex">
						<?php
						$heading = ( get_locale() != 'en_US' ) ? 'השכלה' : 'Education';
						$text = ( get_locale() != 'en_US' ) ? '| אקדמאים' : '| University Graduates';
						?>
						<p class="barkan-about__stattext"><strong><?= $heading ?></strong><?= $text ?></p>
					</div>
					<div class="col-12 col-md-9 d-inline-flex justify-content-between flex-direction-start  align-items-center <?= $row_direction ?>">
						<div class="barkan-about__statline <?= $statline_container_reverse ?>"><span class="statline_03 <?= $statline_reverse ?>"></span></div><p id="percent-3" class="percent-number" style="font-weight: 900;">80%</p>
					</div>
				</div>
			</div>
			<!-- Statlines end -->

			<div class="row <?= $row_direction ?>">
				<?php
				$heading = ( get_locale() != 'en_US' ) ? 'ברקן מול הים | מפת האזור' : 'Barkan Mul Hayam | Map of the Region';
				?>
				<div class="col-md-6 col-12 <?= $align ?>"><h5 class="barkan-about__title"><?= $heading ?></h5></div>
				<div class="col-12">
					<iframe src="https://snazzymaps.com/embed/192528" width="100%" height="380px" style="border:none;"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- SectionContacts -->

	<section id="sn-contactus" class="sn-contactsus">
		<div class="container wow slideInRight">
			<?php
				$heading = ( get_locale() != 'en_US' ) ? 'שלח לנו הודעה | קבוצת גביש שחם' : 'Send Us a Message | Gavish Shaham Group ';
			?>
			<h4 class="contactus__title"><?= $heading ?> </h4>
			 <?php  echo do_shortcode('[caldera_form id="CF5d9673b59f3b3"]'); ?>
			 <div class="contactsus-after-line">
				 <?php
					$left = ( get_locale() != 'en_US' ) ? '< לפרוייקט הקודם' : '< Previous project ';
					$middle = ( get_locale() != 'en_US' ) ? 'חזרה לעמוד פרוייקטים מיידיים' : 'Back to immediate projects page ';
					$right = ( get_locale() != 'en_US' ) ? 'לפרוייקט הבא >' : 'Next project > ';

				?>
				 <div><a href="#"><?= $left ?></a></div>
				 <div class="middleText"><?= $middle ?></div>
				 <div><a href="#"><?= $right ?></a></div>
			 </div>
		</div>
	</section>


</div>

<?php
get_footer();
?>
