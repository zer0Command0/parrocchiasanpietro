<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parrocchia_San_Pietro
 */

?>

<footer id="site-footer" style="min-height: 150px">
    <div class="container px-3 py-4">
        <div class="row">
            <div class="col-12 col-lg-4 pb-3">
                <?php if  ( is_active_sidebar( 'social-links' ) ) : dynamic_sidebar( 'social-links' )?>
                <?php endif;?>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                <?php if  ( is_active_sidebar( 'footer-menu' ) ) : dynamic_sidebar( 'footer-menu' )?>
                <?php endif;?>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                <?php if  ( is_active_sidebar( 'donate-menu' ) ) : dynamic_sidebar( 'donate-menu' )?>
                <?php endif;?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
