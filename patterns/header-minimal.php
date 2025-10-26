<?php
/**
 * Title: Header, minimal
 * Slug: gemma/header-minimal
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|accent","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"
    style="border-bottom-color:var(--wp--preset--color--accent);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignfull"
        style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
        <!-- wp:site-title {"level":0} /-->

        <!-- wp:navigation {"overlayBackgroundColor":"accent","layout":{"type":"flex","setCascadingProperties":"true","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->