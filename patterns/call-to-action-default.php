<?php
/**
 * Title: Call to action
 * Slug: gemma/cta-default
 * Categories: featured, banner, call-to-action
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:cover {"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-contrast-color has-text-color has-link-color"
    style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:80vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-quaternary-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xx-large","fontFamily":"uncut-sans"} -->
                <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-uncut-sans-font-family has-xx-large-font-size">Create your website</h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"fontSize":"xx-large"} -->
                <h2 class="wp-block-heading has-xx-large-font-size">with simple elegance.</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
            <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor, sed diam voluptua et ea rebum.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Get started</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->