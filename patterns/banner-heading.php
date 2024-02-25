<?php
/**
 * Title: Banner with heading
 * Slug: gemma/banner-heading
 * Categories: banner, text
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/gem-crystal-2.png' ) ) ?>","id":1953,"dimRatio":50,"overlayColor":"accent-2","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"
    style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:100vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-accent-2-background-color has-background-dim"></span><img
        class="wp-block-cover__image-background wp-image-1953" alt=""
        src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gem-crystal-2.png' ) ) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide"><!-- wp:paragraph -->
            <p>Nonumy veriat solantis</p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"backgroundColor":"base-2"} -->
            <hr
                class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background" />
            <!-- /wp:separator -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor, sed diam voluptua et ea rebum.</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->