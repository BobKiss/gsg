<?php
/**
 * @var array  $condition
 * @var string $condition_type
 * @var string $condition_from
 * @var string $condition_to
 * @var string $condition_field_name
 * @var string $condition_field_id_prefix
 * @var int    $condition_index
 */
!defined( 'YITH_WCBK' ) && exit; // Exit if accessed directly

$person_type_ids     = YITH_WCBK()->person_type_helper->get_person_type_ids();
$person_type_options = array();
if ( !!$person_type_ids ) {
    foreach ( $person_type_ids as $person_type_id ) {
        $option_id                         = 'person-type-' . $person_type_id;
        $person_type_options[ $option_id ] = YITH_WCBK()->person_type_helper->get_person_type_title( $person_type_id );
    }
}

$range_types = array(
    'custom' => __( 'Custom date range', 'yith-booking-for-woocommerce' ),
    'month'  => __( 'Range of months', 'yith-booking-for-woocommerce' ),
    'week'   => __( 'Range of weeks', 'yith-booking-for-woocommerce' ),
    'day'    => __( 'Range of days', 'yith-booking-for-woocommerce' ),
    'person' => __( 'People count', 'yith-booking-for-woocommerce' ),
    'block'  => __( 'Unit count', 'yith-booking-for-woocommerce' ),
    'time'   => __( 'Time range', 'yith-booking-for-woocommerce' ),
);

if ( !!$person_type_options ) {
    $range_types[ 'group-person' ] = array(
        'title'   => __( 'People', 'yith-booking-for-woocommerce' ),
        'options' => $person_type_options
    );
}

$_is_numeric = !in_array( $condition_type, array( 'custom', 'month', 'week', 'day', 'time' ) );

yith_wcbk_print_field( array(
                           'type'   => 'section',
                           'class'  => 'yith-wcbk-price-rule__condition yith-wcbk-clearfix',
                           'fields' => array(
                               array(
                                   'type'   => 'section',
                                   'class'  => 'yith-wcbk-price-rule__condition__field-with-label',
                                   'fields' => array(
                                       array(
                                           'type'  => 'label',
                                           'class' => 'yith-wcbk-price-rule__condition__type-label',
                                           'value' => __( 'Type', 'yith-booking-for-woocommerce' ),
                                           'for'   => $condition_field_id_prefix . "type"
                                       ),
                                       array(
                                           'type'    => 'select',
                                           'class'   => 'yith-wcbk-price-rule__condition__type',
                                           'id'      => $condition_field_id_prefix . "type",
                                           'name'    => $condition_field_name . '[type]',
                                           'options' => $range_types,
                                           'value'   => $condition_type,
                                       )
                                   )
                               ),
                               array(
                                   'type'   => 'section',
                                   'class'  => 'yith-wcbk-price-rule__condition__field-with-label',
                                   'fields' => array(
                                       array(
                                           'type'  => 'label',
                                           'class' => 'yith-wcbk-price-rule__condition__from-label',
                                           'value' => __( 'From', 'yith-booking-for-woocommerce' ),
                                       ),
                                       array(
                                           'type'              => 'admin-datepicker',
                                           'class'             => 'yith-wcbk-price-rule__condition__from yith-wcbk-price-rule__condition--show-if-custom',
                                           'name'              => $condition_field_name . '[from]',
                                           'custom_attributes' => 'custom' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'custom' === $condition_type ? $condition_from : '',
                                       ),
                                       array(
                                           'type'              => 'select',
                                           'class'             => 'yith-wcbk-price-rule__condition__from yith-wcbk-price-rule__condition--show-if-month yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[from]',
                                           'options'           => yith_wcbk_get_months_array(),
                                           'custom_attributes' => 'month' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'month' === $condition_type ? $condition_from : '',
                                       ),
                                       array(
                                           'type'              => 'select',
                                           'class'             => 'yith-wcbk-price-rule__condition__from yith-wcbk-price-rule__condition--show-if-week yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[from]',
                                           'options'           => yith_wcbk_get_weeks_array(),
                                           'custom_attributes' => 'week' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'week' === $condition_type ? $condition_from : '',
                                       ),
                                       array(
                                           'type'              => 'select',
                                           'class'             => 'yith-wcbk-price-rule__condition__from yith-wcbk-price-rule__condition--show-if-day yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[from]',
                                           'options'           => yith_wcbk_get_days_array(),
                                           'custom_attributes' => 'day' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'day' === $condition_type ? $condition_from : '',
                                       ),
                                       array(
                                           'type'              => 'time-select',
                                           'class'             => 'yith-wcbk-price-rule__condition__from yith-wcbk-price-rule__condition--show-if-time yith-wcbk-time-range-input',
                                           'name'              => $condition_field_name . '[from]',
                                           'custom_attributes' => 'time' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'time' === $condition_type ? $condition_from : '',
                                       ),
                                       array(
                                           'type'              => 'number',
                                           'class'             => 'yith-wcbk-price-rule__condition__from yith-wcbk-price-rule__condition--show-if-numeric yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[from]',
                                           'custom_attributes' => $_is_numeric ? '' : 'disabled="disabled"',
                                           'value'             => $_is_numeric ? $condition_from : '',
                                       )
                                   )
                               ),
                               array(
                                   'type'   => 'section',
                                   'class'  => 'yith-wcbk-price-rule__condition__field-with-label',
                                   'fields' => array(
                                       array(
                                           'type'  => 'label',
                                           'class' => 'yith-wcbk-price-rule__condition__from-label',
                                           'value' => __( 'To', 'yith-booking-for-woocommerce' ),
                                       ),
                                       array(
                                           'type'              => 'admin-datepicker',
                                           'class'             => 'yith-wcbk-price-rule__condition__to yith-wcbk-price-rule__condition--show-if-custom',
                                           'name'              => $condition_field_name . '[to]',
                                           'custom_attributes' => 'custom' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'custom' === $condition_type ? $condition_to : '',
                                       ),
                                       array(
                                           'type'              => 'select',
                                           'class'             => 'yith-wcbk-price-rule__condition__to yith-wcbk-price-rule__condition--show-if-month yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[to]',
                                           'options'           => yith_wcbk_get_months_array(),
                                           'custom_attributes' => 'month' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'month' === $condition_type ? $condition_to : '',
                                       ),
                                       array(
                                           'type'              => 'select',
                                           'class'             => 'yith-wcbk-price-rule__condition__to yith-wcbk-price-rule__condition--show-if-week yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[to]',
                                           'options'           => yith_wcbk_get_weeks_array(),
                                           'custom_attributes' => 'week' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'week' === $condition_type ? $condition_to : '',
                                       ),
                                       array(
                                           'type'              => 'select',
                                           'class'             => 'yith-wcbk-price-rule__condition__to yith-wcbk-price-rule__condition--show-if-day yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[to]',
                                           'options'           => yith_wcbk_get_days_array(),
                                           'custom_attributes' => 'day' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'day' === $condition_type ? $condition_to : '',
                                       ),
                                       array(
                                           'type'              => 'time-select',
                                           'class'             => 'yith-wcbk-price-rule__condition__to yith-wcbk-price-rule__condition--show-if-time yith-wcbk-time-range-input',
                                           'name'              => $condition_field_name . '[to]',
                                           'custom_attributes' => 'time' === $condition_type ? '' : 'disabled="disabled"',
                                           'value'             => 'time' === $condition_type ? $condition_to : '',
                                       ),
                                       array(
                                           'type'              => 'number',
                                           'class'             => 'yith-wcbk-price-rule__condition__to yith-wcbk-price-rule__condition--show-if-numeric yith-wcbk-mini-field',
                                           'name'              => $condition_field_name . '[to]',
                                           'custom_attributes' => $_is_numeric ? '' : 'disabled="disabled"',
                                           'value'             => $_is_numeric ? $condition_to : '',
                                       )
                                   )
                               ),
                               array(
                                   'type'   => 'section',
                                   'class'  => 'yith-wcbk-price-rule__condition__field-with-label',
                                   'fields' => array(
                                       array(
                                           'type'  => 'html',
                                           'value' => $condition_index !== 1 ? "<label class='yith-wcbk-price-rule__condition__from-label'></label><span class='yith-wcbk-admin-button yith-wcbk-admin-button--secondary yith-wcbk-admin-button--trash yith-wcbk-admin-button--small yith-wcbk-price-rule__condition__delete-condition'>" . __( 'Delete condition', 'yith-booking-for-woocommerce' ) . "</span>" : '',
                                       )
                                   )
                               ),
                           )
                       ) );
