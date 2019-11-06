<?php
/**
 * gsgsite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gsgsite
 */

if ( ! function_exists( 'gsgsite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gsgsite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gsgsite, use a find and replace
		 * to change 'gsgsite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gsgsite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gsgsite' ),
			// 'menu-2' => esc_html__( 'Flat', 'gsgsite' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gsgsite_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support( 'woocommerce' );

	}
endif;
add_action( 'after_setup_theme', 'gsgsite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gsgsite_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gsgsite_content_width', 640 );
}
add_action( 'after_setup_theme', 'gsgsite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gsgsite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gsgsite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gsgsite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gsgsite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gsgsite_scripts() {
	// wp_enqueue_style( 'extra-main-style', get_template_directory_uri() . '/assets/css/extra-styles.css' );
	wp_enqueue_style( 'gsgsite-style', get_stylesheet_uri() );

	// var_dump(get_locale());

	if (get_locale() === 'he_IL') {
		wp_enqueue_style( 'main-style-hebrew', get_template_directory_uri() . '/assets/css/rtl.css' );
	}
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'main-style-alex', get_template_directory_uri() . '/assets/css/main_alex.css' );
	wp_enqueue_style( 'projects', get_template_directory_uri() . '/assets/css/projects.css' );
	wp_enqueue_style( 'shop-style', get_template_directory_uri() . '/assets/css/shop.css' );
	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.min.css' );
	// wp_enqueue_style( 'Assistant-font', 'https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800&display=swap&subset=hebrew' );
	wp_enqueue_style( 'Roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:700,900&display=swap' );
	wp_enqueue_style( 'Dosis', 'https://fonts.googleapis.com/css?family=Dosis:400,700,800' );
	wp_enqueue_style( 'slick-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'fawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'wow-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
	wp_enqueue_script( 'jQueryUIJS', 'https://code.jquery.com/ui/1.12.0/jquery-ui.js', array(), '20151215', true );
	wp_enqueue_style( 'jQueryUICSS', 'https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css' );

	wp_enqueue_script( 'gsgsite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'flat-content-tabs', get_template_directory_uri() . '/js/flat-content-tabs.js', array(), '20190925', true );
	wp_enqueue_script( 'wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'slick-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '1', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.js', array('jquery'), '1', true );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1', true );
	wp_enqueue_script( 'gsgsite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Pass php vars
	$lang = ( get_locale() != 'en_US' ) ? 'he' : 'en';
	global $wp;
	wp_localize_script( 'main-scripts', 'wp_data', [
		'lang' => $lang,
		'current_page' => current_page()
	] );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gsgsite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/ajax/index.php';



//add option to acf 'post types' dropdown on 'edit field group' page
add_filter('acf/location/rule_values/post_type', 'acf_location_rule_values_Post');
function acf_location_rule_values_Post( $choices ) {
	$choices['product_variation'] = 'Product Variation';
    //print_r($choices);
    return $choices;
}
// Render fields at the bottom of variations - does not account for field group order or placement.
add_action( 'woocommerce_product_after_variable_attributes', function( $loop, $variation_data, $variation ) {
    global $abcdefgh_i; // Custom global variable to monitor index
    $abcdefgh_i = $loop;
    // Add filter to update field name
    add_filter( 'acf/prepare_field', 'acf_prepare_field_update_field_name' );

    // Loop through all field groups
    $acf_field_groups = acf_get_field_groups();
    foreach( $acf_field_groups as $acf_field_group ) {
        foreach( $acf_field_group['location'] as $group_locations ) {
            foreach( $group_locations as $rule ) {
                // See if field Group has at least one post_type = Variations rule - does not validate other rules
                if( $rule['param'] == 'post_type' && $rule['operator'] == '==' && $rule['value'] == 'product_variation' ) {
                    // Render field Group
                    acf_render_fields( $variation->ID, acf_get_fields( $acf_field_group ) );
                    break 2;
                }
            }
        }
    }

    // Remove filter
    remove_filter( 'acf/prepare_field', 'acf_prepare_field_update_field_name' );
}, 10, 3 );

// Filter function to update field names
function  acf_prepare_field_update_field_name( $field ) {
    global $abcdefgh_i;
    $field['name'] = preg_replace( '/^acf\[/', "acf[$abcdefgh_i][", $field['name'] );
    return $field;
}

// Save variation data
add_action( 'woocommerce_save_product_variation', function( $variation_id, $i = -1 ) {
    // Update all fields for the current variation
    if ( ! empty( $_POST['acf'] ) && is_array( $_POST['acf'] ) && array_key_exists( $i, $_POST['acf'] ) && is_array( ( $fields = $_POST['acf'][ $i ] ) ) ) {
				// error_log(print_r($_POST['acf'][ $i ], 1));
				foreach ( $fields as $key => $val ) {
            update_field( $key, $val, $variation_id );
        }
    }
}, 10, 2 );


//Gallery fields do not work in variations? - register scripts to make them work
function xxx_admin_head_post() {
	global $post_type;
	if ($post_type === 'product') {
		wp_register_script( 'xxx-acf-variation', get_template_directory_uri() . '/js/acf-variation.js', array(
			'jquery-core',
			'jquery-ui-core'
		), '1.1.0',
			true ); // Custom scripts

		wp_enqueue_script( 'xxx-acf-variation' ); // Enqueue it!

	}
}
/* actions fired when adding/editing posts or pages */
/* admin_head-(hookname) */
add_action( 'admin_head-post.php', 'xxx_admin_head_post' );
add_action( 'admin_head-post-new.php',  'xxx_admin_head_post' );



//remove unnecessary woocommerce data on product page
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

//allow to add only one product in cart
add_filter( 'woocommerce_add_to_cart_validation', 'gsg_only_one_in_cart', 99, 2 );
function gsg_only_one_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

// ACF FOR HEADER
function register_acf_options_pages() {

    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Theme General Settings'),
        'menu_title'    => __('Theme Settings'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

function current_page () {

	global $wp;
	$locale = get_locale();

	$current_page_url = home_url( $wp -> request );
	if ( $locale != 'en_US') {
		$current_page_url .= '/';
	}
	return $current_page_url;

}