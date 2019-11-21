<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gsgsite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header id="header" class="header" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/archive_01.jpg) center center / cover">
	<div class="container single-post">
		<div class="row">
			<div class="col-12">
				<div class="blog__borderblock"></div>
				<div class="blog__borderblock">
					<h2 class="header__title" style="color:white !important;">
					 איך מתמודדים \n
	עם דייר סרבן?
				</h2></div>
				<div class="blog__borderblock">
						<img class="decorCircle mobile-none" src="<?php echo site_url() ?>/wp-content/themes/gsgsite/assets/images/blogcirc.png" alt="blogcircle">
				</div>
			</div>
		</div>
	</div>
	</header> <!-- headerSection-->




	<section id="blogpage" class="blogpage">
		<div class="container">


			<div class="entry-content">
				<h4 class="blogpage__title"><?php the_title(); ?>
					<span> מאת <?php the_field('author_name'); ?>
					</span>
				</h4>
				<?php
				// the_content( sprintf(
				// 	wp_kses(
				// 		/* translators: %s: Name of current post. Only visible to screen readers */
				// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gsgsite' ),
				// 		array(
				// 			'span' => array(
				// 				'class' => array(),
				// 			),
				// 		)
				// 	),
				// 	get_the_title()
				// 	) );
				the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gsgsite' ),
						'after'  => '</div>',
					) );
					?>
					<div class="blog__nav">
						<div class="nav-link-single prev"><?php previous_post_link( '%link', '< לכתבה הקודמת' ); ?></div>
						<div class="nav-link-single center"><a href="<?= home_url('/blog/'); ?>" class="blog__nav_text">חזרה לעמוד מגזין</a></div>
						<div class="nav-link-single next"><?php next_post_link( '%link', 'לכתבה הבאה >' ); ?></div>

					</div>
				</div><!-- .entry-content -->
		</div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
