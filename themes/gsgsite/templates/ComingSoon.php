<?php
/*
Template Name: Coming Soon
*/
?>
<?php get_header(); ?>
<style>
.globalBack{
	display: none;
}
</style>
<div class="page coming">
	<img class="sectionComingBack" src="<?php the_field('coming_back_img'); ?>" draggable="false">
	<section class="comingContent">
		<div class="comingText wow bounceInRight">
			<h1><?php the_field('coming_heading'); ?></h1>
			<span><?php the_field('coming_subtitle'); ?></span>
		</div>
	</section>

</div>

<?php
get_footer();
?>
