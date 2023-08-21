<?php

/*
 * Load theme languages
 */

function gemma_load_theme_textdomain() {
    load_theme_textdomain( 'gemma', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'gemma_load_theme_textdomain' );