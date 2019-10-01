<?php
/*
Template Name: Immediate Projects
*/
?>
<?php get_header(); ?>

<div class="page after-header-padding">

  <div class="big-projects-list container-1">
    <?php for($i = 0; $i < 4; $i++) : ?>
      <div class="list-item">
        <div class="item-desc">
          <div class="item-bg" style="background-image: url('/wp-content/themes/gsgsite/assets/images/projects/placeholder1.jpg')">
            <div class="item-info">
              <div class="title">ברקן מול הים | ברקן</div>
              <div class="excerpt">פרויקט ברקן מול הים, הינו פרויקט הרחבה קהילתית הכולל 62 מגרשים בגודל של כחצי דונם המיועדים לבניית וילות צמודות קרקע. הפרויקט ממוקם באזור הצפון מערבי של הישוב (הגבעה הצפונית) ופונה לנוף הררי מרהיב. נשארו 3 מגרשים אחרונים בלבד!</div>
              <a href="#" class="view-link">למידע נוסף אודות הפרוייקט לחץ כאן ></a>
              <div class="view-btn">הצג פרוייקט</div>
            </div>
          </div>
        </div>
        <div class="item-meta">ברקן מול הים | ברקן</div>

      </div>
    <?php endfor; ?>
  </div>
</div>

<?php
get_footer();
?>
