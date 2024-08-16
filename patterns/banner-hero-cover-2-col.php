<?php
/**
 * Title: Hero Cover, 2 columns
 * Slug: gemma/banner-hero-cover-2-col
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section, 2 columns, with a title, a paragraph, a CTA button, and an image.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"gradient":"gradient-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gradient-2-gradient-background has-background"
    style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
            <h1 class="wp-block-heading">Create with elegance</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Get
                        started</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"id":1887,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img
                    src="http://wordpress.lndo.site/wp-content/uploads/2024/04/pexels-anderson-cavalera-1856142-768x1024.jpg"
                    alt="" class="wp-image-1887" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->