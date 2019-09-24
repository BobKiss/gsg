<?php
/*
Template Name: GsgEnergy
*/
?>
<?php get_header(); ?>

<div class="page">

	<!-- SectionContacts -->
  
    <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/gsgenergy.png) center center / cover">
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
			<h4 class="sn-contactus__title text-right">קבוצת גביש שחם | ENERGY</h4>
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-sm-12">
					
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="sn-contactus__area text-right">מחלקת האנרגיה בקבוצת גביש שחם הינה בעלת ניסיון עשיר בתחום האנרגיה ובכלל זה בניהול והקמת תחנות תדלוק ברחבי הארץ. </br>
כיום מתמקדת פעילות החברה בייזום פרויקטים להקמת תחנות כוח פרטיות אשר מטרתן לספק חשמל זול יותר מחברת החשמל ולעודד את התחרות במשק החשמל בישראל. </br>
הצוות המקצועי שלנו פועל לקידום פרויקטים בתחום האנרגיה החל משלב איתור הקרקע (והתאמתה לפרויקט מסוג זה על פי הקריטריונים הקבועים) ועד להשלמת הפרויקט ומסירתו ללקוח.</br>
על פי החלטת הממשלה, משק החשמל בישראל צפוי להשתנות באופן ש 20% מצריכת החשמל בישראל יעבור לייצור באמצעות תחנות כוח פרטיות. החזון שלנו, להאיץ ולקדם הקמת תחנות כוח פרטיות אשר יספקו אנרגיה זולה לאזורי תעשיה, בתי מלון, בתי חולים וישובים.
</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Section-Gsgenergy -->
	
	<section id="sn-contactus" class="sn-contactsus">
		<div class="container">
			<div class="row"><div class="col-sm-12 col-md-6"><h4 class="gsg-energy__title">מפת מתווה גז ארצית | ישראל</h4></div></div>
			<div class="row d-flex no-gutters">
				<div class="col-md-8 col-sm-12">
				    <div class="gsg-energy__map" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/gsgenergy-map.png) center center / cover">
				    </div>
				</div>
				<div class="col-md-4 col-sm-12">
				    <div class="gsg-energy__intro-wrap d-flex">
				        <div class="gsg-energy__intro_top"></div>
				        <div class="gsg-energy__intro">מפת 
מתווה
הגז</div>
                    <div class="gsg-energy__intro_bottom"></div>
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
