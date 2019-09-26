<?php

/**
 * rnb_get_inventory_taxonomies
 *
 * @return array
 */
function rnb_get_inventory_taxonomies()
{
    $taxonomy_args = array(
        array(
            'taxonomy'  => 'rnb_categories',
            'label'     => __('RnB Categories', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'resource',
            'label'     => __('Resources', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'person',
            'label'     => __('Person', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'deposite',
            'label'     => __('Deposit', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'attributes',
            'label'     => __('Attributes', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'features',
            'label'     => __('Features', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'pickup_location',
            'label'     => __('Pickup Location', 'redq-rental'),
            'post_type' => 'inventory'
        ),
        array(
            'taxonomy'  => 'dropoff_location',
            'label'     => __('Dropoff Location', 'redq-rental'),
            'post_type' => 'inventory'
        ),
    );
    return apply_filters('rnb_register_inventory_taxonomy', $taxonomy_args);
}

/**
 * rnb_term_meta_data_provider
 *
 * @return array
 */
function rnb_term_meta_data_provider()
{
    //Rnb Categories Term Meta args
    $args[] = [
        'taxonomy' => 'rnb_categories',
        'args'     => array(
            'title'       => __('Quantity', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_rnb_cat_qty',
            'column_name' => __('Qty', 'redq-rental'),
            'placeholder' => __('Categories Quantity', 'redq-rental'),
            'required'    => false,
        )
    ];
    $args[] = [
        'taxonomy' => 'rnb_categories',
        'args'     => array(
            'title'       => __('Choose Payable or Not', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_rnb_cat_payable_or_not',
            'column_name' => __('Pay', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'yes',
                    'value' => esc_html__('Yes', 'redq-rental')
                ),
                '1' => array(
                    'key'   => 'no',
                    'value' => esc_html__('No', 'redq-rental')
                ),
            ),
        )
    ];
    $args[] = [
        'taxonomy' => 'rnb_categories',
        'args'     => array(
            'title'       => __('Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_rnb_cat_cost_termmeta',
            'column_name' => __('Cost', 'redq-rental'),
            'placeholder' => __('Categories Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];
    $args[] = [
        'taxonomy' => 'rnb_categories',
        'args'     => array(
            'title'       => __('Price Applicable', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_rnb_cat_price_applicable_term_meta',
            'column_name' => __('Applied', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'one_time',
                    'value' => esc_html__('One Time', 'redq-rental')
                ),
                '1' => array(
                    'key'   => 'per_day',
                    'value' => esc_html__('Per Day', 'redq-rental')
                ),
            ),
        )
    ];
    $args[] = [
        'taxonomy' => 'rnb_categories',
        'args'     => array(
            'title'       => __('Hourly Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_rnb_cat_hourly_cost_termmeta',
            'column_name' => __('H.Cost', 'redq-rental'),
            'placeholder' => __('Hourly Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];
    $args[] = [
        'taxonomy' => 'rnb_categories',
        'args'     => array(
            'title'       => __('Always Selected Or Not', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_rnb_cat_clickable_term_meta',
            'column_name' => __('Selected', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'yes',
                    'value' => esc_html__('Yes', 'redq-rental')
                ),
                '1' => array(
                    'key'   => 'no',
                    'value' => esc_html__('No', 'redq-rental')
                ),
            ),
        )
    ];

    //Resource Term Meta args
    $args[] = [
        'taxonomy' => 'resource',
        'args'     => array(
            'title'       => __('Hourly Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_hourly_cost_termmeta',
            'column_name' => __('H.Cost', 'redq-rental'),
            'placeholder' => __('Hourly Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'resource',
        'args'     => array(
            'title'       => __('Price Applicable', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_price_applicable_term_meta',
            'column_name' => __('Applicable', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'one_time',
                    'value' => 'One Time'
                ),
                '1' => array(
                    'key'   => 'per_day',
                    'value' => 'Per Day'
                ),
            ),
        )
    ];

    $args[] = [
        'taxonomy' => 'resource',
        'args'     => array(
            'title'       => __('Resource Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_resource_cost_termmeta',
            'column_name' => __('R.Cost', 'redq-rental'),
            'placeholder' => __('Resource Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];


    //Person Term Meta args
    $args[] = [
        'taxonomy' => 'person',
        'args'     => array(
            'title'       => __('Choose payable or not', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_person_payable_or_not',
            'column_name' => __('Payable', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'yes',
                    'value' => esc_html__('Yes', 'redq-rental')
                ),
                '1' => array(
                    'key'   => 'no',
                    'value' => esc_html__('No', 'redq-rental')
                ),
            ),
        )
    ];

    $args[] = [
        'taxonomy' => 'person',
        'args'     => array(
            'title'       => __('Choose Person Type', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_person_type',
            'column_name' => __('P.Type', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'none',
                    'value' => esc_html__('None', 'redq-rental')
                ),
                '1' => array(
                    'key'   => 'adult',
                    'value' => esc_html__('Adult', 'redq-rental')
                ),
                '2' => array(
                    'key'   => 'child',
                    'value' => esc_html__('Child', 'redq-rental')
                ),
            ),
        )
    ];

    $args[] = [
        'taxonomy' => 'person',
        'args'     => array(
            'title'       => __('Person Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_person_cost_termmeta',
            'column_name' => __('P.Cost', 'redq-rental'),
            'placeholder' => __('Person Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'person',
        'args'     => array(
            'title'       => __('Price Applicable', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_person_price_applicable_term_meta',
            'column_name' => __('Applicable', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'one_time',
                    'value' => 'One Time'
                ),
                '1' => array(
                    'key'   => 'per_day',
                    'value' => 'Per Day'
                ),

            ),
        )
    ];

    $args[] = [
        'taxonomy' => 'person',
        'args'     => array(
            'title'       => __('Hourly Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_peroson_hourly_cost_termmeta',
            'column_name' => __('H.Cost', 'redq-rental'),
            'placeholder' => __('Hourly Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];


    //Deposit Term Meta args
    $args[] = [
        'taxonomy' => 'deposite',
        'args'     => array(
            'title'       => __('Security Deposite Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_sd_cost_termmeta',
            'column_name' => __('S.D.Cost', 'redq-rental'),
            'placeholder' => __('Security Deposite Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'deposite',
        'args'     => array(
            'title'       => __('Price Applicable', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_sd_price_applicable_term_meta',
            'column_name' => __('Applicable', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'one_time',
                    'value' => 'One Time'
                ),
                '1' => array(
                    'key'   => 'per_day',
                    'value' => 'Per Day'
                ),
            ),
        )
    ];

    $args[] = [
        'taxonomy' => 'deposite',
        'args'     => array(
            'title'       => __('Hourly Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_sd_hourly_cost_termmeta',
            'column_name' => __('H.Cost', 'redq-rental'),
            'placeholder' => __('Hourly Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'deposite',
        'args'     => array(
            'title'       => __('Security Deposite Clickable', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_sd_price_clickable_term_meta',
            'column_name' => __('Clickable', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'yes',
                    'value' => 'Yes'
                ),
                '1' => array(
                    'key'   => 'no',
                    'value' => 'No'
                ),
            ),
        )
    ];

    //Pickup Location Term Meta args
    $args[] = [
        'taxonomy' => 'pickup_location',
        'args'     => array(
            'title'       => __('Pickup Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_pickup_cost_termmeta',
            'column_name' => __('Cost', 'redq-rental'),
            'placeholder' => __('Pickup Location Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'pickup_location',
        'args'     => array(
            'title'       => __('Latitude', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_pickup_location_lat',
            'column_name' => __('Latitude', 'redq-rental'),
            'placeholder' => __('Latitude', 'redq-rental'),
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'pickup_location',
        'args'     => array(
            'title'       => __('Longitude', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_pickup_location_lng',
            'column_name' => __('Longitude', 'redq-rental'),
            'placeholder' => __('Longitude', 'redq-rental'),
            'required'    => false,
        )
    ];


    //Dropoff Location Term Meta args
    $args[] = [
        'taxonomy' => 'dropoff_location',
        'args'     => array(
            'title'       => __('Dropoff Cost', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_dropoff_cost_termmeta',
            'column_name' => __('Cost', 'redq-rental'),
            'placeholder' => __('Dropoff Location Cost', 'redq-rental'),
            'text_type'   => 'price',
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'dropoff_location',
        'args'     => array(
            'title'       => __('Latitude', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_dropoff_location_lat',
            'column_name' => __('Latitude', 'redq-rental'),
            'placeholder' => __('Latitude', 'redq-rental'),
            'required'    => false,
        )
    ];

    $args[] = [
        'taxonomy' => 'dropoff_location',
        'args'     => array(
            'title'       => __('Longitude', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_dropoff_location_lng',
            'column_name' => __('Longitude', 'redq-rental'),
            'placeholder' => __('Longitude', 'redq-rental'),
            'required'    => false,
        )
    ];

    //Attributes Term Meta args
    $args[] = [
        'taxonomy' => 'attributes',
        'args'     => [
            'title'       => __('Attribute Name', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_attribute_name',
            'column_name' => __('A.Name', 'redq-rental'),
            'placeholder' => __('Attribute Name', 'redq-rental'),
            'required'    => false,
        ]
    ];

    $args[] = array(
        'taxonomy' => 'attributes',
        'args'     => array(
            'title'       => __('Attribute Value', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_attribute_value',
            'column_name' => __('A.Value', 'redq-rental'),
            'placeholder' => __('Attribute Value', 'redq-rental'),
            'required'    => false,
        )
    );

    $args[] = array(
        'taxonomy' => 'attributes',
        'args'     => array(
            'title'       => __('Choose Image/Icon', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'choose_attribute_icon',
            'column_name' => __('I.Type', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'icon',
                    'value' => 'Icon'
                ),
                '1' => array(
                    'key'   => 'image',
                    'value' => 'Image'
                ),
            ),
        )
    );

    $args[] = array(
        'taxonomy' => 'attributes',
        'args'     => array(
            'title'       => __('Attribute Icon', 'redq-rental'),
            'type'        => 'text',
            'id'          => 'inventory_attribute_icon',
            'column_name' => __('Icon', 'redq-rental'),
            'placeholder' => __('Font-awesome icon Ex. fa fa-car', 'redq-rental'),
            'required'    => false,
        )
    );

    $args[] = array(
        'taxonomy' => 'attributes',
        'args'     => array(
            'title'       => __('Attribute Image', 'redq-rental'),
            'type'        => 'image',
            'id'          => 'attributes_image_icon',
            'column_name' => __('Image', 'redq-rental'),
        )
    );

    $args[] = array(
        'taxonomy' => 'attributes',
        'args'     => array(
            'title'       => __('Highlighted Or Not', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_attribute_highlighted',
            'column_name' => __('Highlighted', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'yes',
                    'value' => 'Yes'
                ),
                '1' => array(
                    'key'   => 'no',
                    'value' => 'No'
                ),
            ),
        )
    );

    //Feature term meta args
    $args[] = array(
        'taxonomy' => 'features',
        'args'     => array(
            'title'       => __('Highlighted Or Not', 'redq-rental'),
            'type'        => 'select',
            'id'          => 'inventory_feature_highlighted',
            'column_name' => __('Highlighted', 'redq-rental'),
            'options'     => array(
                '0' => array(
                    'key'   => 'yes',
                    'value' => 'Yes'
                ),
                '1' => array(
                    'key'   => 'no',
                    'value' => 'No'
                ),
            ),
        )
    );

    //Car Company term meta args
    $args[] = array(
        'taxonomy' => 'car_company',
        'args'     => array(
            'title'       => __('Car Company Image', 'redq-rental'),
            'type'        => 'image',
            'id'          => 'product_car_company_icon',
            'column_name' => __('Image', 'redq-rental'),
        )
    );

    return apply_filters('rnb_inventory_term_meta_args', $args);
}
