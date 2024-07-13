<?php
/**
 * Title: Comments
 * Slug: gemma/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop">
	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"contrast-3","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--40)" />
	<!-- /wp:separator -->
	<!-- wp:heading -->
	<h2><?php esc_html_e( 'Comments', 'gemma' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:comments-title {"level":3} /-->
	<!-- wp:comment-template -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:avatar {"size":40} /-->
	
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:comment-author-name /-->
	
				<!-- wp:comment-date /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	
		<!-- wp:comment-content /-->
	
		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:comment-edit-link /-->
			<!-- wp:comment-reply-link /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:comments-pagination-previous /-->
	<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->
</div>
<!-- /wp:comments -->
