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

<?php
//get info about all avialable packages and apartment types
$apartments = [
	'top_duplex' => [ 'name' => _x('Top duplex', 'house system', 'gsg'), 'price' => get_field('top_duplex_price', 'option') ],
	'garden_duplex' =>  [ 'name' => _x('Garden duplex', 'house system', 'gsg'), 'price' => get_field('garden_duplex_price', 'option') ],
	'cellar_garden_duplex' =>  [ 'name' => _x('Garden duplex + cellar', 'house system', 'gsg'), 'price' => get_field('cellar_garden_duplex_price', 'option') ],
];
$packages = [
	'top_duplex' => get_field('top_duplex_packages', 'option'),
	'garden_duplex' => get_field('garden_duplex_packages', 'option'),
	'cellar_garden_duplex' => get_field('cellar_garden_duplex_packages', 'option'),
];
//get all info about variations
global $product;
$variationsData = $product->get_available_variations();
//array to pass into js in future
$variationsArr = [];
foreach ($variationsData as $variation) {

	$variationPackages = [];
	$variationApartmentTypes = [];
	if(get_field('top_duplex', $variation['variation_id'])){
		$variationApartmentTypes[] = 'top_duplex';
		$variationPackages['top_duplex'] = get_field('top_duplex_packages', $variation['variation_id']);
	}
	if(get_field('garden_duplex', $variation['variation_id'])){
		$variationApartmentTypes[] = 'garden_duplex';
		$variationPackages['garden_duplex'] = get_field('garden_duplex_packages', $variation['variation_id']);
	}
	if(get_field('cellar_garden_duplex', $variation['variation_id'])){
		$variationApartmentTypes[] = 'cellar_garden_duplex';
		$variationPackages['cellar_garden_duplex'] = get_field('cellar_garden_duplex_packages', $variation['variation_id']);
	}

	$variationsArr[] = [
		'variation_id' => $variation['variation_id'],
		'is_in_stock' => $variation['is_in_stock'],
		'apartmentTypes' => $variationApartmentTypes,
		'packages' => $variationPackages
	];

}

//pass this data to javascript
?>
<script type="text/javascript">
	var HouseSystem = {
		apartments : <?= json_encode($apartments) ?>,
		packages : <?= json_encode($packages) ?>,
		variations : <?= json_encode($variationsArr) ?>
	}
</script>


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
						<a href="#" class="housesys__menu_lnk" onclick="history.back()"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-left-hs.svg"></a>
						<a href="#" class="housesys__menu_lnk" onclick="history.forward()"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-right-hs.svg"></a>
						<a href="#" class="housesys__menu_lnk"><img src="<?php bloginfo('template_url'); ?>/assets/images/plus-hs.svg"></a>
						<a href="#" class="housesys__menu_lnk" onclick="document.getElementById('housesysImg').style.width = '74%'"><img src="<?php bloginfo('template_url'); ?>/assets/images/minus-hs.svg"></a>
						<a href="#" class="housesys__menu_lnk img__zoom"><img src="<?php bloginfo('template_url'); ?>/assets/images/download-hs.svg"></a>
					</div>
				</div>

				<div class="housesys__menu">
					<div class="housesys__menu_wrap">
						<h6 class="housesys__menu_title"><?php _ex('Select a property', 'house system','gsg'); ?></h6>
						<!-- house systems selects -->
						<div class="housesys__menu_desc">
							<div>
								<select class="nice-select-trigger" id="apartment_type_select">
									<option selected disabled value="0"><?php _ex('Not selected', 'house system','gsg'); ?></option>
								</select>
								<p class="housesys__menu_text"><?php _ex('Choose an apartment', 'house system','gsg'); ?></p>
							</div>
							<div>
								<select disabled class="nice-select-trigger" id="package_select">
									<option selected disabled value="0"><?php _ex('Not selected', 'house system','gsg'); ?></option>
								</select>
								<p class="housesys__menu_text"><?php _ex('Select a package', 'house system','gsg'); ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1">111</option>
								  <option value="2">222</option>
								</select>
								<p class="housesys__menu_text"><?php _ex('Select a plot', 'house system','gsg'); ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1"><?php _ex('Front', 'house system','gsg'); ?></option>
								  <option value="2"><?php _ex('Front','gsg'); ?></option>
								</select>
								<p class="housesys__menu_text"><?php _ex('Select a property view', 'house system','gsg'); ?></p>
							</div>
							<div>
								<select class="nice-select-trigger">
								  <option selected value="1"><?php _ex('Without', 'house system','gsg'); ?></option>
								  <option value="2"><?php _ex('Without', 'house system','gsg'); ?></option>
								</select>
								<p class="housesys__menu_text"><?php _ex('Select a floor', 'house system','gsg'); ?></p>
							</div>
						</div>
						<!-- house systems selects END -->
						<div class="housesys__menu_container">
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_architecture"><?php _ex('View property sketch', 'house system','gsg'); ?></a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_description_a"><?php _ex('View specifications and price list', 'house system','gsg'); ?></a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_images"><?php _ex('View photos and simulations', 'house system','gsg'); ?></a>
							<a class="housesys__menu_btn disabled flat-tab-trigger" href="#" data-name="product_description_b"><?php _ex('View concept packages', 'house system','gsg'); ?></a>
						</div>
						<div class="housesys__menu_desc">
							<div><span id="apartment_cost" class="housesys__menu_count">0</span><p class="housesys__menu_text"><?php _ex('Base price', 'house system','gsg'); ?></p></div>
							<div><span id="package_cost" class="housesys__menu_count">0</span><p class="housesys__menu_text"><?php _ex('Extra package', 'house system','gsg'); ?></p></div>
							<div><span id="discount_cost" class="housesys__menu_count">0</span><p class="housesys__menu_text"><?php _ex('Discount code', 'house system','gsg'); ?></p></div>
							<div><span id="total_cost" class="housesys__menu_count">0</span><p class="housesys__menu_text"><?php _ex('Final price', 'house system','gsg'); ?></p></div>
							<div><span id="registration_cost" class="housesys__menu_count">0</span><p class="housesys__menu_text"><?php _ex('Total registration fee', 'house system','gsg'); ?></p></div>
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
							$align = ( get_locale() != 'en_US' ) ? '' : 'text-center';
						?>
						<a class="add-to-cart-simulation housesys__menu_btn disabled <?= $align ?>" href="#"><?php _ex('Registration and payment of registration fee', 'house system','gsg'); ?></a>

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
