<?php
/**
 * Gemma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gemma
 * @since Gemma 1.0
 */

/**
 * Load theme languages
 */

function gemma_load_theme_textdomain() {
    load_theme_textdomain( 'gemma', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'gemma_load_theme_textdomain' );

/**
 * Register block styles.
 */

if ( ! function_exists( 'gemma_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Gemma 1.0
	 * @return void
	 */
	function gemma_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'gemma' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: 1rem;
					padding-bottom: 1rem;
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'gemma' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					border: 1px solid var(--wp--preset--color--contrast);
					padding: 0.2rem 0.8rem;
                    margin: 0.1rem 0;
					border-radius: 99rem;
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'gemma' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		// register_block_style(
		// 	'core/paragraph',
		// 	array(
		// 		'name'         => 'label',
		// 		'label'        => __( 'Label', 'gemma' ),
		// 		/*
		// 		 * Styles for the custom label block style
		// 		 */
		// 		'inline_style' => '
		// 		.is-style-label {
		// 			text-transform: uppercase;
		// 			letter-spacing: 0.05em;
		// 		}',
		// 	)
		// );
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'gemma' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		// register_block_style(
		// 	'core/heading',
		// 	array(
		// 		'name'         => 'separator',
		// 		'label'        => __( 'With separator', 'gemma' ),
		// 		'inline_style' => "
		// 		.is-style-separator:after {
		// 			content: '';
		// 			width: var(--wp--preset--spacing--60);
		// 			height: 0.4em;
		// 			border-bottom: 1px solid var(--wp--preset--color--contrast, currentColor);
		// 			display: block;
		// 		}

		// 		/* Hide the separator if the heading has no content, to avoid using empty headings to display the separator only, which is an A11Y issue */
		// 		.is-style-separator:empty:after {
		// 			content: none;
		// 		}

		// 		.is-style-separator:-moz-only-whitespace:after {
		// 			content: none;
		// 		}

		// 		.is-style-separator.has-text-align-center:after {
		// 			margin: 0 auto;
		// 		}

		// 		.is-style-separator.has-text-align-right:after {
		// 			margin-left: auto;
		// 		}

		// 		.rtl .is-style-separator.has-text-align-left:after {
		// 			margin-right: auto;
		// 		}",
		// 	)
		// );
	}
endif;

add_action( 'init', 'gemma_block_styles' );