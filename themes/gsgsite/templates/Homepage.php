<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div class="vimeo-wrapper">
 	<!-- <iframe class="vimeoVideo" src="https://player.vimeo.com/video/363342188?loop=1&autoplay=1&background=1&loop=1&byline=0&title=0" width="100" height="100" frameborder="0" allow="autoplay; fullscreen" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe> -->
</div>
    <header id="header" class="header" style="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="borderblock"></div>
					<div class="borderblock">
            <h2 class="header__title">
					    <?php echo the_title(); ?>
					  </h2>
          </div>
					<div class="borderblock"><img src="<?php bloginfo('template_url'); ?>/assets/images/HomeCircleTxt.png" class="header__round_text" alt=""></div>
				</div>
			</div>
		</div>
		<div class="clientsBlock">
    <a href="<?php home_url('/gsg-energy/'); ?>" class="clientItemHome">
      <p>Business Clients</p>
    </a>
    <a href="<?php home_url('/immediate-projects/'); ?>" class="clientItemHome">
      <p>Private Clients</p>
    </a>
  </div>
    </header> <!-- .headerSection-->





<?php wp_footer(); ?>
