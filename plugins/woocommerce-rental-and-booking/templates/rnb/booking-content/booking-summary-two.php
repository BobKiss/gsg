<div class="booking-pricing-info rnb-booking-summery-layout-two" style="display: none">
    <?php
    $general_data = reddq_rental_get_settings(get_the_ID(), 'general');
    $labels = reddq_rental_get_settings(get_the_ID(), 'labels', array('booking_info'));
    $displays = reddq_rental_get_settings(get_the_ID(), 'display');
    $labels = $labels['labels'];
    $displays = $displays['display'];
    $general = $general_data['general'];
    ?>
    <?php if (isset($displays['discount']) && $displays['discount'] === 'open'): ?>
        <p class="discount-rate"><?php echo esc_attr($labels['discount']); ?> <span style="float: right;"></span></p>
    <?php endif; ?>
    <?php if (isset($displays['instance_payment']) && $displays['instance_payment'] === 'open'): ?>
        <p class="pre-payment"><?php echo esc_attr($labels['instance_pay']); ?><span
                    style="float: right;"><?php echo esc_attr($general['instance_pay']); ?>%</span></p>
    <?php endif; ?>
    <h3 class="booking_cost"><?php echo esc_attr($labels['total_cost']); ?><span style="float: right;"></span></h3>
</div>