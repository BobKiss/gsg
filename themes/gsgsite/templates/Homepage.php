<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

 
    <header id="header" class="header" style="background: url(<?php bloginfo('template_url'); ?>/assets/images/lefteris-kallergis.png) center center / cover">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="borderblock"></div>
					<div class="borderblock"><h2 class="header__title">
					    <?php echo the_title(); ?>
					</h2></div>
					<div class="borderblock"><img src="<?php bloginfo('template_url'); ?>/assets/images/HomeCircleTxt.png" class="header__round_text" alt=""></div>
				</div>
			</div>			
		</div>
		<div class="clientsBlock">
    <a href="<?php home_url('/somepage/'); ?>" class="clientItemHome">
      <p>Business Clients</p>
    </a>
    <a href="<?php home_url('/somepage/'); ?>" class="clientItemHome">
      <p>Private Clients</p>
    </a>
  </div>
    </header> <!-- .headerSection-->
    
    
 
  

<?php wp_footer(); ?>
