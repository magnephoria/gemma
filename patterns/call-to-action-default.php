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
	<!-- wp:paragraph {"align":"center","className":"is-style-all-caps","fontSize":"small"} -->
	<p class="has-text-align-center is-style-all-caps has-small-font-size">Build with ease</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center">Create a site with block patterns</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Gemma is a simple, modern block theme with responsive typography and an elegant style.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a
				class="wp-block-button__link wp-element-button"
				href="#">Get started</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Read more</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->