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
 * Enqueues style.css on the front.
 */

 if ( ! function_exists( 'gemma_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Gemma 0.9.6
	 *
	 * @return void
	 */
	function gemma_enqueue_styles() {
		wp_enqueue_style(
			'gemma-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'gemma_enqueue_styles' );

/**
 * Enqueues editor-style.css in the editors.
 */

if ( ! function_exists( 'gemma_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Gemma 0.9.6
	 *
	 * @return void
	 */
	function gemma_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;

add_action( 'after_setup_theme', 'gemma_editor_style' );

/**
 * Enqueue block variations.
 */

if ( ! function_exists( 'gemma_block_variations' ) ) :
	/**
	 * Enqueue custom block variations
	 *
	 * @since Gemma 0.9.2
	 * @return void
	 */
	function gemma_block_variations() {

		wp_enqueue_script(
			'gemma-block-variations',
			get_theme_file_uri( '/assets/js/block-variations.js' ),
			array( 
				'wp-blocks', 
				'wp-dom-ready',
				'wp-i18n'
			),
			wp_get_theme()->get( 'Version' ),
			true
		);

	}
endif;

add_action( 'enqueue_block_editor_assets', 'gemma_block_variations' );

/**
 * Register block styles.
 */

if ( ! function_exists( 'gemma_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Gemma 0.7
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
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'all-caps',
				'label'        => __( 'All caps', 'gemma' ),
				/*
				 * Styles for the custom all caps block style
				 */
				'inline_style' => '
				:root :where(.is-style-all-caps) {
					text-transform: uppercase;
					letter-spacing: 0.2rem;
					font-feature-settings: "case" 1;
					font-size: var(--wp--preset--font-size--small);
				}',
			)
		);
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
	}
endif;

add_action( 'init', 'gemma_block_styles' );