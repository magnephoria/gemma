<?php
/**
 * Title: Grid with images
 * Slug: gemma/query-grid-posts
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull">
    <!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:post-featured-image {"isLink":true,"width":""} /-->

        <!-- wp:post-terms {"term":"category","prefix":"✴︎ "} /-->

        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

        <!-- wp:post-date /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"label":"","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.07em"}},"fontSize":"small"} /-->

        <!-- wp:query-pagination-numbers {"style":{"typography":{"letterSpacing":"0.07em"}}} /-->

        <!-- wp:query-pagination-next {"label":"","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.07em"}},"fontSize":"small"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:query -->