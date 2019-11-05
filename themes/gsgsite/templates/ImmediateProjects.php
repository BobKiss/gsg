<?php
/*
Template Name: Immediate Projects
*/
?>
<?php get_header(); ?>

<div class="page after-header-padding">
  <div class="big-projects-list container-1">
  <?php
    if( have_rows('project_items_repeater') ):
        while ( have_rows('project_items_repeater') ) : the_row();
?>

        <!-- <a href="<?php the_sub_field('project_link'); ?>"> -->
        <div class="list-item wow slideInRight">
          <div class="item-desc">
            <?php
              $link = ( get_locale() != 'en_US' ) ? 'הצג פרוייקט' : 'View project ';
              $info = ( get_locale() != 'en_US' ) ? 'הצג פרוייקט' : 'More information ';
             ?>
            <!-- <a href="<?php the_sub_field('project_link'); ?>"> -->
              <div class="item-wrap" >
                <a href="<?php the_sub_field('project_link'); ?>" class="item-background" style="background-image: url('<?php the_sub_field('project_image'); ?>')"></a href="">
                <div class="item-content-block">
                  <?php if (get_sub_field('project_name') && get_sub_field('project_description') ): ?>
                    <div class="item-info">
                      <div class="title"><?php the_sub_field('project_name'); ?></div>
                      <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
                      <div class="view-link">למידע נוסף אודות הפרוייקט לחץ כאן></div>
                    </div>
                  <?php endif; ?>
                  <a href="<?php the_sub_field('project_link'); ?>" class="view-btn"><p class="btn-content"><?= $link ?></p></a>
                </div>
              </div>
            <!-- </a> -->

          </div>
          <div class="item-meta"><?php the_sub_field('project_name'); ?></div>
      </div>
      <!-- </a> -->
        <?php
        endwhile;
    else :
    endif;
  ?>

  </div>
<div class="small-projects-list container-2">
  <marquee scrollamount="5" class="contactus__lets"><?php _e('Sold Out Projects - Sold Out Projects - Sold Out Projects','Gsg'); ?></marquee>
  <div class="small-list-items-wrapper">
  <?php
    if( have_rows('mini_projects_repeater') ):
      while ( have_rows('mini_projects_repeater') ) : the_row(); ?>
      <div class="list-item wow slideInLeft">
        <div class="item-desc">
            <a href="<?php the_sub_field('project_link'); ?>" class="view-btn"><p class="btn-content"><?= $info ?></p></a>
            <div class="item-content-block" style="background-image: url('<?php the_sub_field('project_image'); ?>')">
              <?php if (get_sub_field('project_name') && get_sub_field('project_description') ): ?>
              <div class="item-info">
                <div class="title"><?php the_sub_field('project_name'); ?></div>
                <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
              </div>
              <?php endif; ?>
          </div>
      </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>



</div>

<?php
get_footer();
?>
