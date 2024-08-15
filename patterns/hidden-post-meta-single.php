<?php
/**
 * Title: Post meta on single post
 * Slug: gemma/hidden-post-meta-single
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"blockGap":"0.4em"}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group">
		<!-- wp:post-date /-->

        <!-- wp:paragraph {"textColor":"contrast-2"} -->
        <p class="has-contrast-2-color has-text-color">·</p>
        <!-- /wp:paragraph -->

        <!-- wp:post-author-name {"isLink":true} /-->

        <!-- wp:separator {"className":"is-style-wide","style":{"layout":{"selfStretch":"fixed","flexSize":"var(--wp--preset--spacing--50)"}}} -->
        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
        <!-- /wp:separator -->

        <!-- wp:post-terms {"term":"category"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->