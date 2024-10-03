<?php
/**
 * Title: Hero
 * Slug: gemma/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>

<!-- wp:group {"metadata":{"categories":["banner"],"patternName":"gemma/banner-hero","name":"Hero"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
    <h1 class="wp-block-heading alignwide has-text-align-center">Ein Engagement für Innovation und Nachhaltigkeit</h1>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Études ist ein bahnbrechendes Unternehmen, das Kreativität und Funktionalität
            nahtlos miteinander verbindet, um architektonische Spitzenleistungen neu zu definieren.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"accent-4","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-contrast-color has-accent-4-background-color has-text-color has-background has-link-color wp-element-button"
                    href="#">About</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-default"} -->
    <figure class="wp-block-image alignwide size-full is-style-default"><img
            src="http://wordpress.lndo.site/wp-content/themes/gemma/assets/images/pexels-anderson-cavalera-1856142.webp"
            alt="Äußeres Gebäude in Toronto, Kanada" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->