<?php
/**
 * Title: Post meta on single post
 * Slug: gemma/hidden-post-meta-single
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"fontSize":"small","fontFamily":"body","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group has-body-font-family has-small-font-size" style="letter-spacing:0.1em;text-transform:uppercase">
		<!-- wp:post-date {"format":null,"isLink":false} /-->

		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color">—</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'by', 'Prefix for the post author block: By author name', 'gemma' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true} /-->

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ', 'Prefix for the post category block: in category name', 'gemma' ); ?>"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
