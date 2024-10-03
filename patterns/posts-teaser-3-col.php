<?php
/**
 * Title: Teaser list of posts, 3 columns
 * Slug: gemma/posts-teaser-3-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"false","inherit":false},"enhancedPagination":true,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignfull">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"
        style="padding-right:0;padding-left:0">
        <!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group">
            <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

            <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

            <!-- wp:template-part {"slug":"post-meta","theme":"gemma"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:query -->