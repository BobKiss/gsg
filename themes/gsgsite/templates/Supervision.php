<?php
/*
Template Name: Supervision
*/
?>
<?php get_header(); ?>

<div class="page">

	<!-- SectionContacts -->

    <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/shane-mclendon-EN1tF2EG-50-unsplash.jpg) center center / cover">
		<!-- <a href="<?php echo get_bloginfo('url') ?>" class="logo">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>"> -->
		</a>
		<div class="energy__borderBlock borderBlock container borderWhite big hebrew ">
			<div class="row"></div>
			<div class="row">
				<div class="title" style="color:white !important;">
          <?php the_title() ?>
        </div>
			</div>
			<div class="row"></div>
      <div class="decorCircle">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/decorCrysis.png" alt="decorAbout">
      </div>
		</div> <!--.borderBlock-->
	</section> <!-- .headerSection-->

		<!-- SectioSN-Intro -->
<?php
	$row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
	$heading = ( get_locale() != 'en_US' ) ? 'קבוצת גביש שחם | ניהול ופיקוח' : 'Gavish Shaham Group | Management and Supervision';
	$text = ( get_locale() != 'en_US' ) ? "
ניהול נכון ומקצועי של פרויקט (מרגעיו הראשוניים והמוקדמים) ופיקוח יעיל ומקצועי על איכות העבודה ועמידה בלוחות זמנים, הם מפתח להצלחה של פרויקט בניה ומפתח לשמירה על רמת הרווחיות המתוכננת.
מחלקת הניהול והפיקוח שלנו עוסקת בניהול והובלת הליכי תכנון, ניהול ביצוע ופיקוח על פרויקטים בהיקפים שונים. הן עבור רשויות מקומיות והן עבור לקוחות פרטיים, הן ביחס לעבודות בניה והן ביחס לעבודות תשתית ופיתוח.  </br>
הצוות המקצועי שלנו כולל מהנדסי ביצוע, מנהלי פרויקטים, מנהלי עבודה, מתכננים ויועצים אשר מעניקים מעטפת מקצועית מושלמת לכל פרויקט.
צוות זה מלווה על ידי המחלקה המשפטית אשר מלווה את הליכי התכנון ומסייעת בפתרון בעיות בהן נתקל הצוות המקצועי בעת ביצוע הפרויקט, בכלל זה הסרת התנגדויות והסרת חסמים." : "A proper, professional management for a project (from its inception) and
effective and professional supervision of the quality of works and timelines are key in the success of a construction project and are key for
maintaining the planned level of profit. Our management and supervision department engages in the management of planning procedures, construction,
 and supervision in projects of various scopes. Both for municipalities and for private clients, both with respect to construction works and with
 respect to infrastructure and development works.  Our team of professionals includes construction engineers, project managers, work managers,
 planners, and consultants who offer a perfect professional envelope to every project.  This team is advised by the legal department which advises
 on planning proceedings and helps with resolving problems facing the professional team while conducting the project, including removing objections
 and barriers.";
$align = ( get_locale() != 'en_US' ) ? 'text-right' : 'text-left';
?>

	<section class="sn-intro">
		<div class="container wow slideInLeft">
			<h4 class="sn-contactus__title <?= $align ?>"style="margin-right: auto"><?= $heading ?></h4>
			<div class="row d-flex <?= $row_direction ?>">
				<div class="col-md-6 col-sm-12">
					<div class="sn-contactus__topborder"></div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="sn-contactus__area <?= $align ?>">
						<?= $text ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SectionSN-Contactus -->
	<section id="sn-contactus" class="sn-contactsus">
		<div class="container wow slideInRight  <?= $row_direction ?>">
			<?php
				$heading = ( get_locale() != 'en_US' ) ? 'שלח לנו הודעה | קבוצת גביש שחם' : 'Send Us a Message | Gavish Shaham Group ';
			?>
			 <h4 class="contactus__title <?= $align ?>"><?= $heading ?> </h4>
       <?php  echo do_shortcode('[caldera_form id="CF5d9673b59f3b3"]'); ?>
		</div>
	</section>

</div>

<?php
get_footer();
?>
