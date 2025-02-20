<?php
/**
 * Widget
 *
 * @author  Yithemes
 * @package YITH Booking and Appointment for WooCommerce Premium
 * @version 1.0.0
 */


if ( !defined( 'YITH_WCBK' ) ) {
    exit;
} // Exit if accessed directly

if ( !class_exists( 'YITH_WCBK_Search_Form_Widget' ) ) {
    /**
     * YITH_WCBK_Search_Form_Widget
     *
     * @since  1.0.0
     * @author Leanza Francesco <leanzafrancesco@gmail.com>
     */
    class YITH_WCBK_Search_Form_Widget extends WC_Widget {
        /**
         * Constructor
         */
        public function __construct() {
            $this->widget_cssclass    = 'yith_wcbk_booking_search_form_widget';
            $this->widget_description = __( 'Display booking search form', 'yith-booking-for-woocommerce' );
            $this->widget_id          = 'yith_wcbk_search_form';
            $this->widget_name        = _x( 'Booking Search Form', 'Widget Name', 'yith-booking-for-woocommerce' );

            $forms = YITH_WCBK()->search_form_helper->get_forms_in_array();

            $this->settings = array(
                'title' => array(
                    'type'  => 'text',
                    'std'   => _x( 'Booking Search Form', 'Default title for booking search form widget', 'yith-booking-for-woocommerce' ),
                    'label' => __( 'Title', 'yith-booking-for-woocommerce' ),
                ),

                'form' => array(
                    'type'    => 'select',
                    'label'   => __( 'Search Form', 'yith-booking-for-woocommerce' ),
                    'std'     => '',
                    'options' => $forms,
                ),

                'hide-in-single-product' => array(
                    'type'  => 'checkbox',
                    'label' => __( 'Hide in single product', 'yith-booking-for-woocommerce' ),
                    'std'   => 0,
                ),
            );

            parent::__construct();
        }

        /**
         * print the widget
         *
         * @param array $args
         * @param array $instance
         */
        public function widget( $args, $instance ) {
            $form_id                = !empty( $instance[ 'form' ] ) ? absint( $instance[ 'form' ] ) : 0;
            $hide_in_single_product = !empty( $instance[ 'hide-in-single-product' ] ) ? $instance[ 'hide-in-single-product' ] : 0;

            if ( !!$hide_in_single_product && function_exists( 'is_product' ) && is_product() )
                return;

            if ( !$form_id )
                return;

            if ( $this->get_cached_widget( $args ) ) {
                return;
            }

            $form = new YITH_WCBK_Search_Form( $form_id );
            if ( !$form->is_valid() )
                return;

            ob_start();

            $styles = $form->get_styles();
            $style  = 'yith_wcbk_booking_search_form_widget-' . $form_id;
            $style  .= ' yith_wcbk_booking_search_form_widget--' . $styles[ 'style' ];

            $args[ 'before_widget' ] = str_replace( 'yith_wcbk_booking_search_form_widget', "yith_wcbk_booking_search_form_widget $style", $args[ 'before_widget' ] );

            $this->widget_start( $args, $instance );

            echo do_shortcode( '[shop_messages]' );
            $form->output();

            $this->widget_end( $args );


            wp_reset_postdata();
            echo $this->cache_widget( $args, ob_get_clean() );
        }

        /**
         * Outputs the settings update form.
         *
         * @see   WP_Widget->form
         *
         * @param array $instance
         *
         * @return string|void
         */
        public function form( $instance ) {
            parent::form( $instance );

            $text = __( 'Create search booking form', 'yith-booking-for-woocommerce' );
            $link = add_query_arg( array( 'post_type' => YITH_WCBK_Post_Types::$search_form ), admin_url( 'post-new.php' ) );

            echo "<p style='text-align:right'><a href='$link'>$text</a></p>";
        }
    }
}