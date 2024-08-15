<?php
/**
 * Title: List of posts, 2 columns
 * Slug: gemma/posts-2-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"enhancedPagination":true,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignfull">
    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":2}} -->
        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"1rem"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
            <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

            <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

            <!-- wp:template-part {"slug":"post-meta","theme":"gemma"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull">
            <!-- wp:query-pagination {"paginationArrow":"arrow","align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous {"label":""} /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next {"label":""} /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:query -->