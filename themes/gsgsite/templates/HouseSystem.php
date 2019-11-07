<?php
/*
Template Name: House System
*/
?>

<?php get_header(); ?>
<section id="housesys" class="housesys">
			<div class="container-fluid">
				<div class="row no-gutters">
						<div class="housesys__img" id="housesysImg">
							<img id="mainImg" src="<?php bloginfo('template_url'); ?>/assets/images/r2house.png">
							<div class="housesys__menu_nav">
								<button onclick="history.back()" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-left-hs.svg"></button>
								<button onclick="history.forward()" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-right-hs.svg"></button>
								<button class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/plus-hs.svg"></button>
								<button onclick="document.getElementById('housesysImg').style.width = '74%'" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/minus-hs.svg"></button>
								<button onclick="document.getElementById('housesysImg').style.width = '100%'" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/download-hs.svg"></button>
								<!-- <button onclick="history.back()" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-left.png"></button>
								<button onclick="history.forward()" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-right.png"></button>
								<button class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/plus.png"></button>
								<button onclick="document.getElementById('housesysImg').style.width = '74%'" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/minus.png"></button>
								<button onclick="document.getElementById('housesysImg').style.width = '100%'" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/download.png"></button> -->
							</div>
						</div>

						<div class="housesys__menu">
							<div class="housesys__menu_wrap">
								<h6 class="housesys__menu_title">בחר נכס</h6>
								<div class="housesys__menu_desc">
									<div><span class="housesys__menu_count">122</span><p class="housesys__menu_text">בחר מגרש</p></div>
									<div><span class="housesys__menu_count">חזית</span><p class="housesys__menu_text">בחר תצוגת נכס</p></div>
									<div><span class="housesys__menu_count">ללא</span><p class="housesys__menu_text">בחר קומה</p></div>
									<div><span class="housesys__menu_count">ללא</span><p class="housesys__menu_text">בחר דירה</p></div>
									<div><span class="housesys__menu_count">ללא</span><p class="housesys__menu_text">בחר חבילה</p></div>
								</div>
								<button onclick="document.getElementById('mainImg').src='<?php bloginfo('template_url'); ?>/assets/images/flatplan.png'" class="housesys__menu_btn">הצג שרטוט נכס</button>
								<button onclick="document.getElementById('mainImg').src='<?php bloginfo('template_url'); ?>/assets/images/flatdesc.png'" class="housesys__menu_btn" > הצג מפרט ומחירון</button>
								<button onclick="document.getElementById('mainImg').src='<?php bloginfo('template_url'); ?>/assets/images/flatint.png'" class="housesys__menu_btn" >הצג תמונות והדמיות</button>
								<button onclick="document.getElementById('mainImg').src='<?php bloginfo('template_url'); ?>/assets/images/flatdoc.png'" class="housesys__menu_btn" >הצג חבילות קונספט</button>
								<div class="housesys__menu_desc">
									<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">מחיר בסיס</p></div>
									<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">תוספת חבילה</p></div>
									<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">קוד הנחה</p></div>
									<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">מחיר סופי </p></div>
									<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">סה”כ דמי הרשמה</p></div>
								</div>
								<button class="housesys__offer_btn">לטופס הרשמה ותשלום דמי הרשמה ></button>

							</div>

						</div>

				</div>
			</div>
	</section>
	<!-- #sectionHousesys -->
<?php wp_footer(); ?>



