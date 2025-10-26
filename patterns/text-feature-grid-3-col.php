<?php
/**
 * Title: Feature grid, 3 columns
 * Slug: gemma/text-feature-grid-3-col
 * Categories: text, about
 * Viewport width: 1400
 * Description: A feature grid of 2 rows and 3 columns with headings and text.
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:separator {"align":"wide","className":"is-style-default","backgroundColor":"contrast-3"} -->
    <hr
        class="wp-block-separator alignwide has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-default" />
    <!-- /wp:separator -->

    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-all-caps"} -->
        <p class="is-style-all-caps">Features</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-x-large-font-size">Flexible</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Gemma is a simple, modern block theme with responsive typography and an elegant style.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-x-large-font-size">Beautiful</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Gemma is a simple, modern block theme with responsive typography and an elegant style.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-x-large-font-size">Open Source</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Gemma is a simple, modern block theme with responsive typography and an elegant style.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->