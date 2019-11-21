<?php
/*
  Template Name: Crisis Page
  */
get_header();
$align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
$row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
?>

<div class="page">

  <!-- SectionContacts -->

  <section class="headerSection" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/samuel-zeller-YfrSHq3EnRg-unsplash.jpg) center bottom / cover">
    <!-- <a href="<?php echo get_bloginfo('url') ?>" class="logo">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>"> -->
    </a>
    <div class="container borderBlock borderWhite hebrew" id="crisis-border">
      <div class="row"></div>
      <div class="row">
        <!-- <div class="title" style="color:white !important;">
          ניהול משברים וחילוץ\nפרוייקטים תקועים
        </div> -->
        <div id="crisis-title" class="title" style="color:white !important;">
          <?php the_title() ?>
        </div>
      </div>
      <div class="row"></div>
      <div id="crisis-circle" class="decorCircle crisis__decorCircle mobile-none">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/creses.png" alt="decorAbout">
      </div>
    </div>
    <!--.borderBlock-->
  </section> <!-- .headerSection-->

  <!-- SectioSN-Intro -->
  <?php
  $heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם | ניהול ופיקוח' : 'Gavish Shaham Group | Management and Supervision';
  $paragraph = (get_locale() != 'en_US') ? 'עשרות אלפי יחידות בניה ופרויקטים נתקעים במשך שנים ארוכות או לא מתרוממים כלל בשל חסמים שונים (משפטיים, תכנוניים, בירוקרטיים או כלכליים). הסרת החסמים ופתרון הבעיות ביעילות ובמהירות, תוך מציאת הפתרונות האופטימליים, פעמים רבות, הם קריטיים לשמירה על כדאיותו וכלכליותו של הפרויקט.<p></p>
בשל מורכבותם המשפטית, התכנונית והפיננסית של הפרויקטים בהם טיפלנו במהלך השנים, רכשנו מומחיות ייחודית לפתרון חסמים והסרת מכשולים, מורכבים ככל שיהיו. בכלל זה, אנו מתמחים במציאת פתרונות מימון לפרויקטים מורכבים ובניהול משברים בפרויקטים אשר נעצרו בעבם.<p></p>
במסגרת זו אנו מסייעים לכונסי נכסים ובעלי תפקיד המתמנים על ידי בית המשפט, להשלמת פרויקטים שנתקעו ומרכזים עבורם את כלל הטיפול והליווי הדרוש להשלמת הפרויקט. כמו כן, אנו משתפים פעולה עם קרנות מימון שונות, אשר מלוות פרויקטים שהסתבכו ואנו מסייעים להם בחילוץ הפרויקט מהבוץ והשלמתו על הצד הטוב ביותר.<p></p>
אנו לא נרתעים מפרויקטים מסובכים. חילוץ פרויקטים וקבלנים מקשיים, הסרת חסמים, מימון ופתרון מחלוקות משפטיות, אצלנו זו שיגרה. אנחנו אלופים בהכנת לימונדה! לוקחים פרויקטים מסובכים משפטית ותכנונית, עם קונפליקטים וחסמים רבים, ומצליחים להפוך את הלימון החמוץ ללימונדה רעננה ומתוקה.<p></p>
את כל זה אנחנו עושים באמצעות צוות הקומנדו הייחודי שלנו, אשר פיתוח מומחיות רבה בפיתוח בפרויקטים משלב שינוי /תכנון התב"ע, דרך פתרון כל החסמים התכנוניים, הבירוקרטיים והמשפטיים ועד למסירת המוצר המוגמר והמותאם אישית ללקוח. הצוות שלנו מורכב מאנשי מקצוע מהטובים והמנוסים שיש בשוק, בתחומים שונים ומגוונים – מימון ופיננסים, תכנון והנדסה, משפט, עיצוב ואדריכלות, בארץ ובעולם.<p></p>
אנו מזהים פוטנציאל והזדמנויות גם במקומות לא קונבנציונאליים, ומביאים את תפיסת העולם שלנו ואת העיצובים הייחודיים שלנו לכל מקום אליו אנו מגיעים. כל הפרויקטים שלנו, ללא קשר לגודלם, זוכים לטיפול אישי וצמוד של עורך דין, מהנדס ומנהל פרויקט, אשר מובילים את הפרויקט מרגעיו הראשונים ועד למסירתו ללקוח.' : "Tens of thousands of dwellings and projects get stuck for many years or never materialize due to different barriers (legal, planning, bureaucratic, or financial). Removing barriers and solving problems quickly and efficiently, while finding optimal solutions, are oftentimes critical for protecting the viability of a project.<p></p> Due to their legal, planning, and financial complexity of the projects we have handled over the years, we have acquired a unique expertise in the resolution of barriers and removal of barriers, whatever their degree of complexity. Among our other activities, we specialize in finding financing solutions for complex projects and in managing crises in halted projects.<p></p>  In this scope, we assist receivers and other court appointees in completing stuck projects and manage the complete handling and advisory services required to complete the project. In addition, we work with different financing funds, which offer services to projects in distress, and we help them in pulling the project out of the mud and in completing it in the best way possible.<p></p>  We are not put off by complex projects. Pulling out stuck projects, removing barriers, financing, and resolving legal disputes - for us that\'s another day at the office. We make the best lemonade when life gives us lemons! We take legally- and architecturally-complex projects, with many conflicts and barriers, and manage to make sweet, fresh lemonade out of that sour lemon.<p></p>  We do all this thanks to our unique commando team, which has developed ample expertise in developing projects from the planning permit phase, through removing all planning, bureaucratic, and legal barriers, until the final, personally-tailored product is delivered. Our team is made up of the best and most experienced professional on the market, covering different and diverse fields - financing, planning and engineering, legal experts, design and architecture, both in Israel and around the world.<p></p>  We can identify potential and opportunity even in unconventional places, and bring in our world view and unique designs anywhere we go. All our projects, regardless of size, are personally handled and monitored by a lawyer, an engineer, and a project manager, who manage the project from inception to delivery.";
  $title_reverse = (get_locale() != 'en_US') ? '' : 'sn-contactus__title-reverse';
  $topborder_class = (get_locale() != 'en_US') ? '' : 'sn-contactus__topborder-reverse'
  ?>
  <section class="sn-intro">
    <div class="container wow slideInLeft">
      <h4 class="sn-contactus__title <?= $align . ' ' . $title_reverse ?>"><?= $heading ?></h4>
      <div class="row d-flex no-gutters crisisreverse">
        <div class="col-md-6 col-sm-12">
          <div class="sn-contactus__topborder <?= $topborder_class ?>"></div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="sn-contactus__area <?= $align ?>">
            <?= $paragraph ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SectionSN-Contactus -->
  <?php
  $heading = (get_locale() != 'en_US') ? 'שלח לנו הודעה | קבוצת גביש שחם' : 'Send Us a Message | Gavish Shaham Group - GSG - Real Estate Development';
  ?>
  <section id="sn-contactus" class="sn-contactsus sn-contactsus-crisis">
    <div id="crisisForm" class="container wow slideInRight">
      <h4 class="contactus__title <?= $align ?>"><?= $heading ?></h4>
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