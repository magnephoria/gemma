<?php
/**
 * Title: List of posts with images, 1 column
 * Slug: gemma/posts-list
 * Categories: query, posts
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|contrast-3","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-width:1px">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-top:12px;padding-bottom:12px">
                <!-- wp:post-date {"textAlign":"left","format":null,"isLink":false,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} /-->
                
                <!-- wp:post-terms {"term":"category","className":"is-style-default","fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                <div class="wp-block-column">
                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"50%"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"contrast","className":"is-style-default","fontSize":"x-large"} /-->

                    <!-- wp:post-featured-image {"isLink":true,"width":"50%"} /-->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:post-excerpt /--></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast-3","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"
            style="border-top-color:var(--wp--preset--color--contrast-3);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
            <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
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