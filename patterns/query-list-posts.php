<?php
/**
 * Title: List with images
 * Slug: gemma/query-list-posts
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:query {"queryId":31,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"layout":{"type":"constrained"}} -->
    <div class="wp-block-query"><!-- wp:group {"align":"full","layout":{"type":"default"}} -->
        <div class="wp-block-group alignfull"><!-- wp:post-template {"align":"full"} -->
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                <!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group"
                    style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group" style="padding-top:12px;padding-bottom:12px">
                        <!-- wp:post-terms {"term":"category","prefix":"✴︎ "} /-->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"has-small-font-size"} -->
                            <p class="has-small-font-size">✴︎</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-date {"textAlign":"left","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                        <div class="wp-block-column">
                            <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"50%"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"x-large"} /-->

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
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"align":"full","layout":{"type":"default"}} -->
        <div class="wp-block-group alignfull">
            <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous {"label":"","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.07em"}},"fontSize":"small"} /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next {"label":"","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.07em"}},"fontSize":"small"} /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->