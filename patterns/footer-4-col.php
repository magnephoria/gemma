<?php
/**
 * Title: Footer, 4 columns
 * Slug: gemma/footer-4-col
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"},"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background"
    style="margin-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull"
        style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:paragraph {"fontSize":"large"} -->
                <p class="has-large-font-size">Gemma is a simple, modern block theme with responsive typography and an elegant style</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"10%"} -->
            <div class="wp-block-column" style="flex-basis:10%"></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"fontSize":"large"} -->
                        <h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Philosophy', 'gemma' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group">

                            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"ariaLabel":"<?php esc_attr_e( 'Philosophy', 'gemma' ); ?>"} -->

                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Nonumy magna', 'gemma' ); ?>","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Lorem ipsum', 'gemma' ); ?>","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Nonumy magna', 'gemma' ); ?>","url":"#"} /-->

                            <!-- /wp:navigation -->

                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"fontSize":"large"} -->
                        <h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Artes', 'gemma' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group">

                            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"ariaLabel":"<?php esc_attr_e( 'Artes', 'gemma' ); ?>"} -->

                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Nonumy magna', 'gemma' ); ?>","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Lorem ipsum', 'gemma' ); ?>","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Nonumy magna', 'gemma' ); ?>","url":"#"} /-->

                            <!-- /wp:navigation -->

                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"fontSize":"large"} -->
                        <h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'About', 'gemma' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group">

                            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"ariaLabel":"<?php esc_attr_e( 'About', 'gemma' ); ?>"} -->

                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Nonumy magna', 'gemma' ); ?>","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Lorem ipsum', 'gemma' ); ?>","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Nonumy magna', 'gemma' ); ?>","url":"#"} /-->

                            <!-- /wp:navigation -->

                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:spacer {"height":"var:preset|spacing|60"} -->
        <div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignfull">
            <!-- wp:site-title {"level":0} /-->

            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":"true","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} -->
            <!-- wp:navigation-link {"label":"Stellaris","url":"#","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Lunavis","url":"#","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Solacur","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->