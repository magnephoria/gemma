<?php
/**
 * Title: Call to action with image
 * Slug: gemma/cta-image
 * Categories: featured, banner, call-to-action
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:cover {"minHeight":100,"minHeightUnit":"vh","gradient":"gradient-1","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"
    style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);min-height:100vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-1-gradient-background"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaId":1955,"mediaLink":"","mediaType":"image","mediaWidth":33,"imageFill":false} -->
        <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"
            style="grid-template-columns:auto 33%">
            <div class="wp-block-media-text__content">
                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group"
                    style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"className":"is-style-default","fontFamily":"body"} -->
                    <h2 class="wp-block-heading is-style-default has-body-font-family">Nonumy veriat solantis</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading -->
                    <h2 class="wp-block-heading">amet tesanova iocartis.</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor, sed diam voluptua et ea rebum.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <figure class="wp-block-media-text__media"><img
                    src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gem-crystal.png' ) ) ?>" alt="Abstract illustration of a gem crystal" class="wp-image-1955 size-full" /></figure>
        </div>
        <!-- /wp:media-text -->
    </div>
</div>
<!-- /wp:cover -->