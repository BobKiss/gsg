<?php
/**
* The template for displaying product content in the single-product.php template
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.6.0
*/

defined( 'ABSPATH' ) || exit;

global $product;

/**
* Hook: woocommerce_before_single_product.
*
* @hooked wc_print_notices - 10
*/
//do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<section id="housesys" class="housesys">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="housesys__img choose-flat-img-container">
					<div class="choose-flat-svg-container">
						<?php get_template_part('template-parts/choose-flat-svg'); ?>
					</div>
					<div class="housesys__tabs_content dnone"></div>
					<div class="housesys__menu_nav">
						<a href="#" class="housesys__menu_lnk" onclick="history.back()"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-left.png"></a>
						<a href="#" class="housesys__menu_lnk" onclick="history.forward()"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-right.png"></a>
						<a href="#" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/plus.png"></a>
						<a href="#" class="housesys__menu_lnk" onclick="document.getElementById('housesysImg').style.width = '74%'"><img src="<?php bloginfo('template_url'); ?>/assets/images/minus.png"></a>
						<a href="#" class="housesys__menu_lnk" onclick="document.getElementById('housesysImg').style.width = '100%'"><img src="<?php bloginfo('template_url'); ?>/assets/images/download.png"></a>
					</div>
				</div>

				<div class="housesys__menu">
					<div class="housesys__menu_wrap">
						<h6 class="housesys__menu_title">בחר נכס</h6>
						<!-- house systems selects -->
						<div class="housesys__menu_desc">
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">111</option>
								  <option value="2">222</option>
								</select>
								<p class="housesys__menu_text">בחר מגרש</p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">חזית</option>
								  <option value="2">חזית</option>
								</select>
								<p class="housesys__menu_text">בחר תצוגת נכס</p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">ללא</option>
								  <option value="2">ללא</option>
								</select>
								<p class="housesys__menu_text">בחר קומה</p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">ללא</option>
								  <option value="2">ללא</option>
								</select>
								<p class="housesys__menu_text">בחר דירה</p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">ללא</option>
								  <option value="2">ללא</option>
								</select>
								<p class="housesys__menu_text">בחר חבילה</p>
							</div>
						</div>
						<!-- house systems selects END -->
						<div class="housesys__menu_container">
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_architecture">הצג שרטוט נכס</a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_description_a"> הצג מפרט ומחירון</a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_images">הצג תמונות והדמיות</a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_description_b">הצג חבילות קונספט</a>
						</div>
						<div class="housesys__menu_desc">
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">מחיר בסיס</p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">תוספת חבילה</p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">קוד הנחה</p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">מחיר סופי </p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text">סה”כ דמי הרשמה</p></div>
						</div>

						<div class="add-to-cart-container dnone">
						<?php
						/**
						* Hook: woocommerce_before_single_product_summary.
						*
						* @hooked woocommerce_show_product_sale_flash - 10
						* @hooked woocommerce_show_product_images - 20
						*/
						do_action( 'woocommerce_before_single_product_summary' );
						?>

						<div class="summary entry-summary">
							<?php
							/**
							* Hook: woocommerce_single_product_summary.
							*
							* @hooked woocommerce_template_single_title - 5
							* @hooked woocommerce_template_single_rating - 10
							* @hooked woocommerce_template_single_price - 10
							* @hooked woocommerce_template_single_excerpt - 20
							* @hooked woocommerce_template_single_add_to_cart - 30
							* @hooked woocommerce_template_single_meta - 40
							* @hooked woocommerce_template_single_sharing - 50
							* @hooked WC_Structured_Data::generate_product_data() - 60
							*/
							do_action( 'woocommerce_single_product_summary' );
							?>
						</div>

						<?php
						/**
						* Hook: woocommerce_after_single_product_summary.
						*
						* @hooked woocommerce_output_product_data_tabs - 10
						* @hooked woocommerce_upsell_display - 15
						* @hooked woocommerce_output_related_products - 20
						*/
						do_action( 'woocommerce_after_single_product_summary' );
						?>
						</div>
						<a class="add-to-cart-simulation housesys__menu_btn disabled" href="<?php echo esc_url( wc_get_checkout_url() ); ?>">לטופס הרשמה ותשלום דמי הרשמה ></a>

					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- #sectionHousesys -->
</div>

<?php get_template_part('template-parts/popup-thank-you'); ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
