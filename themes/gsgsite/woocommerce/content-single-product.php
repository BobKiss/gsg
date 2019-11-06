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
				<div id="housesysImg"class="housesys__img choose-flat-img-container">
					<div class="choose-flat-svg-container">
						<?php get_template_part('template-parts/choose-flat-svg'); ?>
					</div>
					<div class="housesys__tabs_content dnone"></div>
					<div class="housesys__menu_nav">
						<a href="#" class="housesys__menu_lnk" onclick="history.back()"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-left.png"></a>
						<a href="#" class="housesys__menu_lnk" onclick="history.forward()"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-right.png"></a>
						<a href="#" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/plus.png"></a>
						<a href="#" class="housesys__menu_lnk" onclick="document.getElementById('housesysImg').style.width = '74%'"><img src="<?php bloginfo('template_url'); ?>/assets/images/minus.png"></a>
						<a href="#" class="housesys__menu_lnk img__zoom"><img src="<?php bloginfo('template_url'); ?>/assets/images/download.png"></a>
					</div>
				</div>

				<div class="housesys__menu">
					<div class="housesys__menu_wrap">
				<?php
        	$map_word = [
						'w1' => (get_locale() != 'en_US') ? 'בחר נכס' : 'Select a property',
						'w2' => (get_locale() != 'en_US') ? 'בחר מגרש' : 'Select a plot',
						'w3' => (get_locale() != 'en_US') ? 'בחר תצוגת נכס' : 'Select a property view',
						'w4' => (get_locale() != 'en_US') ? 'בחר קומה' : 'Select a floor',
						'w5' => (get_locale() != 'en_US') ? 'בחר דירה' : 'Choose an apartment',
						'w6' => (get_locale() != 'en_US') ? 'בחר חבילה' : 'Select a package',
						'v1' => (get_locale() != 'en_US') ? 'חזית' : 'Front',
						'v2' => (get_locale() != 'en_US') ? 'ללא' : 'Without',
        	];
        ?>
						<h6 class="housesys__menu_title"><?= $map_word['w1'] ?></h6>
						<!-- house systems selects -->
						<div class="housesys__menu_desc">
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">111</option>
								  <option value="2">222</option>
								</select>
								<p class="housesys__menu_text"><?= $map_word['w2'] ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1"><?= $map_word['v1'] ?></option>
								  <option value="2"><?= $map_word['v1'] ?></option>
								</select>
								<p class="housesys__menu_text"><?= $map_word['w3'] ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1"><?= $map_word['v2'] ?></option>
								  <option value="2"><?= $map_word['v2'] ?></option>
								</select>
								<p class="housesys__menu_text"><?= $map_word['w4'] ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1"><?= $map_word['v2'] ?></option>
								  <option value="2"><?= $map_word['v2'] ?></option>
								</select>
								<p class="housesys__menu_text"><?= $map_word['w5'] ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1"><?= $map_word['v2'] ?></option>
								  <option value="2"><?= $map_word['v2'] ?></option>
								</select>
								<p class="housesys__menu_text"><?= $map_word['w6'] ?></p>
							</div>
						</div>
						<!-- house systems selects END -->
						<div class="housesys__menu_container">
							<?php
        	$map_word = [
						'w1' => (get_locale() != 'en_US') ? 'הצג שרטוט נכס' : 'View property sketch',
						'w2' => (get_locale() != 'en_US') ? 'הצג מפרט ומחירון' : 'View specifications and price list',
						'w3' => (get_locale() != 'en_US') ? 'הצג תמונות והדמיות' : 'View photos and simulations',
						'w4' => (get_locale() != 'en_US') ? 'הצג חבילות קונספט' : 'View concept packages',
						'v1' => (get_locale() != 'en_US') ? 'מחיר בסיס' : 'Base price',
						'v2' => (get_locale() != 'en_US') ? 'תוספת חבילה' : 'Extra package',
						'v3' => (get_locale() != 'en_US') ? 'קוד הנחה' : 'Discount code',
						'v4' => (get_locale() != 'en_US') ? 'מחיר סופי' : 'Final price',
						'v5' => (get_locale() != 'en_US') ? 'סה”כ דמי הרשמה' : 'Total registration fee',
        	];
        ?>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_architecture"><?= $map_word['w1'] ?></a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_description_a"> <?= $map_word['w2'] ?></a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_images"><?= $map_word['w3'] ?></a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_description_b"><?= $map_word['w4'] ?></a>
						</div>
						<div class="housesys__menu_desc">
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text"><?= $map_word['v1'] ?></p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text"><?= $map_word['v2'] ?></p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text"><?= $map_word['v3'] ?></p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text"><?= $map_word['v4'] ?></p></div>
							<div><span class="housesys__menu_count">0</span><p class="housesys__menu_text"><?= $map_word['v5'] ?></p></div>
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
						<?php
  						$heading = ( get_locale() != 'en_US' ) ? 'לטופס הרשמה ותשלום דמי הרשמה >' : 'Registration and payment of registration fee';
							$align = ( get_locale() != 'en_US' ) ? '' : 'text-center';
						?>
						<a class="add-to-cart-simulation housesys__menu_btn disabled <?= $align ?>" href="<?php echo esc_url( wc_get_checkout_url() ); ?>"><?= $heading ?> </a>

					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- #sectionHousesys -->
</div>

<?php get_template_part('template-parts/popup-thank-you'); ?>
<?php get_template_part('template-parts/popup-fail'); ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
