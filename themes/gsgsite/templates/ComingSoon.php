<?php
/*
Template Name: Coming Soon
*/
?>
<?php get_header(); ?>
    <section class="headerSection" style="background: #fff600; padding: 0;">
		<a href="<?php echo get_bloginfo('url') ?>" class="logo">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mainLogo.png" alt="<?php echo get_bloginfo('name') ?>">
		</a>
		<div class="container">
		    <div class="row no-gutters">
		        <div class="col-12 d-flex">
		            <div class="coming__wrap">
		                <img src="<?php bloginfo('template_url'); ?>/assets/images/coming.png" alt="">
		                <img src="<?php bloginfo('template_url'); ?>/assets/images/soon.png" alt="" style="margin-top: 40px;">
		                <img id="coming__circle" class="coming__circle" src="<?php bloginfo('template_url'); ?>/assets/images/progress-circle.png" alt="decorAbout">
		            </div>
		        </div>
		    </div>

		</div> <!--.borderBlock-->
	</section> <!-- .headerSection-->
<?php wp_footer(); ?>
