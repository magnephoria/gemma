<?php
/**
 * Title: Hero
 * Slug: gemma/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:paragraph {"align":"center","className":"is-style-all-caps","fontSize":"small"} -->
    <p class="has-text-align-center is-style-all-caps has-small-font-size">Philosophy & Art</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
    <h1 class="wp-block-heading alignwide has-text-align-center">Radiance in Stone</h1>
    <!-- /wp:heading -->
     
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"accent-2","textColor":"contrast","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
        <div class="wp-block-button is-style-fill"><a
                class="wp-block-button__link has-contrast-color has-accent-2-background-color has-text-color has-background has-link-color wp-element-button"
                href="#">Read more</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gemma.webp","dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img
        class="wp-block-cover__image-background" 
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gemma.webp" alt="<?php esc_attr_e( 'Abstract graphic of a crystal in pastel colors', 'gemma' ); ?>" 
        data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
    </div>
</div>
<!-- /wp:cover -->