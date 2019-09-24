<?php
/*
Template Name: Supervision
*/
?>
<?php get_header(); ?>

<div class="page">

	<!-- SectionContacts -->
  
    <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/shane-mclendon-EN1tF2EG-50-unsplash.jpg) center center / cover">
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
  
		<!-- SectioSN-Intro -->

	<section class="sn-intro">
		<div class="container">
			<h4 class="sn-contactus__title text-right">קבוצת גביש שחם | ניהול ופיקוח  </h4>
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-sm-12">
					
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
		</div>
	</section>

</div>

<?php
get_footer();
?>
