<?php
/*
Template Name: Supervision
*/
?>
<?php get_header(); ?>

<div class="page">

	<!-- SectionContacts -->

    <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/shane-mclendon-EN1tF2EG-50-unsplash.jpg) center center / cover">
		<a href="<?php echo get_bloginfo('url') ?>" class="logo">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
		</a>
		<div class="energy__borderBlock borderBlock container borderWhite big hebrew ">
			<div class="row"></div>
			<div class="row">
				<div class="title">
          ניהול ופיקוח
        </div>
			</div>
			<div class="row"></div>
      <div class="decorCircle decorCircle__energy">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/decorCrysis.png" alt="decorAbout">
      </div>
		</div> <!--.borderBlock-->
	</section> <!-- .headerSection-->

		<!-- SectioSN-Intro -->

	<section class="sn-intro">
		<div class="container">
			<h4 class="sn-contactus__title">קבוצת גביש שחם | ניהול ופיקוח  </h4>
			<div class="row d-flex">
				<div class="col-md-6 col-sm-12">
					<div class="sn-contactus__topborder"></div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="sn-contactus__area text-right">
ניהול נכון ומקצועי של פרויקט (מרגעיו הראשוניים והמוקדמים) ופיקוח יעיל ומקצועי על איכות העבודה ועמידה בלוחות זמנים, הם מפתח להצלחה של פרויקט בניה ומפתח לשמירה על רמת הרווחיות המתוכננת.
מחלקת הניהול והפיקוח שלנו עוסקת בניהול והובלת הליכי תכנון, ניהול ביצוע ופיקוח על פרויקטים בהיקפים שונים. הן עבור רשויות מקומיות והן עבור לקוחות פרטיים, הן ביחס לעבודות בניה והן ביחס לעבודות תשתית ופיתוח.  </br>
הצוות המקצועי שלנו כולל מהנדסי ביצוע, מנהלי פרויקטים, מנהלי עבודה, מתכננים ויועצים אשר מעניקים מעטפת מקצועית מושלמת לכל פרויקט.
צוות זה מלווה על ידי המחלקה המשפטית אשר מלווה את הליכי התכנון ומסייעת בפתרון בעיות בהן נתקל הצוות המקצועי בעת ביצוע הפרויקט, בכלל זה הסרת התנגדויות והסרת חסמים.
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SectionSN-Contactus -->

	<section id="sn-contactus" class="sn-contactsus">
		<div class="container">
			<h4 class="contactus__title">שלח לנו הודעה | קבוצת גביש שחם   </h4>
       <?php  echo do_shortcode('[caldera_form id="CF5d9673b59f3b3"]'); ?>
		</div>
	</section>

</div>

<?php
get_footer();
?>
