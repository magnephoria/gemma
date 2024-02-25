<?php
/**
 * Title: Call to action
 * Slug: gemma/cta-default
 * Categories: featured, banner, call-to-action
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:cover {"overlayColor":"accent-3","minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-base-2-color has-text-color has-link-color"
    style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);min-height:80vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-accent-3-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"xx-large","fontFamily":"body"} -->
                <h2 class="wp-block-heading has-body-font-family has-xx-large-font-size">Consetur carian elitus</h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"fontSize":"xx-large"} -->
                <h2 class="wp-block-heading has-xx-large-font-size">diam nonumy elegantia.</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

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