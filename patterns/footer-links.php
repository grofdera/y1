<?php
/**
 * Title: Footer links
 * Slug: yubaspace/footer-links
 * Categories: text
 * Inserter: no
 *
 * @package yubaspace
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e( 'Copyright', 'yubaspace' );
echo ' ' . date_i18n( _x( 'Y', 'copyright date format', 'yubaspace' ) ); ?></p><!-- /wp:paragraph -->
<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
<?php echo yubaspace_privacy(); ?>
</div><!-- /wp:group -->
</div><!-- /wp:group -->
