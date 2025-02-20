<?php
/**
 * @var string $auth_url
 * @var string $redirect_uri
 */
!defined( 'YITH_WCBK' ) && exit();
?>
<h3> <?php _e( 'Access', 'yith-booking-for-woocommerce' ) ?></h3>

<a href="<?php echo $auth_url ?>" class="yith-wcbk-google-calendar-button access"><?php _e( 'Click here to access', 'yith-booking-for-woocommerce' ) ?></a>
<div class="yith-wcbk-google-calendar-how-to">
    <div style="text-align: left">
        <?php _e( 'Please note: you should add the following URI to the <strong>Allowed Redirect URI</strong> in your ID client OAuth 2.0', 'yith-booking-for-woocommerce' ) ?>
    </div>
    <input type="text" id="yith-wcbk-google-calendar-redirect-uri" value="<?php echo $redirect_uri ?>" disabled/>
    <span class="dashicons dashicons-admin-page yith-wcbk-copy-to-clipboard tips" data-selector-to-copy="#yith-wcbk-google-calendar-redirect-uri" data-tip='<?php _e( 'Copy to clipboard', 'yith-booking-for-woocommerce' ) ?>'></span>
</div>
