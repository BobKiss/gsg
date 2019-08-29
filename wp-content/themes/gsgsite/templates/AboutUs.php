<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>

<div class="page">

	<section class="featuresFirst">
		<div class="featuresCol">
			<h2><?php the_field('heading_title'); ?></h2>
			<span><?php the_field('heading_description'); ?></span>
			<a href="<?php the_field('heading_button_link'); ?>" class="hoverInner"><?php the_field('heading_button_txt'); ?> <span></span></a>
		</div>
		<div class="featuresCol">
			<img src="<?php the_field('heading_image'); ?>">
		</div>
	</section>

	<?php
	// check if the repeater field has rows of data
	if( have_rows('features_section') ):
		// loop through the rows of data
			while ( have_rows('features_section') ) : the_row();
			$features_counter == 0;
			$features_counter++ ?>

			<section class="featureBlock">
				<h2><?php echo $features_counter; ?></h2>
				<div class="featurePageItemH"><h3><?php the_sub_field('feature_heading'); ?></h3></div>
				<p><?php the_sub_field('feature_text'); ?></p>
				<img src="<?php the_sub_field('feature_picture'); ?>">
			</section>

			<?php
			endwhile;
	else :
			// no rows found
	endif;
	?>

</div>

<?php
get_footer();
?>
