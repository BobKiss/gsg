<?php
global $product;
$product_id = get_the_ID();
$redq_product_inventory = rnb_get_product_inventory_id($product_id);

if (!empty($redq_product_inventory))
    $resources = $product->redq_get_rental_payable_attributes('resource', $redq_product_inventory[0]);
?>

<?php if (isset($resources) && !empty($resources)) : ?>
    <div class="payable-extras rnb-component-wrapper">
        <?php
        $labels = reddq_rental_get_settings(get_the_ID(), 'labels', array('resources'));
        $labels = $labels['labels'];
        ?>
        <h5><?php echo esc_attr($labels['resource']); ?></h5>
        <?php foreach ($resources as $key => $value) { ?>
            <div class="attributes">
                <label class="custom-block">
                    <?php $dta = array();
                    $dta['name'] = $value['resource_name'];
                    $dta['cost'] = $value['resource_cost']; ?>
                    <input type="checkbox" name="extras[]"
                           value="<?php echo esc_attr($value['resource_name']); ?>|<?php echo esc_attr($value['resource_cost']); ?>|<?php echo esc_attr($value['resource_applicable']); ?>|<?php echo esc_attr($value['resource_hourly_cost']); ?>"
                           data-name="<?php echo esc_attr($value['resource_name']); ?>" data-value-in="0"
                           data-applicable="<?php echo esc_attr($value['resource_applicable']); ?>"
                           data-value="<?php echo esc_attr($value['resource_cost']); ?>"
                           data-hourly-rate="<?php echo esc_attr($value['resource_hourly_cost']); ?>"
                           data-currency-before="$" data-currency-after="" class="carrental_extras">
                    <?php echo esc_attr($value['resource_name']); ?>

                    <?php if ($value['resource_applicable'] == 'per_day') { ?>
                        <span class="pull-right show_if_day"><?php echo wc_price($value['resource_cost']); ?><span><?php _e(' - Per Day', 'redq-rental'); ?></span></span>
                        <span class="pull-right show_if_time"><?php echo wc_price($value['resource_hourly_cost']); ?><?php _e(' - Per Hour', 'redq-rental'); ?></span>
                    <?php } else { ?>
                        <span class="pull-right"><?php echo wc_price($value['resource_cost']); ?><?php _e(' - One Time', 'redq-rental'); ?></span>
                    <?php } ?>
                </label>
            </div>
        <?php } ?>
    </div>
<?php else : ?>
    <div class="payable-extras rnb-component-wrapper" style="display: none">
        <?php
        $labels = reddq_rental_get_settings(get_the_ID(), 'labels', array('resources'));
        $labels = $labels['labels'];
        ?>
        <h5><?php echo esc_attr($labels['resource']); ?></h5>
    </div>
<?php endif; ?>