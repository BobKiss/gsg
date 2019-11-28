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

<?php get_footer(); ?>
