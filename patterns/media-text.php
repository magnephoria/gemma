<?php
/**
 * Title: Media text
 * Slug: gemma/media-text
 * Categories: text, call-to-action
 * Block Types: core/media-text
 */
?>

<!-- wp:media-text {"align":"wide","mediaId":1953,"mediaLink":"","mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile">
    <figure class="wp-block-media-text__media"><img
            src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gem-crystal-2.png' ) ) ?>" alt=""
            class="wp-image-1953 size-full" /></figure>
    <div class="wp-block-media-text__content">
        <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}},"textColor":"accent-3","className":"is-style-default"} -->
            <p class="is-style-default has-accent-3-color has-text-color has-link-color">Nonumy veriat solantis</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">Lorem ipsum dolor sit amet consetetur diam nonumy</h2>
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
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent-2","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a
                    class="wp-block-button__link has-accent-2-background-color has-background wp-element-button"
                    href="#">Get started</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:media-text -->