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
          <div class="title">
            WHO WE ARE\nWHAT WE DO
          </div>
        </div>
        <div class="row"></div>
        <img class="decorCircle" src="<?php echo site_url() ?>/wp-content/uploads/2019/08/decorAbout.png" alt="decorAbout">
      </div> <!--.borderBlock-->
    </section> <!-- .headerSection-->

    <section class="aboutYellow wow slideInLeft">
            <div class="titleContainer">
        <div class="title">קבוצת גביש שחם | פרופיל חברה</div>
      </div>
      <div class="container">


        <div class="row">
          <div class="col-12 col-md-6">
        <div class="part">
          <p>את כל זה אנו מצליחים לעשות בזכות צוות הקומנדו הייחודי שלנו, אשר פיתח מומחיות רבה בפיתוח פרויקטים משלב שינוי/ תכנון התב"ע, דרך פתרון כל החסמים התכנוניים הבירוקרטיים והמשפטיים ועד למסירת המוצר המוגמר והמותאם אישית לכל לקוח.</p>
          <p>תפיסת העולם שלנו ואת העיצובים הייחודיים שלנו לכל מקום אליו אנו מגיעים. כל הפרויקטים שלנו, ללא קשר לגודלם, זוכים לטיפול אישי וליווי צמוד של עורך דין, מהנדס ומנהל פרויקט. אשר מובילים את הפרויקט מרגעיו הראשונים ועד למסירתו ללקוח.</p>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="part">
          <p>קבוצת גביש שחם היא חברה יזמית בתחום הנדל"ן המתמחה בתכנון ובניית פרויקטים קונספטואליים ייחודיים, מעוצבים ומותאמים אישית. בפרויקטים שאנו בונים אנו מיישמים את תפיסת העולם היסודית שלנו, "החיים קצרים" ו"חיים רק פעם אחת", וממצים מהחיים את כל הטוב שיש. מסיבה זו, אנו דוגלים בארכיטקטורה ועיצוב מוקפדים, חדשניים ויצירתיים ובמפרטים מפנקים וחלומיים. אנחנו מעניקים ללקוחותינו יותר מקירות מעוצבים ומפרטים יוקרתיים, את הבתים שלנו אנו יוצרים עם נשמה, ומתאימים אותם אישית לסיפור ולעולם הפרטי של כל אחד מלקוחותינו. לחלומות, לאהבות, לתחביבים ולפנטזיות שרק תעזו לחלום.</p>
          <p>אנו לא נרתעים מפרויקטים מורכבים. חילוץ פרויקטים מקשיים, הסרת חסמים, מימון, ופתרון מחלוקות משפטיות, אצלנו זו שיגרה.  אנחנו אלופים בהכנת לימונדה! לוקחים פרויקטים מסובכים משפטית ותכנונית, עם קונפליקטים וחסמים רבים, ומצליחים להפוך את הלימון החמוץ ללימונדה מתוקה ורעננה.</p>
        </div>
      </div>
    </div>
      </div>
    </section>

    <section class="aboutMap wow slideInRight">
      <div class="titleContainer">
        <div class="title">קבוצת גביש שחם | מפת פעילות בארץ</div>
      </div>
      <div class="container">
        <div class="mapSection">
          <iframe src="https://snazzymaps.com/embed/192528" width="100%" height="380px" style="border:none;"></iframe>
        </div> <!-- .mapSection-->
        <div class="titleSection">
          <div class="row"></div>
          <div class="row mapTitleRow">
            <div class="mapTitle">
              מפת<br>
              פעילות<br>
              בארץ<br>
            </div>
          </div>
          <div class="row"></div>
          <img class="additionalImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutUsMapCircle.png" alt="">
        </div> <!-- .titleSection -->
      </div>
    </section>

    <section class="activityAreas wow slideInLeft">
      <div class="titleContainer">
        <div class="title">קבוצת גביש שחם | תחומי פעילות</div>
      </div>

      <div class="titleContainer content">
				<div class="list">
					<?php
					while ( have_rows('activity_areas') ) : the_row();
						?>
            <div class="singleParagraph">
              <div class="pTitle"><?php the_sub_field('title'); ?></div>
              <div class="pContent">
								<?php the_sub_field('content'); ?>
              </div>
            </div>
					<?php
					endwhile;
					?>
        </div>
      </div>
    </section>

    <section class="managmentBoard wow slideInRight">
      <div class="titleContainer">
        <div class="title">קבוצת גביש שחם | הנהלה</div>
      </div>

      <div class="container">
        <div class="board">
					<?php
					while ( have_rows('managment_board') ) : the_row();
						?>
            <div class="member">
              <div class="image">
                <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
              </div>
              <div class="memberTitle"><?php the_sub_field('title'); ?></div>
              <div class="memberDescription"><?php the_sub_field('description'); ?></div>
            </div>
					<?php
					endwhile;
					?>
        </div>
      </div>
    </section>

    <section class="partneers">
      <div class="titleContainer">
        <div class="title">שותפים לדרך</div>
      </div>

      <div class="sliderPartneers">
				<?php
				while ( have_rows('partneers') ) : the_row();
					?>
          <div>
            <a href="<?php echo get_sub_field('link'); ?>" target="_blank" class="singlePartneer">
              <img src="<?php echo get_sub_field('image');?>" alt="<?php echo get_sub_field('link');?> ">
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
