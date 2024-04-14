<?php
/**
 * Title: Call to action
 * Slug: gemma/cta-default
 * Categories: featured, banner, call-to-action
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center">Create a site with block patterns</h1>
	<!-- /wp:heading -->

	<!-- wp:separator {"className":"is-style-default"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-default" />
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Gemma is a simple, modern block theme with responsive typography and an elegant style.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
		<div class="wp-block-button"><a
				class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button"
				href="#">Get started</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Read more</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->