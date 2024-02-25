<?php
/**
 * Title: Post navigation
 * Slug: gemma/hidden-post-navigation
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Posts', 'gemma' ); ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)" aria-label="<?php esc_attr_e( 'Posts', 'gemma' ); ?>">
	<!-- wp:post-navigation-link {"type":"previous","arrow":"arrow"} /-->

    <!-- wp:post-navigation-link {"label":"","arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->
