<?php
/**
 * Title: Post navigation
 * Slug: gemma/hidden-post-navigation
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"nav","style":{"spacing":{"padding":{"bottom":"0","top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast-3","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav aria-label="<?php esc_attr_e( 'Posts', 'gemma' ); ?>" class="wp-block-group"
    style="border-top-color:var(--wp--preset--color--contrast-3);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:0">
    <!-- wp:post-navigation-link {"type":"previous","arrow":"arrow"} /-->

    <!-- wp:post-navigation-link {"label":"","arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->