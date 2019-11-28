<?php
/*
Template Name: Long-Term Projects
*/
?>
<?php get_header(); ?>

<div class="page after-header-padding">
  <div class="big-projects-list long-term container-1">
  <?php
    if( have_rows('project_items_repeater') ):
        while ( have_rows('project_items_repeater') ) : the_row();
?>

        <div class="list-item wow slideInRight">
          <div class="item-desc">
            <div class="item-wrap" style="background-image: url('<?php the_sub_field('project_image'); ?>')">
              <div class="item-content-block">
                <?php if (get_sub_field('project_name') && get_sub_field('project_description') ): ?>
                  <div class="item-info">
                    <div class="title"><?php the_sub_field('project_name'); ?></div>
                    <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
                  </div>
                <?php
                $view = ( get_locale() != 'en_US' ) ? 'הצג פרוייקט' : 'VIEW PROJECT';
                ?>
                <?php endif; ?>
                <a href="<?php the_sub_field('project_link'); ?>" class="view-btn"><p class="btn-content"><?= $view ?></p></a>
              </div>
            </div>
          </div>
          <div class="item-meta"><?php the_sub_field('project_name'); ?></div>
      </div>
        <?php
        endwhile;
    else :
    endif;
  ?>

  </div>
  <section id="sn-contactus" class="sn-contactsus">
    <div id="crisisForm" class="container wow slideInRight">
      <?php
      $align = (get_locale() != 'en_US') ? 'text-right' : 'text-left';
      $heading = (get_locale() != 'en_US') ? 'שלח לנו הודעה | קבוצת גביש שחם' : 'Send Us a Message | Gavish Shaham Group ';
      ?>
      <h4 class="contactus__title <?= $align ?>"><?= $heading ?> </h4>
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
