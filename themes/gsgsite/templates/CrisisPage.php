<?php
/*
Template Name: Crisis Page
*/
?>
<?php get_header(); ?>

<div class="page">

  <!-- SectionContacts -->

  <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/samuel-zeller-YfrSHq3EnRg-unsplash.jpg) center bottom / cover">
    <a href="<?php echo get_bloginfo('url') ?>" class="logo">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
    </a>
    <div class="borderBlock container borderWhite hebrew">
      <div class="row"></div>
      <div class="row">
        <div class="title">
          <?php echo the_title(); ?>
        </div>
      </div>
      <div class="row"></div>
      <img class="decorCircle" src="<?php echo get_template_directory_uri(); ?>/assets/images/creses.png" alt="decorAbout">
    </div> <!--.borderBlock-->
  </section> <!-- .headerSection-->

  <!-- SectioSN-Intro -->

  <section class="sn-intro">
    <div class="container">
      <h4 class="sn-contactus__title text-right">קבוצת גביש שחם | ניהול ופיקוח</h4>
      <div class="row d-flex no-gutters">
        <div class="col-md-6 col-sm-12">

        </div>
        <div class="col-md-6 col-sm-12">
          <div class="sn-contactus__area text-right">
            ניהול נכון ומקצועי של פרויקט (מרגעיו הראשוניים והמוקדמים) ופיקוח יעיל ומקצועי עלעשרות אלפי יחידות בניה ופרויקטים נתקעים במשך שנים ארוכות או לא מתרוממים כלל בשל חסמים שונים (משפטיים, תכנוניים, בירוקרטיים או כלכליים). הסרת החסמים ופתרון הבעיות ביעילות ובמהירות, תוך מציאת הפתרונות האופטימליים, פעמים רבות, הם קריטיים לשמירה על כדאיותו וכלכליותו של הפרויקט.
            <p></p>
            בשל מורכבותם המשפטית, התכנונית והפיננסית של הפרויקטים בהם טיפלנו במהלך השנים, רכשנו מומחיות ייחודית לפתרון חסמים והסרת מכשולים, מורכבים ככל שיהיו. בכלל זה, אנו מתמחים במציאת פתרונות מימון לפרויקטים מורכבים ובניהול משברים בפרויקטים אשר נעצרו בעבם.
            <p></p>
            במסגרת זו אנו מסייעים לכונסי נכסים ובעלי תפקיד המתמנים על ידי בית המשפט, להשלמת פרויקטים שנתקעו ומרכזים עבורם את כלל הטיפול והליווי הדרוש להשלמת הפרויקט. כמו כן, אנו משתפים פעולה עם קרנות מימון שונות, אשר מלוות פרויקטים שהסתבכו ואנו מסייעים להם בחילוץ הפרויקט מהבוץ והשלמתו על הצד הטוב ביותר.
            <p></p>
            אנו לא נרתעים מפרויקטים מסובכים. חילוץ פרויקטים וקבלנים מקשיים, הסרת חסמים, מימון ופתרון מחלוקות משפטיות, אצלנו זו שיגרה. אנחנו אלופים בהכנת לימונדה! לוקחים פרויקטים מסובכים משפטית ותכנונית, עם קונפליקטים וחסמים רבים, ומצליחים להפוך את הלימון החמוץ ללימונדה רעננה ומתוקה.
            <p></p>
            את כל זה אנחנו עושים באמצעות צוות הקומנדו הייחודי שלנו, אשר פיתוח מומחיות רבה בפיתוח בפרויקטים משלב שינוי /תכנון התב"ע, דרך פתרון כל החסמים התכנוניים, הבירוקרטיים והמשפטיים ועד למסירת המוצר המוגמר והמותאם אישית ללקוח. הצוות שלנו מורכב מאנשי מקצוע מהטובים והמנוסים שיש בשוק, בתחומים שונים ומגוונים – מימון ופיננסים, תכנון והנדסה, משפט, עיצוב ואדריכלות, בארץ ובעולם.
            <p></p>
            אנו מזהים פוטנציאל והזדמנויות גם במקומות לא קונבנציונאליים, ומביאים את תפיסת העולם שלנו ואת העיצובים הייחודיים שלנו לכל מקום אליו אנו מגיעים. כל הפרויקטים שלנו, ללא קשר לגודלם, זוכים לטיפול אישי וצמוד של עורך דין, מהנדס ומנהל פרויקט, אשר מובילים את הפרויקט מרגעיו הראשונים ועד למסירתו ללקוח.
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
    <a href="#" class="contactus__upbtn"><i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
  </section>

</div>

<?php
get_footer();
?>
