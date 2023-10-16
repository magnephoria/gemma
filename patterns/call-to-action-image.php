<?php
/**
 * Title: Call to action with image
 * Slug: gemma/cta-image
 * Categories: featured, banner, call-to-action
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:cover {"isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","gradient":"primary-to-secondary","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70);min-height:80vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-to-secondary-gradient-background"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"full"} -->
        <div class="wp-block-columns alignfull">
            <!-- wp:column {"verticalAlignment":"bottom","width":"66.66%","layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:heading {"fontSize":"xx-large","fontFamily":"uncut-sans"} -->
                    <h2 class="wp-block-heading has-uncut-sans-font-family has-xx-large-font-size">Create your website</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-xx-large-font-size">with simple elegance.</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
                <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor, sed diam voluptua et ea rebum.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"
                            href="#">Get started</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%">
                <!-- wp:image {"id":1955,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img
                        src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gem-crystal.png' ) ) ?>" alt="Abstract illustration of a gem crystal"
                        class="wp-image-1955" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:cover -->