<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsgsite
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	    <div class="container">
    		<div class="row d-flex">
    		    <div class="footer__wrap">
    		        <div class="footer__menu d-flex justify-content-between">
    		            <a href="#" class="footer__menu_item">אודות</a>
    		            <span class="footer__menu_sep"></span>
										<a href="#" class="footer__menu_item">פרוייקטים בארץ מיידיים</a>
    		            <span class="footer__menu_sep"></span>
										<a href="#" class="footer__menu_item">פרוייקטים  בארץ להשקעה</a>
    		            <span class="footer__menu_sep"></span>
										<a href="#" class="footer__menu_item">חו”ל GSG</a>
    		            <span class="footer__menu_sep"></span>
    		            <a href="#" class="footer__menu_item">ניהול ופיקוח</a>
    		            <span class="footer__menu_sep"></span>
    		            <a href="#" class="footer__menu_item">אנרגיה GSG</a>
    		            <span class="footer__menu_sep"></span>
    		            <a href="#" class="footer__menu_item">חילוץ פרוייקטים וניהול משברים</a>
    		            <span class="footer__menu_sep"></span>
    		            <a href="#" class="footer__menu_item">מהתקשורת</a>
    		            <span class="footer__menu_sep"></span>
    		            <a href="#" class="footer__menu_item">מגזין</a>
    		            <span class="footer__menu_sep"></span>
    		            <a href="#" class="footer__menu_item">צור קשר</a>
    		        </div>
    		        <div class="footer__links d-flex justify-content-between">
    		            <div class="footer__links_item">כתובת   <span class="footer__menu_sep"></span>רחוב יפו 27  <span class="footer__menu_sep"></span> חיפה, ישראל</div>
    		            <div class="footer__links_item">טלפון <span class="footer__menu_sep"></span>972-722-20-20-70+</div>
    		            <div class="footer__links_item">מייל <span class="footer__menu_sep"></span>office@gsg.co.il</div>
    		            <div class="footer__links_item" style="color:white;"><a href="#">ENGLISH</a><span class="footer__menu_sep"></span><a href="#" style="margin-left:14px;">HEBREW</a>Change language</div>
    		            <div class="footer__links_item" style="color:white;">
    		                <a href="https://www.facebook.com/gavish.shaham/" style="margin-left:10px;">
    		                    <svg type="image/svg+xml" data="SvgImg.svg" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
    		                       <img src="<?php bloginfo('template_url'); ?>/assets/images/fb-white.svg" width="30" height="30" alt="image format png" />
                                </svg>
    		                </a>
    		                <a href="https://www.instagram.com/gavish_shaham_group/" style="margin-left:10px;">
    		                    <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg">
    		                       <img src="<?php bloginfo('template_url'); ?>/assets/images/insta-white.svg" width="30" height="30" alt="image format png" />
                                </svg>
    		                </a>Our social
    		            </div>
    		        </div>
    		    </div>
    	   </div>
    		    <div class="row">
    		        <div class="col-12 d-flex justify-content-center">
    		            <a href="<?php echo get_bloginfo('url') ?>" class="footer__logo">
    		                <img <img src="<?php bloginfo('template_url'); ?>/assets/images/WhiteLogo.png" alt="<?php echo get_bloginfo('name') ?>">
    	                </a>
    		        </div>
    		    </div>
    	    <a href="#" class="footer__upbtn">
						<!-- upbtn.svg is breaking page it's not svg -->
    	       <!-- <object type="image/svg+xml" data="SvgImg.svg" width="100" height="100">
    	           <img src="<?php bloginfo('template_url'); ?>/assets/images/upbtn.svg" width="100" height="100" alt="image format png" />
            	</object> -->
    		</a>
    	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
