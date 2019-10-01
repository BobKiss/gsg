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

        <div class="list-item">
          <div class="item-desc">
            <div class="item-bg" style="background-image: url('<?php the_sub_field('project_image'); ?>')">
              <div class="item-content-block">
                <?php if (get_sub_field('project_name') && get_sub_field('project_description') ): ?>
                  <div class="item-info">
                    <div class="title"><?php the_sub_field('project_name'); ?></div>
                    <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
                    <div class="view-link"><?php _e('For more information about the project, click here','Gsg'); ?> > </div>
                  </div>

                <?php endif; ?>
                <a href="<?php the_sub_field('project_link'); ?>" class="view-btn"><p class="btn-content"><?php _e('View project','Gsg'); ?></p></a>
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
<div class="small-projects-list container-2">
  <marquee scrollamount="5" class="contactus__lets"><?php _e('Sold Out Projects - Sold Out Projects - Sold Out Projects','Gsg'); ?></marquee>
  <?php
    if( have_rows('mini_projects_repeater') ):
        while ( have_rows('mini_projects_repeater') ) : the_row();
?>
        <div class="list-item">
          <div class="item-desc">
            <div class="item-bg" style="background-image: url('<?php the_sub_field('project_image'); ?>')">
              <div class="item-info">
                <div class="title"><?php the_sub_field('project_name'); ?></div>
                  <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
                <a href="<?php the_sub_field('project_link'); ?>" class="view-btn"><?php _e('More info','Gsg'); ?></a>
              </div>
            </div>
          </div>
      </div>
        <?php
        endwhile;
    else :
    endif;
  ?>
</div>



</div>

<?php
get_footer();
?>
