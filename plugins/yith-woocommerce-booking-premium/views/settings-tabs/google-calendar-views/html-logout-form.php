<?php
/**
 * @var string $nonce
 */
!defined( 'YITH_WCBK' ) && exit();
?>
<form method='POST' class='yith-wcbk-google-calendar-action'>
    <input type='hidden' name='yith-wcbk-google-calendar-action' value='logout'/>
    <input type='submit' value='<?php _e( 'Logout', 'yith-booking-for-woocommerce' ) ?>' class='yith-wcbk-google-calendar-button logout'>
    <?php echo $nonce ?>
</form>