<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>

<div class="page">
  <div class="aboutUsPageWrapper">
    <section class="headerSection" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/aboutUsBg.jpg)">
      <div class="borderBlock container">
        <div class="row"></div>
        <div class="row">
          <div id="aboutus-title" class="title">
            WHO WE ARE\nWHAT WE DO
          </div>
        </div>
        <div class="row"></div>
        <img id="aboutCircle" class="decorCircle mobile-none" src="<?php echo site_url() ?>/wp-content/uploads/2019/08/decorAbout.png" alt="decorAbout">
      </div>
      <!--.borderBlock-->
    </section> <!-- .headerSection-->

    <section class="aboutYellow wow slideInLeft">
      <div class="titleContainer">
        <?php
        $row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
        $heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם | פרופיל חברה' : 'Gavish Shaham Group | Company Profile';
        ?>
        <div class="title <?= $row_direction ?>"><?= $heading ?></div>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-12 col-md-6">
            <div class="part bold">
              <?php
              $heading = (get_locale() != 'en_US') ? 'הצוות שלנו מורכב מאנשי מקצוע מהטובים והמנוסים שיש בשוק, בתחומים שונים ומגוונים- מימון ופיננסים, תכנון והנדסה, משפט, עיצוב ואדריכלות, בארץ ובעולם.' : 'Our team is made up of the best and most experienced professional on the market, covering different and diverse fields - financing, planning and engineering, legal experts, design and architecture, both in Israel and around the world.';
              $text = (get_locale() != 'en_US') ? 'אנו מזהים פוטנציאל והזדמנויות גם במקומות לא קונבנציונאליים, ומביאים את תפיסת העולם שלנו ואת העיצובים הייחודיים שלנו לכל מקום אליו אנו מגיעים. כל הפרויקטים שלנו, ללא קשר לגודלם, זוכים לטיפול אישי וליווי צמוד של עורך דין, מהנדס ומנהל פרויקט. אשר מובילים את הפרויקט מרגעיו הראשונים ועד למסירתו ללקוח.' : 'We can identify potential and opportunity even in unconventional places, and bring in our world view and unique designs anywhere we go. All our projects, regardless of size, are personally handled and monitored by a lawyer, an engineer, and a project manager. These professionals lead and manage the project from inception to delivery. ';
              $align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
              ?>
              <p class="<?= $align ?>"><?= $heading ?></p>
              <p class="<?= $align ?>"><?= $text ?></p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="part">
              <?php
              $heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם היא חברה יזמית בתחום הנדל"ן המתמחה בתכנון ובניית פרויקטים קונספטואליים ייחודיים, מעוצבים ומותאמים אישית. בפרויקטים שאנו בונים אנו מיישמים את תפיסת העולם היסודית שלנו, "החיים קצרים" ו"חיים רק פעם אחת", וממצים מהחיים את כל הטוב שיש. מסיבה זו, אנו דוגלים בארכיטקטורה ועיצוב מוקפדים, חדשניים ויצירתיים ובמפרטים מפנקים וחלומיים. אנחנו מעניקים ללקוחותינו יותר מקירות מעוצבים ומפרטים יוקרתיים, את הבתים שלנו אנו יוצרים עם נשמה, ומתאימים אותם אישית לסיפור ולעולם הפרטי של כל אחד מלקוחותינו. לחלומות, לאהבות, לתחביבים ולפנטזיות שרק תעזו לחלום.' : 'Gavish Shaham Group is a real estate development company specializing in planning and building unique concept projects which are designed and tailored individually. In our projects which implement our fundamental values, "life is short" and "you only live once", taking advantage of all that life has to offer. That\'s why we believe in meticulous architecture and design which are both innovative and creative, as well as in decadent, dreamy finishings. We offer our clients more than just carefully-designed walls and high-end fixtures. We create our homes with our hearts, and tailor them to the personal story and to the private experience of each of our clients. To the dreams, loves, hobbies, and fantasies you may only dare to dream of.    ';
              $text = (get_locale() != 'en_US') ? 'אנו לא נרתעים מפרויקטים מורכבים. חילוץ פרויקטים מקשיים, הסרת חסמים, מימון, ופתרון מחלוקות משפטיות, אצלנו זו שיגרה.  אנחנו אלופים בהכנת לימונדה! לוקחים פרויקטים מסובכים משפטית ותכנונית, עם קונפליקטים וחסמים רבים, ומצליחים להפוך את הלימון החמוץ ללימונדה מתוקה ורעננה.
את כל זה אנו מצליחים לעשות בזכות צוות הקומנדו הייחודי שלנו, אשר פיתח מומחיות רבה בפיתוח פרויקטים משלב שינוי/ תכנון התב"ע, דרך פתרון כל החסמים התכנוניים הבירוקרטיים והמשפטיים ועד למסירת המוצר המוגמר והמותאם אישית לכל לקוח.' : 'We are not put off by complex projects. Pulling out stuck projects, removing barriers, financing, and resolving legal disputes - for us that\'s another day at the office. When life gives us lemons, we are the best lemonade makers around! We take legally- and architecturally-complex projects, with many conflicts and barriers, and manage to make sweet, fresh lemonade out of that sour lemon. We do all this thanks to our unique commando team, which has developed ample expertise in developing projects from the planning permit phase, through removing all planning, bureaucratic, and legal barriers, until the final, personally-tailored product is delivered.   ';
              $align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
              ?>
              <p class="<?= $align ?>"><?= $heading ?></p>
              <p class="<?= $align ?>"><?= $text ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="aboutMap wow slideInRight">
      <div class="titleContainer">
        <?php
        $row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
        $heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם | מפת פעילות בארץ' : 'Gavish Shaham Group | Israel Activity Map';
        $map_words = [
          'w1' => (get_locale() != 'en_US') ? 'מפת' : 'Map',
          'w2' => (get_locale() != 'en_US') ? 'פעילות' : 'activity',
          'w3' => (get_locale() != 'en_US') ? 'בארץ' : 'in the country',
        ]
        ?>
        <div class="title <?= $row_direction ?>"><?= $heading ?></div>
      </div>
      <div class="container about-us-map">

        <!-- Map section -->
        <div class="mapSection">
          <iframe src="https://snazzymaps.com/embed/192528" width="100%" height="100%" style="border:none;"></iframe>
        </div>
        <!-- Map section end -->

        <!-- Title section -->
        <div class="titleSection">
          <div class="gsg-energy__intro_top"></div>
          <div class="gsg-energy__intro">
            <span>
              <p>
                <?= $map_words['w1'] ?><br>
                <?= $map_words['w2'] ?><br>
                <?= $map_words['w3'] ?><br>
              </p>
            </span>
            <div class="gsg-energy__intro_left"></div>
          </div>
          <div class="gsg-energy__intro_bottom"></div>
          <img id="map-circle" class="additionalImage mobile-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutUsMapCircle.png" alt="">
        </div>
        <!-- Title section end -->

      </div>
    </section>

    <section class="activityAreas wow slideInLeft">
      <div class="titleContainer">
        <?php
        $row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
        $heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם | תחומי פעילות' : 'Gavish Shaham Group | Areas of Activity';
        ?>
        <div class="title <?= $row_direction ?>"><?= $heading ?></div>
      </div>

      <div class="titleContainer content">
        <div class="list flex-row-reverse">

          <div class="list-column-1">
            <?php while (have_rows('activity_areas_first')) : the_row(); ?>
              <div class="singleParagraph">
                <div class="pTitle <?= $align ?>"><?php the_sub_field('title'); ?></div>
                <div class="pContent <?= $align ?> ">
                  <?php the_sub_field('content'); ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="list-column-2">
            <?php while (have_rows('activity_areas_second')) : the_row(); ?>
              <div class="singleParagraph">
                <div class="pTitle <?= $align ?>"><?php the_sub_field('title'); ?></div>
                <div class="pContent <?= $align ?>">
                  <?php the_sub_field('content'); ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>

        </div>
      </div>
    </section>

    <!-- <section class="managmentBoard wow slideInRight">
      <div class="titleContainer">
        <?php
        $row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
        $heading = (get_locale() != 'en_US') ? 'קבוצת גביש שחם | הנהלה' : 'Shaham Crystal Group | management board';
        ?>
        <div class="title <?= $row_direction ?>"><?= $heading ?></div>
      </div>

      <div class="container">
        <div class="board">
					<?php
          while (have_rows('managment_board')) : the_row();
            ?>
            <div class="member">
              <div class="image">
                <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
              </div>
              <div class="memberTitle <?= $align ?>"><?php the_sub_field('title'); ?></div>
              <div class="memberDescription <?= $align ?>"><?php the_sub_field('description'); ?></div>
            </div>
					<?php
          endwhile;
          ?>
        </div>
      </div>
    </section> -->

    <section class="partneers">
      <div class="titleContainer">
        <?php
        $row_direction = (get_locale() != 'en_US') ? '' : 'flex-row-reverse';
        $heading = (get_locale() != 'en_US') ? 'שותפים לדרך' : 'Gavish Shaham Group | Our Partners';
        ?>
        <div class="title <?= $row_direction ?>"><?= $heading ?></div>
      </div>

      <div class="sliderPartneers" dir="rtl">
        <?php
        while (have_rows('partneers')) : the_row();
          ?>
          <div>
            <a href="<?php echo get_sub_field('link'); ?>" target="_blank" class="singlePartneer">
              <img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('link'); ?> ">
            </a>
          </div>
        <?php
        endwhile;
        ?>
      </div> <!-- .sliderPartneers-->
    </section>
  </div>

</div>

<?php
get_footer();
?>
