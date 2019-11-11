<?php
/**
 * Template Name: Immediate Projects v2
 */
get_header();

$options = [
  'post_type' => 'house_project'
];
$projects = new WP_Query( $options );
?>

<div class="page after-header-padding">

  <!-- Big projects -->
  <div class="big-projects-list container-1">
  <?php while( $projects -> have_posts() ) : $projects -> the_post(); ?>
    <!-- Project item -->
    <div class="list-item wow slideInRight">
      <div class="item-desc">
      <?php
        $link = ( get_locale() != 'en_US' ) ? 'הצג פרוייקט' : 'View project ';
        $info = ( get_locale() != 'en_US' ) ? 'הצג פרוייקט' : 'More information ';
      ?>
        <div class="item-wrap" >
          <a href="<?php the_permalink(); ?>" class="item-background" style="background-image: url('<?php the_sub_field('project_image'); ?>')"></a href="">
          <div class="item-content-block">
            <?php if (get_sub_field('project_name') && get_sub_field('project_description') ): ?>
              <div class="item-info">
                <div class="title"><?php the_sub_field('project_name'); ?></div>
                <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
                <div class="view-link">למידע נוסף אודות הפרוייקט לחץ כאן></div>
              </div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="view-btn"><p class="btn-content"><?= $link ?></p></a>
          </div>
        </div>
      </div>
      <div class="item-meta"><?php the_sub_field('project_name'); ?></div>
    </div>
    <!-- Project item end -->
  <?php endwhile; ?>
  </div>
  <!-- Big projects end -->

</div>

<?php get_footer(); ?>