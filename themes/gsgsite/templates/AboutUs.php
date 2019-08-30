<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>

<div class="page">

  <div class="aboutUsPageWrapper">
    <section class="aboutUsFirstScreen" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/aboutUsBg.jpg)">
      <a href="<?php echo get_bloginfo('url') ?>" class="logo">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
      </a>
      <div class="borderBlock container">
        <div class="row"></div>
        <div class="row">
          <div class="title">Who we are<br>What we do</div>
        </div>
        <div class="row"></div>
        <img class="decorCircle" src="<?php echo site_url() ?>/wp-content/uploads/2019/08/decorAbout.png" alt="decorAbout">
      </div> <!--.borderBlock-->
    </section> <!-- .aboutUsFirstScreen-->

    <section class="aboutYellow">
      <div class="titleContainer">
        <div class="title">Shaham Crystal Group | Company profile</div>
      </div>
      <div class="container">
        <div class="part">
          <p>קבוצת גביש שחם היא חברה יזמית בתחום הנדל"ן המתמחה בתכנון ובניית פרויקטים קונספטואליים ייחודיים, מעוצבים ומותאמים אישית. בפרויקטים שאנו בונים אנו מיישמים את תפיסת העולם היסודית שלנו, "החיים קצרים" ו"חיים רק פעם אחת", וממצים מהחיים את כל הטוב שיש. מסיבה זו, אנו דוגלים בארכיטקטורה ועיצוב מוקפדים, חדשניים ויצירתיים ובמפרטים מפנקים וחלומיים. אנחנו מעניקים ללקוחותינו יותר מקירות מעוצבים ומפרטים יוקרתיים, את הבתים שלנו אנו יוצרים עם נשמה, ומתאימים אותם אישית לסיפור ולעולם הפרטי של כל אחד מלקוחותינו. לחלומות, לאהבות, לתחביבים ולפנטזיות שרק תעזו לחלום.</p>
          <p>אנו לא נרתעים מפרויקטים מורכבים. חילוץ פרויקטים מקשיים, הסרת חסמים, מימון, ופתרון מחלוקות משפטיות, אצלנו זו שיגרה.  אנחנו אלופים בהכנת לימונדה! לוקחים פרויקטים מסובכים משפטית ותכנונית, עם קונפליקטים וחסמים רבים, ומצליחים להפוך את הלימון החמוץ ללימונדה מתוקה ורעננה.</p>
        </div>
        <div class="part">
          <p>את כל זה אנו מצליחים לעשות בזכות צוות הקומנדו הייחודי שלנו, אשר פיתח מומחיות רבה בפיתוח פרויקטים משלב שינוי/ תכנון התב"ע, דרך פתרון כל החסמים התכנוניים הבירוקרטיים והמשפטיים ועד למסירת המוצר המוגמר והמותאם אישית לכל לקוח.</p>
          <p>תפיסת העולם שלנו ואת העיצובים הייחודיים שלנו לכל מקום אליו אנו מגיעים. כל הפרויקטים שלנו, ללא קשר לגודלם, זוכים לטיפול אישי וליווי צמוד של עורך דין, מהנדס ומנהל פרויקט. אשר מובילים את הפרויקט מרגעיו הראשונים ועד למסירתו ללקוח.</p>
        </div>
      </div>
    </section>

    <section class="aboutMap">
      <div class="titleContainer">
        <div class="title">Shaham Crystal Group | Activity map in Israel</div>
      </div>
      <div class="container">
        <div class="mapSection">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45488.42264829626!2d34.760255635002856!3d32.07067567860087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4ca6193b7c1f%3A0xc1fb72a2c0963f90!2z0KLQtdC70Ywt0JDQstC40LIsINCY0LfRgNCw0LjQu9GM!5e0!3m2!1sru!2sua!4v1567152065704!5m2!1sru!2sua" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
        </div> <!-- .titleSection -->
      </div>
    </section>

    <section class="activityAreas">
      <div class="titleContainer">
        <div class="title">Shaham Crystal Group | Areas of activity</div>
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

    <section class="managmentBoard">
      <div class="titleContainer">
        <div class="title">Shaham Crystal Group | Management board</div>
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
  </div>

</div>

<?php
get_footer();
?>
